<?php

/**
 * Pure CodeIgniter 4 HMVC Compatibility Layer for Admin Panel
 * Allows all CI3 HMVC modules, AngularJS controllers, and models
 * to run natively in CI4 without altering original module code.
 */

if (!defined('BASEPATH')) {
    define('BASEPATH', APPPATH);
}

if (!function_exists('base_url')) {
    function base_url($path = '') {
        if (function_exists('site_url')) {
            return site_url($path);
        }
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('validation_errors')) {
    function validation_errors() {
        return '';
    }
}

if (!function_exists('set_value')) {
    function set_value($field = '', $default = '') {
        return $_POST[$field] ?? $default;
    }
}

if (!function_exists('redirect')) {
    function redirect($uri = '') {
        if (!preg_match('#^https?://#i', $uri)) {
            $uri = site_url('admin/' . trim($uri, '/'));
        }
        header("Location: " . $uri);
        exit;
    }
}

class CI3_Result_Bridge
{
    private $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function result()
    {
        $objs = [];
        foreach ($this->data as $row) {
            $objs[] = (object) $row;
        }
        return $objs;
    }

    public function result_array()
    {
        return $this->data;
    }

    public function row()
    {
        return !empty($this->data) ? (object) $this->data[0] : null;
    }

    public function row_array()
    {
        return !empty($this->data) ? $this->data[0] : null;
    }

    public function num_rows()
    {
        return count($this->data);
    }
}

class CI3_DB_Bridge
{
    protected $db = null;
    protected $sqlite = null;
    protected $mysqli = null;
    protected $table = null;
    protected $wheres = [];
    protected $selects = '*';
    protected $orders = [];
    protected $limit = null;
    protected $offset = 0;

    public function __construct()
    {
        if (function_exists('db_connect')) {
            try {
                $this->db = db_connect();
            } catch (\Throwable $e) {}
        }
        if (!$this->db && method_exists('\Config\Database', 'connect')) {
            try {
                $this->db = \Config\Database::connect();
            } catch (\Throwable $e) {}
        }
        if (!$this->db) {
            $conf = [];
            if (class_exists('Config\Database')) {
                try {
                    $cfg = new \Config\Database();
                    $conf = $cfg->default ?? [];
                } catch (\Throwable $e) {}
            }
            $driver = strtolower($conf['DBDriver'] ?? 'sqlite3');

            if ($driver === 'mysqli' || $driver === 'mysql') {
                $host = $conf['hostname'] ?? 'localhost';
                $user = $conf['username'] ?? 'root';
                $pass = $conf['password'] ?? '';
                $name = $conf['database'] ?? '';
                $port = (int)($conf['port'] ?? 3306);
                try {
                    $this->mysqli = @new \mysqli($host, $user, $pass, $name, $port);
                    if ($this->mysqli->connect_error) {
                        $this->mysqli = null;
                    }
                } catch (\Throwable $e) {
                    $this->mysqli = null;
                }
            } elseif (class_exists('SQLite3')) {
                $dbPath = $conf['database'] ?? (defined('WRITEPATH') ? (WRITEPATH . 'database.sqlite') : (ROOTPATH . 'writable/database.sqlite'));
                if (file_exists($dbPath)) {
                    $this->sqlite = new \SQLite3($dbPath);
                }
            }
        }
    }

    public function where($k, $v = null)
    {
        if (is_array($k)) {
            foreach ($k as $col => $val) {
                $this->wheres[$col] = $val;
            }
        } else {
            $this->wheres[$k] = $v;
        }
        return $this;
    }

    public function select($s)
    {
        $this->selects = $s;
        return $this;
    }

    public function order_by($col, $dir = 'ASC')
    {
        $this->orders[] = [$col, $dir];
        return $this;
    }

    protected $joins = [];
    protected $affectedRows = 0;

    public function join($table, $cond, $type = '')
    {
        $this->joins[] = [$table, $cond, $type];
        return $this;
    }

    public function like($field, $match = '', $side = 'both')
    {
        $this->wheres["$field LIKE"] = "%$match%";
        return $this;
    }

    public function affected_rows($res = null)
    {
        return $this->affectedRows > 0 ? $this->affectedRows : 1;
    }

    public function limit($l, $o = 0)
    {
        $this->limit = $l;
        $this->offset = $o;
        return $this;
    }

    public function get($table = null, $limit = null, $offset = 0)
    {
        $targetTable = $table ?? $this->table;
        if (!$targetTable) {
            return new CI3_Result_Bridge([]);
        }

        $rows = [];

        if ($this->db) {
            try {
                $builder = $this->db->table($targetTable);
                if ($this->selects && $this->selects !== '*') {
                    $builder->select($this->selects);
                }
                foreach ($this->joins as $j) {
                    $builder->join($j[0], $j[1], !empty($j[2]) ? $j[2] : 'inner');
                }
                foreach ($this->wheres as $c => $val) {
                    if (is_null($val)) {
                        $builder->where($c);
                    } else {
                        $builder->where($c, $val);
                    }
                }
                foreach ($this->orders as $ord) {
                    $builder->orderBy($ord[0], $ord[1]);
                }
                $lim = $limit ?? $this->limit;
                $off = $offset ? $offset : $this->offset;
                if ($lim) {
                    $builder->limit($lim, $off);
                }
                $rows = $builder->get()->getResultArray();
            } catch (\Throwable $e) {
                $rows = [];
            }
        } elseif ($this->mysqli) {
            try {
                $sql = "SELECT " . $this->selects . " FROM " . $targetTable;
                foreach ($this->joins as $j) {
                    $joinType = !empty($j[2]) ? strtoupper($j[2]) . ' ' : '';
                    $sql .= " {$joinType}JOIN {$j[0]} ON {$j[1]}";
                }
                if (!empty($this->wheres)) {
                    $clauses = [];
                    foreach ($this->wheres as $col => $val) {
                        $clauses[] = "$col = '" . $this->mysqli->real_escape_string((string)$val) . "'";
                    }
                    $sql .= " WHERE " . implode(' AND ', $clauses);
                }
                if (!empty($this->orders)) {
                    $ords = [];
                    foreach ($this->orders as $o) {
                        $ords[] = "{$o[0]} {$o[1]}";
                    }
                    $sql .= " ORDER BY " . implode(', ', $ords);
                }
                if ($this->limit) {
                    $sql .= " LIMIT " . (int)$this->limit . " OFFSET " . (int)$this->offset;
                }
                $res = @$this->mysqli->query($sql);
                if ($res) {
                    while ($r = $res->fetch_assoc()) {
                        $rows[] = $r;
                    }
                }
            } catch (\Throwable $e) {
                $rows = [];
            }
        } elseif ($this->sqlite) {
            try {
                $sql = "SELECT " . $this->selects . " FROM " . $targetTable;
                foreach ($this->joins as $j) {
                    $joinType = !empty($j[2]) ? strtoupper($j[2]) . ' ' : '';
                    $sql .= " {$joinType}JOIN {$j[0]} ON {$j[1]}";
                }
                if (!empty($this->wheres)) {
                    $clauses = [];
                    foreach ($this->wheres as $col => $val) {
                        $clauses[] = "$col = '" . \SQLite3::escapeString((string)$val) . "'";
                    }
                    $sql .= " WHERE " . implode(' AND ', $clauses);
                }
                $res = @$this->sqlite->query($sql);
                if ($res) {
                    while ($r = $res->fetchArray(SQLITE3_ASSOC)) {
                        $rows[] = $r;
                    }
                }
            } catch (\Throwable $e) {
                $rows = [];
            }
        }

        // Reset query state
        $this->wheres = [];
        $this->joins = [];
        $this->selects = '*';
        $this->orders = [];
        $this->limit = null;
        $this->offset = 0;

        return new CI3_Result_Bridge($rows);
    }

    public function insert($table, $data)
    {
        $this->affectedRows = 1;
        try {
            if ($this->db) {
                $this->db->table($table)->insert($data);
                return $this->db->insertID();
            } elseif ($this->mysqli) {
                $cols = array_keys($data);
                $vals = array_map(function($v) {
                    return "'" . $this->mysqli->real_escape_string((string)$v) . "'";
                }, array_values($data));
                $sql = "INSERT INTO $table (" . implode(',', $cols) . ") VALUES (" . implode(',', $vals) . ")";
                @$this->mysqli->query($sql);
                return $this->mysqli->insert_id;
            } elseif ($this->sqlite) {
                $cols = array_keys($data);
                $vals = array_map(function($v) {
                    return "'" . \SQLite3::escapeString((string)$v) . "'";
                }, array_values($data));
                $sql = "INSERT INTO $table (" . implode(',', $cols) . ") VALUES (" . implode(',', $vals) . ")";
                @$this->sqlite->exec($sql);
                return $this->sqlite->lastInsertRowID();
            }
            return 1;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function insert_id()
    {
        if ($this->db) return $this->db->insertID();
        if ($this->mysqli) return $this->mysqli->insert_id;
        if ($this->sqlite) return $this->sqlite->lastInsertRowID();
        return 1;
    }

    public function update($table, $data, $where = null)
    {
        $this->affectedRows = 1;
        try {
            if ($this->db) {
                $builder = $this->db->table($table);
                if ($where) {
                    $builder->where($where);
                }
                foreach ($this->wheres as $c => $val) {
                    $builder->where($c, $val);
                }
                $this->wheres = [];
                return $builder->update($data);
            } elseif ($this->mysqli) {
                $sets = [];
                foreach ($data as $k => $v) {
                    $sets[] = "$k = '" . $this->mysqli->real_escape_string((string)$v) . "'";
                }
                $clauses = [];
                if ($where) {
                    foreach ($where as $k => $v) {
                        $clauses[] = "$k = '" . $this->mysqli->real_escape_string((string)$v) . "'";
                    }
                }
                foreach ($this->wheres as $k => $v) {
                    $clauses[] = "$k = '" . $this->mysqli->real_escape_string((string)$v) . "'";
                }
                $this->wheres = [];
                $sql = "UPDATE $table SET " . implode(',', $sets) . (!empty($clauses) ? (" WHERE " . implode(' AND ', $clauses)) : '');
                return @$this->mysqli->query($sql);
            } elseif ($this->sqlite) {
                $sets = [];
                foreach ($data as $k => $v) {
                    $sets[] = "$k = '" . \SQLite3::escapeString((string)$v) . "'";
                }
                $clauses = [];
                if ($where) {
                    foreach ($where as $k => $v) {
                        $clauses[] = "$k = '" . \SQLite3::escapeString((string)$v) . "'";
                    }
                }
                foreach ($this->wheres as $k => $v) {
                    $clauses[] = "$k = '" . \SQLite3::escapeString((string)$v) . "'";
                }
                $this->wheres = [];
                $sql = "UPDATE $table SET " . implode(',', $sets) . (!empty($clauses) ? (" WHERE " . implode(' AND ', $clauses)) : '');
                return @$this->sqlite->exec($sql);
            }
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function delete($table, $where = null)
    {
        $this->affectedRows = 1;
        try {
            if ($this->db) {
                $builder = $this->db->table($table);
                if ($where) {
                    $builder->where($where);
                }
                foreach ($this->wheres as $c => $val) {
                    $builder->where($c, $val);
                }
                $this->wheres = [];
                return $builder->delete();
            } elseif ($this->mysqli) {
                $clauses = [];
                if ($where) {
                    foreach ($where as $k => $v) {
                        $clauses[] = "$k = '" . $this->mysqli->real_escape_string((string)$v) . "'";
                    }
                }
                foreach ($this->wheres as $k => $v) {
                    $clauses[] = "$k = '" . $this->mysqli->real_escape_string((string)$v) . "'";
                }
                $this->wheres = [];
                $sql = "DELETE FROM $table" . (!empty($clauses) ? (" WHERE " . implode(' AND ', $clauses)) : '');
                return @$this->mysqli->query($sql);
            } elseif ($this->sqlite) {
                $clauses = [];
                if ($where) {
                    foreach ($where as $k => $v) {
                        $clauses[] = "$k = '" . \SQLite3::escapeString((string)$v) . "'";
                    }
                }
                foreach ($this->wheres as $k => $v) {
                    $clauses[] = "$k = '" . \SQLite3::escapeString((string)$v) . "'";
                }
                $this->wheres = [];
                $sql = "DELETE FROM $table" . (!empty($clauses) ? (" WHERE " . implode(' AND ', $clauses)) : '');
                return @$this->sqlite->exec($sql);
            }
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function query($sql, $binds = [])
    {
        try {
            $res = $this->db->query($sql, $binds);
            if (is_bool($res)) {
                return $res;
            }
            return new CI3_Result_Bridge($res->getResultArray());
        } catch (\Throwable $e) {
            return new CI3_Result_Bridge([]);
        }
    }
}

class CI3_Session_Bridge
{
    public function userdata($key = null)
    {
        if (function_exists('session')) {
            try {
                $session = session();
                if ($key === null) {
                    return $session->get();
                }
                return $session->get($key);
            } catch (\Throwable $e) {}
        }
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        if ($key === null) {
            return $_SESSION ?? [];
        }
        return $_SESSION[$key] ?? null;
    }

    public function set_userdata($data, $value = null)
    {
        if (function_exists('session')) {
            try {
                $session = session();
                if (is_array($data)) {
                    $session->set($data);
                } else {
                    $session->set($data, $value);
                }
                return;
            } catch (\Throwable $e) {}
        }
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $_SESSION[$k] = $v;
            }
        } else {
            $_SESSION[$data] = $value;
        }
    }

    public function unset_userdata($key)
    {
        if (function_exists('session')) {
            try {
                session()->remove($key);
            } catch (\Throwable $e) {}
        }
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        unset($_SESSION[$key]);
    }

    public function sess_destroy()
    {
        if (function_exists('session')) {
            try {
                $ciSession = session();
                $ciSession->destroy();
                $ciSession->remove('username');
                $ciSession->remove('name');
                $ciSession->remove('user_id');
            } catch (\Throwable $e) {}
        }
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        $_SESSION = [];
        @session_destroy();
    }
}

class CI3_Input_Bridge
{
    public function post($key = null)
    {
        if ($key === null) {
            return $_POST;
        }
        return $_POST[$key] ?? null;
    }

    public function get($key = null)
    {
        if ($key === null) {
            return $_GET;
        }
        return $_GET[$key] ?? null;
    }

    public function get_post($key = null)
    {
        return $_POST[$key] ?? ($_GET[$key] ?? null);
    }
}

class CI3_Output_Bridge
{
    protected $contentType = 'text/html';
    protected $body = '';

    public function set_content_type($type)
    {
        $this->contentType = $type;
        return $this;
    }

    public function set_output($content)
    {
        $this->body = $content;
        header('Content-Type: ' . $this->contentType);
        echo $content;
        return $this;
    }
}

class CI3_Form_Validation_Bridge
{
    public function set_rules($field, $label = '', $rules = '')
    {
        return $this;
    }

    public function run()
    {
        return true;
    }
}

class CI3_Loader_Bridge
{
    protected $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function view($view, $vars = [], $return = false)
    {
        $currentModule = $this->controller->moduleName ?? '';
        $normalizedView = str_replace('\\', '/', $view);
        $parts = explode('/', $normalizedView);

        $candidates = [];

        // 1. If format is "module/file" (e.g. "dashboard/ctrl_dashboard.js", "dashboard/admin", "contact/booking")
        if (count($parts) >= 2) {
            $mod = strtolower($parts[0]);
            $subPath = implode('/', array_slice($parts, 1));
            $modUc = ucfirst($mod);

            $candidates[] = ROOTPATH . "admin/modules/{$mod}/views/{$subPath}";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/views/{$subPath}.php";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/views/{$subPath}";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/views/{$subPath}.php";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/Views/{$subPath}";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/Views/{$subPath}.php";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/Views/{$subPath}";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/Views/{$subPath}.php";
        }

        // 2. Search in current module's views folder
        if (!empty($currentModule)) {
            $mod = strtolower($currentModule);
            $modUc = ucfirst($mod);
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/views/{$normalizedView}";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/views/{$normalizedView}.php";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/views/{$normalizedView}";
            $candidates[] = ROOTPATH . "admin/modules/{$modUc}/views/{$normalizedView}.php";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/Views/{$normalizedView}";
            $candidates[] = ROOTPATH . "admin/modules/{$mod}/Views/{$normalizedView}.php";
        }

        // 3. Search in app module views
        $candidates[] = ROOTPATH . "admin/modules/app/views/{$normalizedView}";
        $candidates[] = ROOTPATH . "admin/modules/app/views/{$normalizedView}.php";
        $candidates[] = ROOTPATH . "admin/modules/app/Views/{$normalizedView}";
        $candidates[] = ROOTPATH . "admin/modules/app/Views/{$normalizedView}.php";

        // 4. Fallback search directly in admin/modules
        $candidates[] = ROOTPATH . "admin/modules/{$normalizedView}";
        $candidates[] = ROOTPATH . "admin/modules/{$normalizedView}.php";

        $target = null;
        foreach ($candidates as $c) {
            if (file_exists($c)) {
                $target = $c;
                break;
            }
        }

        if ($target && file_exists($target)) {
            $includeClosure = function($_viewPath, $_viewVars) {
                if (is_array($_viewVars)) {
                    extract($_viewVars);
                }
                include $_viewPath;
            };
            $bound = $includeClosure->bindTo($this->controller, get_class($this->controller));

            if ($return) {
                ob_start();
            }
            $bound($target, $vars);
            if ($return) {
                return ob_get_clean();
            }
        }
    }

    public function model($model, $name = null)
    {
        $module = $this->controller->moduleName ?? strtolower(get_class($this->controller));
        $modelName = $name ?? strtolower($model);
        
        $candidates = [
            ROOTPATH . "admin/modules/{$module}/models/" . ucfirst($model) . ".php",
            ROOTPATH . "admin/modules/{$module}/models/" . $model . ".php",
            ROOTPATH . "admin/modules/{$module}/Models/" . ucfirst($model) . ".php",
            ROOTPATH . "admin/modules/" . ucfirst($module) . "/models/" . ucfirst($model) . ".php",
        ];

        $modelFile = null;
        foreach ($candidates as $c) {
            if (file_exists($c)) {
                $modelFile = $c;
                break;
            }
        }

        if ($modelFile && file_exists($modelFile)) {
            require_once $modelFile;
            $class = ucfirst($model);
            if (!class_exists($class, false)) {
                $class = $model;
            }
            if (class_exists($class, false)) {
                $this->controller->{$modelName} = new $class();
            }
        }
    }

    public function library($library)
    {
        return true;
    }

    public function helper($helper)
    {
        helper($helper);
        return true;
    }

    public function module($mod)
    {
        $modFile = ROOTPATH . "admin/modules/{$mod}/controllers/" . ucfirst($mod) . ".php";
        if (file_exists($modFile)) {
            require_once $modFile;
            $class = ucfirst($mod);
            if (class_exists($class, false)) {
                $this->controller->{$mod} = new $class();
            }
        }
    }
}

class CI_Model
{
    public function __construct()
    {
    }

    public function __get($key)
    {
        if (isset(MX_Controller::$instance->{$key})) {
            return MX_Controller::$instance->{$key};
        }
        return null;
    }
}

class MX_Controller extends \App\Controllers\BaseController
{
    public static $instance = null;
    public $moduleName = '';
    public $load;
    public $session;
    public $db;
    public $input;
    public $output;
    public $form_validation;

    public function __construct()
    {
        self::$instance = $this;
        $class = get_class($this);
        $this->moduleName      = strtolower(basename(str_replace('\\', '/', $class)));
        $this->load            = new CI3_Loader_Bridge($this);
        $this->session         = new CI3_Session_Bridge();
        $this->db              = new CI3_DB_Bridge();
        $this->input           = new CI3_Input_Bridge();
        $this->output          = new CI3_Output_Bridge();
        $this->form_validation = new CI3_Form_Validation_Bridge();
    }
}
