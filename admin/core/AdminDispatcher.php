<?php

namespace Admin\Core;

use App\Controllers\BaseController;

class AdminDispatcher extends BaseController
{
    public function dispatch(string $module = 'login', string $method = 'index', ...$params)
    {
        // Load MX_Controller base layer
        require_once ROOTPATH . 'admin/core/MX_Controller.php';

        $module = strtolower($module);
        $method = strtolower($method);

        // Find controller file
        $candidates = [
            ROOTPATH . "admin/modules/{$module}/controllers/" . ucfirst($module) . ".php",
            ROOTPATH . "admin/modules/{$module}/controllers/{$module}.php",
            ROOTPATH . "admin/modules/{$module}/Controllers/" . ucfirst($module) . ".php",
        ];

        $controllerFile = null;
        foreach ($candidates as $c) {
            if (file_exists($c)) {
                $controllerFile = $c;
                break;
            }
        }

        if (!$controllerFile) {
            // Check fallback to login
            $controllerFile = ROOTPATH . "admin/modules/login/controllers/Login.php";
            $className = "Login";
            $method = "index";
        } else {
            $className = ucfirst($module);
        }

        require_once $controllerFile;

        if (!class_exists($className, false)) {
            $className = $module;
        }

        if (!class_exists($className, false)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Admin Controller $className not found");
        }

        $controllerInstance = new $className();
        $controllerInstance->moduleName = $module;

        // Verify method exists
        if (!method_exists($controllerInstance, $method)) {
            $method = 'index';
        }

        ob_start();
        $return = call_user_func_array([$controllerInstance, $method], $params);
        $buffered = ob_get_clean();

        // Detect any Content-Type set via PHP header() or module specifics
        $contentType = null;
        if ($module === 'app' && $method === 'app_main') {
            $contentType = 'application/javascript; charset=UTF-8';
        } else {
            foreach (headers_list() as $h) {
                if (stripos($h, 'Content-Type:') === 0) {
                    $contentType = trim(substr($h, 13));
                }
            }
        }

        if ($contentType && isset($this->response) && method_exists($this->response, 'setHeader')) {
            $this->response->setHeader('Content-Type', $contentType);
        }

        if ($return instanceof \CodeIgniter\HTTP\ResponseInterface) {
            return $return;
        }

        if (!empty($buffered)) {
            if (isset($this->response) && $this->response && method_exists($this->response, 'setBody')) {
                return $this->response->setBody($buffered);
            }
            echo $buffered;
            return null;
        }

        if (is_string($return)) {
            if (isset($this->response) && $this->response && method_exists($this->response, 'setBody')) {
                return $this->response->setBody($return);
            }
            echo $return;
            return null;
        }

        return isset($this->response) ? $this->response : null;
    }
}
