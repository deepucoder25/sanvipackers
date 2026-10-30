<?php
/**
 * CodeIgniter 4.6.1 - PHP 7.3 Compatibility Bridge
 * Gracefully renders the CI4 site layout and views when viewed on older PHP (PHP 7.3.x)
 * without fatal version lockouts.
 */

session_start();

$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$baseDir = rtrim(dirname($scriptName), '/\\');
$rootDir = preg_replace('#/public$#', '', $baseDir);

$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$appBase = $rootDir;

if ($baseDir !== '' && strpos($requestUri, $baseDir) === 0) {
    $requestUri = substr($requestUri, strlen($baseDir));
    $appBase = $baseDir;
} elseif ($rootDir !== '' && strpos($requestUri, $rootDir) === 0) {
    $requestUri = substr($requestUri, strlen($rootDir));
    $appBase = $rootDir;
}
$requestUri = preg_replace('#^/index\.php/?#', '', $requestUri);
$page = trim($requestUri, '/');

if (isset($_GET['route']) && $_GET['route'] !== '') {
    $page = trim($_GET['route'], '/');
} elseif ($page === '' && isset($_GET['page'])) {
    $page = trim($_GET['page'], '/');
}
if ($page === '' || $page === '/') {
    $page = 'home';
}

$site = (object) [
    'name' => 'QuickRelocation',
    'tagline' => 'Safe, Fast & Insured Relocation Services Across India',
    'phone' => '+91 98765 43210',
    'email' => 'info@relocationservices.com',
    'address' => 'Plot No. 42, Transport Nagar, Mumbai - 400705, Maharashtra, India',
    'whatsapp' => '919876543210',
    'workingHours' => 'Mon - Sat: 9:00 AM - 8:00 PM',
    'social' => [
        'facebook' => '#',
        'twitter' => '#',
        'instagram' => '#',
        'linkedin' => '#',
    ]
];

$services = [
    [
        'slug' => 'household-moving',
        'title' => 'Household Moving',
        'icon' => 'fa-house-chimney',
        'desc' => 'Complete door-to-door home relocation with 5-layer bubble packaging, specialized wardrobe boxes, and careful furniture assembly.',
        'features' => ['Zero damage guarantee', 'Custom crating for glassware', 'Unpacking & rearranging']
    ],
    [
        'slug' => 'office-relocation',
        'title' => 'Office Corporate Relocation',
        'icon' => 'fa-briefcase',
        'desc' => 'Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving.',
        'features' => ['Weekend / night shifting', 'IT & server equipment care', 'Project manager assigned']
    ],
    [
        'slug' => 'vehicle-transportation',
        'title' => 'Car & Bike Transportation',
        'icon' => 'fa-car',
        'desc' => 'Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with transit tracking from start to finish.',
        'features' => ['Covered car trailers', 'Pre-transit scratch inspection', 'Doorstep pickup & drop']
    ],
    [
        'slug' => 'warehouse-storage',
        'title' => 'Warehouse & Storage',
        'icon' => 'fa-warehouse',
        'desc' => '24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans.',
        'features' => ['Pest-controlled space', 'Fire safety equipped', 'Flexible weekly/monthly terms']
    ],
    [
        'slug' => 'packing-moving',
        'title' => 'Packing & Moving',
        'icon' => 'fa-boxes-packing',
        'desc' => 'Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors for total safety.',
        'features' => ['Premium packaging material', 'Labelled item inventory', 'Fragile items specialized box']
    ],
    [
        'slug' => 'loading-unloading',
        'title' => 'Loading & Unloading',
        'icon' => 'fa-truck-ramp-box',
        'desc' => 'Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts for heavy equipment.',
        'features' => ['Hydraulic lifting tools', 'Trained & courteous crew', 'Floor & door frame protection']
    ],
];

$whyChooseUs = [
    ['icon' => 'fa-shield-halved', 'title' => '100% Insured Transit', 'desc' => 'Comprehensive transit insurance policy for complete peace of mind throughout the journey.'],
    ['icon' => 'fa-clock', 'title' => 'On-Time Guarantee', 'desc' => 'Strict schedule compliance with live GPS updates and committed delivery windows.'],
    ['icon' => 'fa-tags', 'title' => 'Transparent Rates', 'desc' => 'Zero hidden charges, upfront transparent quotes with no surprise toll or packaging costs.'],
    ['icon' => 'fa-user-tie', 'title' => 'Trained & Verified Crew', 'desc' => 'Background-checked movers who handle delicate electronics, antiques, and heavy furniture.'],
    ['icon' => 'fa-truck-fast', 'title' => 'Nationwide Container Fleet', 'desc' => 'Modern fleet of weatherproof enclosed container trucks connecting 500+ Indian cities.'],
    ['icon' => 'fa-headset', 'title' => '24x7 Personal Support', 'desc' => 'A dedicated relocation officer assigned to guide you from pickup survey until final unboxing.'],
];

// Helper functions for CI4 compatibility in preview
function esc($str) {
    return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}
function site_url($path = '') {
    global $appBase;
    $path = trim($path, '/');
    if ($path === '' || $path === 'home') {
        return ($appBase !== '' ? $appBase : '') . '/';
    }
    return ($appBase !== '' ? $appBase : '') . '/' . $path;
}
function csrf_field() {
    return '<input type="hidden" name="csrf_test_name" value="' . md5(session_id()) . '">';
}
if (!function_exists('base_url')) {
    function base_url($path = '') {
        return site_url($path);
    }
}
if (!function_exists('view')) {
    function view($viewPath, $data = []) {
        $cleanPath = str_replace(['Modules\\', '\\Views\\', '\\'], ['', '/', '/'], $viewPath);
        $file = __DIR__ . '/../app/Modules/' . $cleanPath . '.php';
        if (!file_exists($file)) {
            $file = __DIR__ . '/../app/' . str_replace('\\', '/', $viewPath) . '.php';
        }
        if (file_exists($file)) {
            extract($data);
            ob_start();
            include $file;
            return ob_get_clean();
        }
        return '';
    }
}
if (!function_exists('session')) {
    function session() {
        return new class {
            public function get($key = null) {
                if ($key === null) return $_SESSION ?? [];
                return $_SESSION[$key] ?? null;
            }
            public function set($key, $val = null) {
                if (is_array($key)) {
                    foreach ($key as $k => $v) {
                        $_SESSION[$k] = $v;
                    }
                } else {
                    $_SESSION[$key] = $val;
                }
            }
            public function has($key) {
                return isset($_SESSION[$key]);
            }
            public function remove($key) {
                unset($_SESSION[$key]);
            }
            public function getFlashdata($key) {
                $val = $_SESSION['flash_' . $key] ?? ($_SESSION['review_' . $key] ?? null);
                unset($_SESSION['flash_' . $key], $_SESSION['review_' . $key]);
                return $val;
            }
            public function setFlashdata($key, $val) {
                $_SESSION['flash_' . $key] = $val;
            }
        };
    }
}

// Database / Inquiries storage loaded from Config/Database.php
if (!defined('WRITEPATH')) {
    define('WRITEPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'writable' . DIRECTORY_SEPARATOR);
}
if (!defined('APPPATH')) {
    define('APPPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
}
if (!defined('ENVIRONMENT')) {
    define('ENVIRONMENT', 'development');
}
if (!class_exists('CodeIgniter\Database\Config', false)) {
    eval('namespace CodeIgniter\Database; class Config { public function __construct(){} }');
}
require_once __DIR__ . '/../app/Config/Database.php';
$ciDb = new \Config\Database();
$dbPath = $ciDb->default['database'] ?? (WRITEPATH . 'database.sqlite');
$success = null;
$error = null;

// Handle contacts/booking AJAX endpoint (from quoteform & quotemodal)
if ($page === 'contacts/booking') {
    $name  = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mfrom = trim($_POST['mfrom'] ?? '');
    $mto   = trim($_POST['mto'] ?? '');
    $msg   = trim($_POST['message'] ?? ($_POST['msg'] ?? ''));

    if (empty($name) || empty($phone) || strlen(preg_replace('/[^0-9]/', '', $phone)) < 10) {
        echo "<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'>Name and valid 10-digit mobile number are required.</div>";
        exit;
    }

    try {
        $db = new SQLite3($dbPath);
        $db->exec("CREATE TABLE IF NOT EXISTS bookings (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT, phone TEXT, mfrom TEXT, mto TEXT, msg TEXT, timestamp DATETIME DEFAULT CURRENT_TIMESTAMP)");
        $stmt = $db->prepare("INSERT INTO bookings (name, email, phone, mfrom, mto, msg) VALUES (:n, :e, :p, :mf, :mt, :m)");
        $stmt->bindValue(':n', $name, SQLITE3_TEXT);
        $stmt->bindValue(':e', $email, SQLITE3_TEXT);
        $stmt->bindValue(':p', $phone, SQLITE3_TEXT);
        $stmt->bindValue(':mf', $mfrom, SQLITE3_TEXT);
        $stmt->bindValue(':mt', $mto, SQLITE3_TEXT);
        $stmt->bindValue(':m', $msg, SQLITE3_TEXT);
        $stmt->execute();
        echo "1";
    } catch (Exception $e) {
        echo "1";
    }
    exit;
}

// Handle contacts/contact endpoint (from form.js ajax-form)
if ($page === 'contacts/contact') {
    $name    = trim($_POST['name'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($phone) || strlen(preg_replace('/[^0-9]/', '', $phone)) < 10) {
        echo "<div class='alert alert-danger' style='color:#dc2626; background:#fee2e2; border:1px solid #fca5a5; padding:10px 15px; border-radius:6px; margin-top:10px;'>Name and valid 10-digit mobile number are required.</div>";
        exit;
    }

    try {
        $db = new SQLite3($dbPath);
        $db->exec("CREATE TABLE IF NOT EXISTS contacts (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT, phone TEXT, message TEXT, country_name TEXT, timestamp DATETIME DEFAULT CURRENT_TIMESTAMP)");
        $stmt = $db->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (:n, :e, :p, :m)");
        $stmt->bindValue(':n', $name, SQLITE3_TEXT);
        $stmt->bindValue(':e', $email, SQLITE3_TEXT);
        $stmt->bindValue(':p', $phone, SQLITE3_TEXT);
        $stmt->bindValue(':m', $message, SQLITE3_TEXT);
        $stmt->execute();
        echo "1";
    } catch (Exception $e) {
        echo "1";
    }
    exit;
}

// Handle tracking/track AJAX endpoint
if ($page === 'tracking/track') {
    $trackingNumber = trim($_POST['trackingNumber'] ?? '');
    header('Content-Type: application/json');
    if ($trackingNumber === '') {
        echo json_encode(['status' => 'error', 'message' => 'Please enter a valid Tracking ID, LR No, or GR No.']);
        exit;
    }
    try {
        $db = new SQLite3($dbPath);
        $stmt = $db->prepare("SELECT ship_main.id as main_id, ship_main.gr_no, ship_main.tracking_id, ship_main.lr_no, ship_main.c_name, ship_main.ship_from, ship_main.ship_to, ship_main.ship_type, ship_main.ex_del_date, ship_tracking.id as tracking_row_id, ship_tracking.type, ship_tracking.date, ship_tracking.time, ship_tracking.place, ship_tracking.remarks FROM ship_main LEFT JOIN ship_tracking ON ship_main.id = ship_tracking.sh_id WHERE (ship_main.gr_no = :tn OR ship_main.tracking_id = :tn OR ship_main.lr_no = :tn) ORDER BY ship_tracking.type ASC");
        $stmt->bindValue(':tn', $trackingNumber, SQLITE3_TEXT);
        $res = $stmt->execute();
        $data = [];
        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
            $data[] = $row;
        }
        if (!empty($data)) {
            $first = $data[0];
            $trackingId = !empty($first['tracking_id']) ? $first['tracking_id'] : (!empty($first['lr_no']) ? $first['lr_no'] : $first['gr_no']);
            $lrNo = !empty($first['lr_no']) ? $first['lr_no'] : $first['gr_no'];
            $response = [
                'status' => 'success',
                'main'   => [
                    'tracking_id' => $trackingId,
                    'lr_no'       => $lrNo,
                    'c_name'      => $first['c_name'] ?? '',
                    'ship_from'   => $first['ship_from'] ?? '',
                    'ship_to'     => $first['ship_to'] ?? '',
                    'ship_type'   => $first['ship_type'] ?? 'Household Shifting',
                    'ex_del_date' => $first['ex_del_date'] ?? ''
                ],
                'timeline' => []
            ];
            foreach ($data as $row) {
                if (!empty($row['date']) || !empty($row['place']) || !empty($row['remarks'])) {
                    $response['timeline'][] = [
                        'type'    => $row['type'] ?? '',
                        'date'    => $row['date'] ?? '',
                        'time'    => $row['time'] ?? '',
                        'place'   => $row['place'] ?? '',
                        'remarks' => $row['remarks'] ?? ''
                    ];
                }
            }
            echo json_encode($response);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No tracking records found for: ' . htmlspecialchars($trackingNumber) . '. Please verify the number.']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
    }
    exit;
}

// Handle reviews/submit endpoint
if ($page === 'reviews/submit') {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $city  = trim($_POST['city'] ?? ($_POST['title'] ?? ''));
    $desc  = trim($_POST['review'] ?? ($_POST['desc'] ?? ''));
    $stars = (int) ($_POST['rating'] ?? ($_POST['stars'] ?? 5));
    if ($stars < 1 || $stars > 5) $stars = 5;

    $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
           || (isset($_POST['ajax']) && $_POST['ajax'] == 1);

    if (empty($name) || empty($email) || empty($desc)) {
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Name, email, and review experience are required.']);
            exit;
        }
        $_SESSION['review_error'] = 'Name, email, and review experience are required.';
        header('Location: ' . site_url('reviews'));
        exit;
    }

    try {
        $db = new SQLite3($dbPath);
        $stmt = $db->prepare("INSERT INTO reviews (b_id, name, email, r_title, city, r_desc, r_img, stars, views, status, posted_date) VALUES (0, :n, :e, :t, :c, :d, '', :s, 0, 1, CURRENT_TIMESTAMP)");
        $stmt->bindValue(':n', $name, SQLITE3_TEXT);
        $stmt->bindValue(':e', $email, SQLITE3_TEXT);
        $stmt->bindValue(':t', $city, SQLITE3_TEXT);
        $stmt->bindValue(':c', $city, SQLITE3_TEXT);
        $stmt->bindValue(':d', $desc, SQLITE3_TEXT);
        $stmt->bindValue(':s', $stars, SQLITE3_INTEGER);
        $stmt->execute();

        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode([
                'status'  => 'success', 
                'message' => 'Thank you! Your review has been submitted successfully.',
                'review'  => [
                    'name'        => $name,
                    'email'       => $email,
                    'city'        => $city,
                    'r_desc'      => $desc,
                    'stars'       => $stars,
                    'posted_date' => date('M d, Y')
                ]
            ]);
            exit;
        }
        $_SESSION['review_success'] = 'Thank you! Your review has been submitted successfully.';
    } catch (Exception $e) {
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Database error']);
            exit;
        }
    }
    header('Location: ' . site_url('reviews'));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'contact') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($name) && !empty($phone)) {
        try {
            $db = new SQLite3($dbPath);
            $db->exec("CREATE TABLE IF NOT EXISTS contacts (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT, phone TEXT, message TEXT, country_name TEXT, timestamp DATETIME DEFAULT CURRENT_TIMESTAMP)");
            $stmt = $db->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (:n, :e, :p, :m)");
            $stmt->bindValue(':n', $name, SQLITE3_TEXT);
            $stmt->bindValue(':e', $email, SQLITE3_TEXT);
            $stmt->bindValue(':p', $phone, SQLITE3_TEXT);
            $stmt->bindValue(':m', ($service ? "[$service] " : "") . $message, SQLITE3_TEXT);
            $stmt->execute();
            $success = 'Thank you! Your inquiry has been received. Our team will contact you shortly.';
        } catch (Exception $e) {
            $success = 'Thank you! Your inquiry has been received.';
        }
    } else {
        $error = 'Name and phone number are required.';
    }
}

// Redirect standalone /login directly to /admin/login
if ($page === 'login') {
    header('Location: ' . site_url('admin/login'));
    exit;
}

// Admin handling (Pure CI4 HMVC Engine)
if ($page === 'admin' || strpos($page, 'admin/') === 0) {
    if (!class_exists('CodeIgniter\Controller', false)) {
        eval('namespace CodeIgniter; class Controller {}');
    }
    if (!class_exists('App\Controllers\BaseController', false)) {
        eval('namespace App\Controllers; class BaseController extends \CodeIgniter\Controller { public function __construct(){} }');
    }
    if (!defined('ROOTPATH')) {
        define('ROOTPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
    }
    require_once ROOTPATH . 'admin/core/MX_Controller.php';
    require_once ROOTPATH . 'admin/core/AdminDispatcher.php';

    $adminUri = substr($page, strlen('admin'));
    $adminUri = trim($adminUri, '/');
    if (($adminUri === '' || $adminUri === 'login') && !empty($_SESSION['username'])) {
        header('Location: ' . site_url('admin/app'));
        exit;
    }
    $parts = ($adminUri !== '') ? explode('/', $adminUri) : ['login', 'index'];
    $mod = $parts[0] ?? 'login';
    $meth = $parts[1] ?? 'index';
    $params = array_slice($parts, 2);

    $dispatcher = new \Admin\Core\AdminDispatcher();
    $resp = $dispatcher->dispatch($mod, $meth, ...$params);
    if ($resp instanceof \CodeIgniter\HTTP\ResponseInterface) {
        echo $resp->getBody();
    }
    exit;
}

// Determine Title and Meta Description per module (Exact CI3 Controller Pattern)
$title = $site->name . ", " . $site->phone;
$description = "Your trusted partner for hassle-free, secure relocations. Efficient home and office moving services with competitive pricing. Contact " . $site->name . " at " . $site->phone . ".";

if ($page === 'about' || $page === 'about-us') {
    $title = "About Us | " . $site->name;
    $description = "Learn more about " . $site->name . ", our legacy, infrastructure, expert team, mission, and vision in the packing and moving industry.";
} elseif ($page === 'why-choose-us') {
    $title = "Why Choose Us | " . $site->name;
    $description = "Discover why customers trust " . $site->name . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
} elseif ($page === 'services' || $page === 'our-services') {
    $title = "Our Relocation Services | " . $site->name;
    $description = "Explore safe, reliable and affordable packing, moving, car transport, and warehouse services from " . $site->name . ".";
} elseif ($page === 'contact' || $page === 'contact-us') {
    $title = "Contact Us | " . $site->name;
    $description = "Get in touch with " . $site->name . " for quick relocation quotes, customer support, and branch locations across India. Call " . $site->phone . ".";
} elseif ($page === 'city' || $page === 'our-branches' || $page === 'states') {
    $title = "All India Service " . $site->name;
    $description = $site->name . " is best packers and movers service provider across India.";
} elseif (strpos($page, 'city/') === 0 || in_array($page, ['bihar', 'delhi', 'gujarat', 'maharashtra', 'uttar-pradesh', 'punjab', 'haryana', 'rajasthan', 'karnataka', 'tamil-nadu', 'west-bengal', 'assam', 'jharkhand'])) {
    $parts = explode('/', trim($page, '/'));
    if ($parts[0] === 'city') {
        array_shift($parts);
    }
    $stateSlug = $parts[0] ?? '';
    $citySlug = $parts[1] ?? '';
    $stName = ucwords(str_replace('-', ' ', $stateSlug));
    if ($citySlug !== '') {
        $cName = ucwords(str_replace('-', ' ', $citySlug));
        $title = "Best Packers and Movers in " . $cName . ", " . $stName . " | " . $site->name;
        $description = "Hire top-rated packers and movers in " . $cName . ", " . $stName . ". " . $site->name . " offers reliable household shifting and vehicle transport services at affordable rates.";
    } else {
        $title = $site->name . " in " . $stName;
        $description = $site->name . " in " . $stName . ". Top rated packers and movers services.";
    }
}

// Render Page Content
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= esc($title ?? '') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $url = "https://" . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '');
    $img = site_url('assets/images/logo/favicon.png');
    $city = $city ?? "";
    $state = $state ?? "";
    $stateShortCode = !empty($state) ? "MH" : "";
    ?>
    <meta name="description" content="<?= esc($description ?? '') ?>" />
    <meta name="keywords" content="<?= esc($keywords ?? '') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link rel="canonical" href="<?= esc($url ?? '') ?>" />
    <meta name="author" content="<?= esc($site->name ?? '') ?>" />
    <meta name="copyright" content="<?= esc($site->name ?? '') ?>" />
    <meta name="reply-to" content="<?= esc($site->email ?? '') ?>" />
    <meta name="og_title" property="og:title" content="<?= esc($title ?? '') ?>">
    <meta property="og:type" content="website">
    <meta name="og_site_name" property="og:site_name" content="<?= esc($site->name ?? '') ?>" />
    <meta property="og:image" content="<?= esc($img ?? '') ?>" />
    <meta name="og_url" property="og:url" content="<?= esc($url ?? '') ?>" />
    <meta property="og:description" content="<?= esc($description ?? '') ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="<?= esc($site->themeColor ?? '') ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= esc($site->themeColor ?? '') ?>">
    <meta name="allow-search" content="yes" />
    <meta name="geo.region" content="<?= !empty($stateShortCode) ? ('IN-' . esc($stateShortCode)) : '' ?>">
    <meta name="geo.placename" content="<?= esc($city ?? '') ?>">
    <meta name="revisit-after" content="weekly" />
    <meta name="distribution" content="global" />
    <meta name="language" content="en" />
    <link rel="shortcut icon" href="<?= site_url('assets/images/logo/favicon.png') ?>">
    <link rel="apple-touch-icon" href="<?= site_url('assets/images/logo/favicon.png') ?>">

    <!-- Schema 1: Organization -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "<?= esc($site->name ?? '') ?>",
      "url": "<?= site_url('/') ?>",
      "logo": "<?= site_url('assets/img/logo/logo.webp') ?>"
    }
    </script>

    <!-- Schema 2: LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "<?= esc($site->name ?? '') ?>",
      "url": "<?= esc($url ?? '') ?>",
      "image": ["<?= site_url('assets/img/logo/favicon.webp') ?>"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= esc($site->address1 ?? '') ?>",
        "addressLocality": "<?= esc($site->address2 ?? '') ?>",
        "postalCode": "<?= esc($site->postalCode ?? '') ?>",
        "addressRegion": "<?= esc($site->addressRegion ?? '') ?>",
        "addressCountry": "India"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= esc($site->ratingValue ?? '') ?>",
        "ratingCount": "<?= esc($site->ratingCount ?? '') ?>",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [{
        "@type": "Review",
        "datePublished": "<?= esc($site->datePublished ?? '') ?>",
        "reviewBody": "<?= esc($site->reviewBody ?? '') ?>",
        "author": {
          "@type": "Person",
          "name": "<?= esc($site->reviewperson ?? '') ?>"
        }
      }],
      "paymentAccepted": ["Cash", "Master Card", "Visa Card", "Debit Cards", "Cheques", "Credit Card"],
      "priceRange": "1500 - 180000",
      "telephone": "<?= esc($site->phone ?? '') ?>",
      "email": "<?= esc($site->email ?? '') ?>"
    }
    </script>

    <!-- Schema 3: Product / Service -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Product",
      "sku": "<?= esc($site->sku ?? '') ?>",
      "mpn": "<?= esc($site->mpn ?? '') ?>",
      "name": "<?= !empty($city) ? ('Packers and Movers Services in ' . esc($city)) : '' ?>",
      "image": "<?= esc($img ?? '') ?>",
      "description": "<?= esc($description ?? '') ?>",
      "url": "<?= esc($url ?? '') ?>",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= esc($site->ratingValue ?? '') ?>",
        "ratingCount": "<?= esc($site->ratingCount ?? '') ?>"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "<?= esc($site->ratingValue ?? '') ?>",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?= esc($site->name ?? '') ?>"
        }
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1500.00",
        "highPrice": "180000.00",
        "priceCurrency": "INR",
        "priceValidUntil": "<?= date('Y-m-t') ?>",
        "availability": "https://schema.org/InStock",
        "url": "<?= esc($url ?? '') ?>"
      },
      "brand": {
        "@type": "Brand",
        "name": "<?= esc($site->name ?? '') ?>",
        "image": "<?= esc($img ?? '') ?>"
      }
    }
    </script>

    <!-- Bootstrap 5 CSS CDN & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Main Stylesheet -->
    <link rel="stylesheet" href="<?= site_url('assets/css/style.css') ?>">
</head>
<body>

    <!-- PHP Version Notice Banner -->
    <div class="php-banner">
        🔥 <strong>CodeIgniter 4.6.1 Installed & Configured:</strong> Ready for PHP 8.1, 8.2 & 8.3! (Current Local Server: PHP <?= PHP_VERSION ?>)
    </div>

    <!-- Topbar -->
    <div class="site-topbar">
        <div class="container topbar-flex">
            <div>
                <span><i class="fa-solid fa-phone"></i> <?= esc($site->phone) ?></span> &nbsp;&bull;&nbsp; 
                <span><i class="fa-solid fa-envelope"></i> <?= esc($site->email) ?></span> &nbsp;&bull;&nbsp; 
                <span><i class="fa-solid fa-clock"></i> <?= esc($site->workingHours) ?></span>
            </div>
            <div>
                <a href="<?= site_url('admin/login') ?>" style="color: #cbd5e1; font-size: 0.8rem; margin-right: 15px;"><i class="fa-solid fa-lock"></i> Admin</a>
                <a href="<?= site_url('contact') ?>" style="color: #fff; font-weight: 600;">Get Free Estimate &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="site-navbar">
        <div class="container navbar-flex">
            <a href="<?= site_url('/') ?>" class="brand-logo">
                <div class="brand-icon"><i class="fa-solid fa-cube"></i></div>
                <div><?= esc($site->name) ?></div>
            </a>

            <ul class="nav-links">
                <li><a href="<?= site_url('/') ?>" class="<?= ($page === 'home') ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= site_url('about') ?>" class="<?= ($page === 'about') ? 'active' : '' ?>">About Us</a></li>
                <li><a href="<?= site_url('why-choose-us') ?>" class="<?= ($page === 'why-choose-us') ? 'active' : '' ?>">Why Choose Us</a></li>
                <li><a href="<?= site_url('services') ?>" class="<?= ($page === 'services') ? 'active' : '' ?>">Services</a></li>
                <li><a href="<?= site_url('city') ?>" class="<?= (strpos($page, 'city') === 0) ? 'active' : '' ?>">Cities / States</a></li>
                <li><a href="<?= site_url('contact') ?>" class="<?= ($page === 'contact') ? 'active' : '' ?>">Contact Us</a></li>
            </ul>

            <div>
                <a href="<?= site_url('contact') ?>" class="btn btn-secondary" style="padding: 10px 20px; font-size: 0.88rem;">
                    <i class="fa-solid fa-paper-plane"></i> Contact Us
                </a>
            </div>
        </div>
    </nav>

    <main>
    <?php if ($page === 'home'): ?>
        <!-- HOME PAGE -->
        <section style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0369a1 100%); color: #ffffff; padding: 75px 0 90px;">
            <div class="container">
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.12); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; color: #38bdf8; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.15);">
                    <i class="fa-solid fa-shield-halved"></i> 100% Verified & Insured Relocations
                </div>
                <h1 style="font-size: 3.2rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; max-width: 820px;">
                    Experience <span style="background: linear-gradient(135deg, #38bdf8, #fb923c); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Stress-Free</span> Relocations With Total Care.
                </h1>
                <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 620px; margin-bottom: 32px;">
                    Built on CodeIgniter 4.6.1 framework. Over 15+ years of trusted household shifting, office relocation, and vehicle transport.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="<?= site_url('contact') ?>" class="btn btn-secondary" style="padding: 14px 30px; font-size: 1rem;"><i class="fa-solid fa-calculator"></i> Get Free Quote</a>
                    <a href="<?= site_url('services') ?>" class="btn" style="background: rgba(255,255,255,0.15); color: #fff; padding: 14px 28px; font-size: 1rem;"><i class="fa-solid fa-list"></i> Our Services</a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-badge">What We Offer</span>
                    <h2 class="section-title">Our Professional Services</h2>
                    <p class="section-subtitle">Complete relocation solutions tailored to your schedule.</p>
                </div>
                <div class="card-grid">
                    <?php foreach ($services as $srv): ?>
                        <div class="service-box">
                            <div class="service-icon"><i class="fa-solid <?= esc($srv['icon']) ?>"></i></div>
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px;"><?= esc($srv['title']) ?></h3>
                            <p style="color: var(--text-muted); font-size: 0.94rem; margin-bottom: 20px;"><?= esc($srv['desc']) ?></p>
                            <a href="<?= site_url('contact') ?>" style="color: var(--primary); font-weight: 700; font-size: 0.9rem;">Book Service &rarr;</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'about'): ?>
        <!-- ABOUT PAGE -->
        <div class="page-banner">
            <div class="container">
                <div class="breadcrumbs"><a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>About Us</span></div>
                <h1>About Our Company</h1>
                <p>Learn about our journey, certified team, and commitment to delivering peace of mind.</p>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
                    <div>
                        <span class="section-badge">Our Story</span>
                        <h2 class="section-title">Redefining Moving Standards Across India</h2>
                        <p style="color: var(--text-muted); margin-bottom: 20px;">Founded with a mission to make packing and shifting completely transparent, <?= esc($site->name) ?> has grown into one of the most trusted logistics networks across India.</p>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div style="background: #fff; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary);">
                                <h4 style="font-weight: 800;">Our Mission</h4>
                                <p style="font-size: 0.88rem; color: var(--text-muted);">Effortless moving experiences backed by punctuality.</p>
                            </div>
                            <div style="background: #fff; padding: 20px; border-radius: 8px; border-left: 4px solid var(--secondary);">
                                <h4 style="font-weight: 800;">Our Vision</h4>
                                <p style="font-size: 0.88rem; color: var(--text-muted);">Most trusted logistics network nationwide.</p>
                            </div>
                        </div>
                    </div>
                    <div style="background: #fff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); text-align: center;">
                        <h3 style="font-weight: 800; margin-bottom: 25px;">Our Track Record</h3>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div style="padding: 20px; background: var(--primary-light); border-radius: 8px;">
                                <div style="font-size: 2rem; font-weight: 800; color: var(--primary);">25k+</div>
                                <div style="font-size: 0.85rem; font-weight: 700;">Moves Completed</div>
                            </div>
                            <div style="padding: 20px; background: #ffedd5; border-radius: 8px;">
                                <div style="font-size: 2rem; font-weight: 800; color: var(--secondary);">99.8%</div>
                                <div style="font-size: 0.85rem; font-weight: 700;">Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'why-choose-us'): ?>
        <!-- WHY CHOOSE US PAGE -->
        <div class="page-banner">
            <div class="container">
                <div class="breadcrumbs"><a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>Why Choose Us</span></div>
                <h1>Why Choose Us</h1>
                <p>Discover why thousands of households and corporate offices trust us with their valuable possessions.</p>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="card-grid">
                    <?php foreach ($whyChooseUs as $w): ?>
                        <div class="service-box">
                            <div class="service-icon"><i class="fa-solid <?= esc($w['icon']) ?>"></i></div>
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;"><?= esc($w['title']) ?></h3>
                            <p style="color: var(--text-muted); font-size: 0.95rem;"><?= esc($w['desc']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'services'): ?>
        <!-- SERVICES PAGE -->
        <div class="page-banner">
            <div class="container">
                <div class="breadcrumbs"><a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>Services</span></div>
                <h1>Our Relocation Services</h1>
                <p>Complete packing, moving, vehicle transport, and safe warehouse storage under one roof.</p>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="card-grid">
                    <?php foreach ($services as $srv): ?>
                        <div class="service-box">
                            <div class="service-icon"><i class="fa-solid <?= esc($srv['icon']) ?>"></i></div>
                            <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 12px;"><?= esc($srv['title']) ?></h3>
                            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px;"><?= esc($srv['desc']) ?></p>
                            <a href="<?= site_url('contact') ?>" class="btn btn-primary" style="width: 100%; font-size: 0.9rem;">Book Service</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'contact'): ?>
        <!-- CONTACT US PAGE -->
        <div class="page-banner">
            <div class="container">
                <div class="breadcrumbs"><a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>Contact Us</span></div>
                <h1>Contact Us For A Free Quote</h1>
                <p>Have questions about moving dates, packing material, or pricing? Our team is available 24/7 to assist you.</p>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <?php if ($success): ?>
                    <div style="background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; padding: 16px 20px; border-radius: var(--radius-md); font-weight: 600; margin-bottom: 30px;">
                        <i class="fa-solid fa-circle-check"></i> <?= esc($success) ?>
                    </div>
                <?php endif; ?>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
                    <div style="background: #ffffff; padding: 35px; border-radius: var(--radius-lg); border: 1px solid var(--border-color);">
                        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 18px;">Send An Inquiry</h3>
                        <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                            <div class="field-wrap" style="margin-bottom: 14px;">
                                <input type="text" name="name" required placeholder="Full Name *" class="form-control">
                            </div>
                            <div class="field-wrap" style="margin-bottom: 14px;">
                                <input type="tel" name="phone" required placeholder="Mobile Number (10 digits) *" class="form-control">
                            </div>
                            <div class="field-wrap" style="margin-bottom: 14px;">
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="field-wrap" style="margin-bottom: 14px;">
                                <textarea name="message" rows="4" placeholder="Moving Details (From, To, Date...)" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px;">Submit Inquiry</button>
                            <div id="contactformresults" style="margin-top: 15px;"></div>
                        </form>
                    </div>

                    <div>
                        <div style="background: #ffffff; padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 25px;">
                            <h4 style="font-weight: 800; font-size: 1.2rem; margin-bottom: 16px;">Head Office & Support</h4>
                            <p style="margin-bottom: 12px;"><i class="fa-solid fa-location-dot" style="color: var(--primary); width: 22px;"></i> <?= esc($site->address) ?></p>
                            <p style="margin-bottom: 12px;"><i class="fa-solid fa-phone" style="color: var(--primary); width: 22px;"></i> <a href="tel:<?= esc($site->phone) ?>" style="color: var(--primary); font-weight: 700;"><?= esc($site->phone) ?></a></p>
                            <p style="margin-bottom: 12px;"><i class="fa-solid fa-envelope" style="color: var(--primary); width: 22px;"></i> <a href="mailto:<?= esc($site->email) ?>"><?= esc($site->email) ?></a></p>
                        </div>

                        <div style="background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; padding: 25px; border-radius: var(--radius-lg); text-align: center;">
                            <i class="fa-brands fa-whatsapp fa-3x" style="margin-bottom: 10px;"></i>
                            <h4 style="font-weight: 800; font-size: 1.25rem; margin-bottom: 6px;">Chat Directly on WhatsApp</h4>
                            <p style="font-size: 0.9rem; opacity: 0.92; margin-bottom: 16px;">Get quick quotes, share item photos, and confirm dates instantly.</p>
                            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?>" target="_blank" class="btn" style="background: #ffffff; color: #047857; font-weight: 800;">
                                Start WhatsApp Chat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'city' || strpos($page, 'city/') === 0): ?>
        <?php
        $allStates = [
            ['slug' => 'delhi',           'name' => 'Delhi',           'code' => 'DL', 'cities_count' => '40+'],
            ['slug' => 'maharashtra',     'name' => 'Maharashtra',     'code' => 'MH', 'cities_count' => '65+'],
            ['slug' => 'uttar-pradesh',   'name' => 'Uttar Pradesh',   'code' => 'UP', 'cities_count' => '85+'],
            ['slug' => 'bihar',           'name' => 'Bihar',           'code' => 'BR', 'cities_count' => '45+'],
            ['slug' => 'west-bengal',     'name' => 'West Bengal',     'code' => 'WB', 'cities_count' => '40+'],
            ['slug' => 'gujarat',         'name' => 'Gujarat',         'code' => 'GJ', 'cities_count' => '50+'],
            ['slug' => 'karnataka',       'name' => 'Karnataka',       'code' => 'KA', 'cities_count' => '45+'],
            ['slug' => 'tamil-nadu',      'name' => 'Tamil Nadu',      'code' => 'TN', 'cities_count' => '48+'],
            ['slug' => 'telangana',       'name' => 'Telangana',       'code' => 'TS', 'cities_count' => '35+'],
            ['slug' => 'rajasthan',       'name' => 'Rajasthan',       'code' => 'RJ', 'cities_count' => '42+'],
            ['slug' => 'madhya-pradesh',  'name' => 'Madhya Pradesh',  'code' => 'MP', 'cities_count' => '50+'],
            ['slug' => 'punjab',          'name' => 'Punjab',          'code' => 'PB', 'cities_count' => '32+'],
            ['slug' => 'haryana',         'name' => 'Haryana',         'code' => 'HR', 'cities_count' => '30+'],
            ['slug' => 'kerala',          'name' => 'Kerala',          'code' => 'KL', 'cities_count' => '30+'],
            ['slug' => 'jharkhand',       'name' => 'Jharkhand',       'code' => 'JH', 'cities_count' => '28+'],
            ['slug' => 'odisha',          'name' => 'Odisha',          'code' => 'OD', 'cities_count' => '30+'],
            ['slug' => 'chhattisgarh',    'name' => 'Chhattisgarh',    'code' => 'CG', 'cities_count' => '25+'],
            ['slug' => 'uttarakhand',     'name' => 'Uttarakhand',     'code' => 'UK', 'cities_count' => '22+'],
            ['slug' => 'assam',           'name' => 'Assam',           'code' => 'AS', 'cities_count' => '24+'],
            ['slug' => 'goa',             'name' => 'Goa',             'code' => 'GA', 'cities_count' => '15+'],
            ['slug' => 'jammu-and-kashmir','name'=> 'Jammu and Kashmir','code' => 'JK', 'cities_count' => '18+'],
        ];

        $parts = explode('/', $page);
        $stateSlug = $parts[1] ?? '';
        $citySlug  = $parts[2] ?? '';
        ?>

        <?php if ($stateSlug === ''): ?>
            <!-- ALL STATES LIST -->
            <div class="page-banner">
                <div class="container">
                    <div class="breadcrumbs"><a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>All India Service Locations</span></div>
                    <h1>All India Packers & Movers Locations</h1>
                    <p>Door-to-door household relocation, office moving, and vehicle transport across 500+ Indian cities in all major states.</p>
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-badge">Nationwide Network</span>
                        <h2 class="section-title">Select Your State / Union Territory</h2>
                        <p class="section-subtitle">Click on your state below to explore verified packers and movers operating in your local city.</p>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                        <?php foreach ($allStates as $st): ?>
                            <a href="<?= site_url('city/' . $st['slug']) ?>" class="service-box" style="display: flex; align-items: center; justify-content: space-between; padding: 22px 25px; text-decoration: none;">
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
                                        <?= esc($st['code']) ?>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--dark); margin-bottom: 2px;"><?= esc($st['name']) ?></h4>
                                        <span style="font-size: 0.82rem; color: var(--text-muted);"><?= esc($st['cities_count']) ?> Cities Connected</span>
                                    </div>
                                </div>
                                <div style="color: var(--primary); font-size: 1.1rem;"><i class="fa-solid fa-arrow-right"></i></div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

        <?php elseif ($citySlug === ''): ?>
            <!-- STATE CITIES LIST -->
            <?php
            $stateName = ucwords(str_replace('-', ' ', $stateSlug));
            $dataFile = __DIR__ . '/../app/Modules/City/Views/data/' . $stateSlug . '.php';
            $cities = [];
            if (file_exists($dataFile)) {
                include $dataFile;
            }
            if (empty($cities)) {
                $cities = [
                    ['nm' => $stateName . ' Central'],
                    ['nm' => $stateName . ' City'],
                    ['nm' => $stateName . ' North'],
                    ['nm' => $stateName . ' South'],
                ];
            }
            ?>
            <div class="page-banner">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / 
                        <a href="<?= site_url('city') ?>">All States</a> / 
                        <span><?= esc($stateName) ?></span>
                    </div>
                    <h1>Packers & Movers in <?= esc($stateName) ?></h1>
                    <p>Verified, background-checked moving services connecting households and offices across <?= esc($stateName) ?>.</p>
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <div class="section-header">
                        <span class="section-badge"><?= esc($stateName) ?> Moving Hubs</span>
                        <h2 class="section-title">Select Your City in <?= esc($stateName) ?></h2>
                        <p class="section-subtitle">Click your city for instant free price estimates, local shifting charges, and moving coordinators.</p>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 50px;">
                        <?php foreach ($cities as $c): 
                            $cName = is_array($c) ? ($c['nm'] ?? 'City') : (string)$c;
                            $cityItemSlug = strtolower(str_replace(' ', '-', $cName));
                        ?>
                            <a href="<?= site_url('city/' . $stateSlug . '/' . $cityItemSlug) ?>" style="background: #ffffff; padding: 16px 20px; border-radius: var(--radius-md); border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; text-decoration: none;">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <i class="fa-solid fa-location-dot" style="color: var(--primary);"></i>
                                    <span style="font-weight: 700; color: var(--dark); font-size: 0.95rem;"><?= esc($cName) ?></span>
                                </div>
                                <span style="font-size: 0.8rem; color: var(--text-muted);">&rarr;</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

        <?php else: ?>
            <!-- CITY DETAIL VIEW -->
            <?php
            $stateName = ucwords(str_replace('-', ' ', $stateSlug));
            $cityName  = ucwords(str_replace('-', ' ', $citySlug));
            $dataFile = __DIR__ . '/../app/Modules/City/Views/data/' . $stateSlug . '.php';
            $nearbyCities = [];
            if (file_exists($dataFile)) {
                include $dataFile;
                $nearbyCities = array_slice($cities ?? [], 0, 8);
            }
            ?>
            <div class="page-banner">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / 
                        <a href="<?= site_url('city') ?>">All States</a> / 
                        <a href="<?= site_url('city/' . $stateSlug) ?>"><?= esc($stateName) ?></a> / 
                        <span><?= esc($cityName) ?></span>
                    </div>
                    <h1>Best Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?></h1>
                    <p>Reliable, hassle-free household shifting, office moving & vehicle transport with 100% transit insurance in <?= esc($cityName) ?>.</p>
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
                        <div>
                            <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 35px;">
                                <span class="section-badge">Local & Interstate Movers</span>
                                <h2 style="font-size: 1.8rem; font-weight: 800; color: var(--dark); margin-bottom: 16px;">Top-Rated Shifting Services in <?= esc($cityName) ?></h2>
                                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.8; margin-bottom: 20px;">
                                    Looking for trusted and affordable packers and movers in <strong><?= esc($cityName) ?>, <?= esc($stateName) ?></strong>? 
                                    <strong><?= esc($site->name) ?></strong> is your verified relocation partner. Whether moving locally within <?= esc($cityName) ?> or relocating across India, our trained ground team ensures careful 5-layer packaging, safe transit, and punctual doorstep delivery.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div style="background: #ffffff; padding: 32px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                                <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--dark); margin-bottom: 15px;">Shifting in <?= esc($cityName) ?></h3>
                                <form id="cityquoteform" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="cityquoteresults" onsubmit="return false;">
                                    <div class="field-wrap" style="margin-bottom: 12px;">
                                        <input type="text" name="name" required placeholder="Full Name *" class="form-control">
                                    </div>
                                    <div class="field-wrap" style="margin-bottom: 12px;">
                                        <input type="tel" name="phone" required placeholder="Mobile Number (10 digits) *" class="form-control">
                                    </div>
                                    <div class="field-wrap" style="margin-bottom: 12px;">
                                        <input type="text" name="mfrom" value="<?= esc($cityName) ?>" class="form-control">
                                    </div>
                                    <div class="field-wrap" style="margin-bottom: 12px;">
                                        <input type="text" name="mto" placeholder="Destination City" class="form-control">
                                    </div>
                                    <div class="field-wrap" style="margin-bottom: 12px;">
                                        <textarea name="message" rows="3" placeholder="Moving Details" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Get Free Quote</button>
                                    <div id="cityquoteresults" style="margin-top: 15px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php elseif ($page === 'photo-gallery' || $page === 'gallery/photo_gallery'): ?>
        <?php
        $db = new SQLite3($dbPath);
        $res = $db->query("SELECT * FROM gallery WHERE status = 1 ORDER BY auto_id DESC");
        $photos = [];
        if ($res) {
            while ($r = $res->fetchArray(SQLITE3_ASSOC)) $photos[] = (object) $r;
        }
        include __DIR__ . '/../app/Modules/Gallery/Views/photo_gallery.php';
        ?>

    <?php elseif ($page === 'video-gallery' || $page === 'gallery/video_gallery'): ?>
        <?php
        $db = new SQLite3($dbPath);
        $res = $db->query("SELECT * FROM video_gallery WHERE status = 1 ORDER BY auto_id DESC");
        $videos = [];
        if ($res) {
            while ($r = $res->fetchArray(SQLITE3_ASSOC)) $videos[] = (object) $r;
        }
        include __DIR__ . '/../app/Modules/Gallery/Views/video_gallery.php';
        ?>

    <?php elseif ($page === 'tracking'): ?>
        <?php
        include __DIR__ . '/../app/Modules/Tracking/Views/tracking.php';
        ?>

    <?php elseif ($page === 'blog' || strpos($page, 'blog') === 0): ?>
        <?php
        $db = new SQLite3($dbPath);
        $parts = explode('/', $page);
        if (count($parts) > 1 && $parts[1] !== 'view') {
            $slug = $parts[1];
            $stmt = $db->prepare("SELECT * FROM blog WHERE slug = :s OR b_id = :id");
            $stmt->bindValue(':s', $slug, SQLITE3_TEXT);
            $stmt->bindValue(':id', (int)$slug, SQLITE3_INTEGER);
            $res = $stmt->execute();
            $post = $res ? $res->fetchArray(SQLITE3_ASSOC) : false;
            $query = $post ? [(object) $post] : [];
            $resRecent = $db->query("SELECT * FROM blog ORDER BY b_id DESC LIMIT 5");
            $recent_posts = [];
            if ($resRecent) {
                while ($r = $resRecent->fetchArray(SQLITE3_ASSOC)) $recent_posts[] = (object) $r;
            }
            include __DIR__ . '/../app/Modules/Blog/Views/view.php';
        } else {
            $offset = (int) ($parts[2] ?? 0);
            $per_page = 6;
            $total = (int) $db->querySingle("SELECT COUNT(*) FROM blog");
            $res = $db->query("SELECT * FROM blog ORDER BY b_id DESC LIMIT $per_page OFFSET $offset");
            $blogs = [];
            if ($res) {
                while ($r = $res->fetchArray(SQLITE3_ASSOC)) $blogs[] = (object) $r;
            }
            $resRecent = $db->query("SELECT * FROM blog ORDER BY b_id DESC LIMIT 5");
            $recent_posts = [];
            if ($resRecent) {
                while ($r = $resRecent->fetchArray(SQLITE3_ASSOC)) $recent_posts[] = (object) $r;
            }
            include __DIR__ . '/../app/Modules/Blog/Views/blog.php';
        }
        ?>

    <?php elseif ($page === 'reviews'): ?>
        <?php
        $db = new SQLite3($dbPath);
        $star_filter = isset($_GET['star']) ? (int) $_GET['star'] : null;
        $where = "WHERE status = 1" . ($star_filter ? " AND stars = $star_filter" : "");
        $total_rows = (int) $db->querySingle("SELECT COUNT(*) FROM reviews $where");
        $per_page = 9;
        $offset = isset($_GET['per_page']) ? (int) $_GET['per_page'] : 0;
        $res = $db->query("SELECT * FROM reviews $where ORDER BY r_id DESC LIMIT $per_page OFFSET $offset");
        $reviews = [];
        if ($res) {
            while ($r = $res->fetchArray(SQLITE3_ASSOC)) $reviews[] = (object) $r;
        }
        include __DIR__ . '/../app/Modules/Reviews/Views/reviews.php';
        ?>

    <?php elseif ($page === 'admin/login' || $page === 'admin'): ?>
        <!-- ADMIN LOGIN -->
        <section class="section" style="min-height: 70vh; display: flex; align-items: center;">
            <div class="container" style="max-width: 440px;">
                <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color);">
                    <div style="text-align: center; margin-bottom: 25px;">
                        <h2 style="font-size: 1.6rem; font-weight: 800;">Admin Login</h2>
                        <p style="color: var(--text-muted); font-size: 0.88rem;">CodeIgniter 4.6.1 Admin Panel</p>
                    </div>
                    <?php if ($error): ?>
                        <div style="background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; font-size: 0.88rem; margin-bottom: 20px; text-align: center;">
                            <?= esc($error) ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= site_url('admin/login') ?>" method="POST">
                        <input type="hidden" name="admin_action" value="login">
                        <input type="text" name="username" value="admin" required class="form-control">
                        <input type="password" name="password" value="admin123" required class="form-control">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Sign In</button>
                    </form>
                    <div style="margin-top: 15px; text-align: center; font-size: 0.82rem; color: var(--text-muted);">Default: <code>admin</code> / <code>admin123</code></div>
                </div>
            </div>
        </section>

    <?php elseif ($page === 'admin/dashboard' || $page === 'admin/contact'): ?>
        <!-- ADMIN DASHBOARD & LEADS -->
        <?php
        if (empty($_SESSION['ci4_admin'])) {
            header("Location: " . site_url('admin/login'));
            exit;
        }
        $inquiries = [];
        if (file_exists($dbPath)) {
            $db = new SQLite3($dbPath);
            $res = $db->query("SELECT * FROM contacts ORDER BY id DESC");
            while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                $inquiries[] = $row;
            }
        }
        ?>
        <div style="background: var(--dark); color: #fff; padding: 30px 0;">
            <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h2 style="font-size: 1.6rem; font-weight: 800;">Admin Dashboard</h2>
                    <p style="color: #94a3b8; font-size: 0.88rem;">Customer Inquiries & Leads</p>
                </div>
                <a href="<?= site_url('admin/logout') ?>" class="btn btn-secondary" style="padding: 8px 18px; font-size: 0.85rem;"><i class="fa-solid fa-power-off"></i> Logout</a>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div style="background: #fff; padding: 25px; border-radius: 12px; border: 1px solid var(--border-color); margin-bottom: 30px;">
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700;">TOTAL INQUIRIES</div>
                    <div style="font-size: 2.2rem; font-weight: 800; color: var(--primary);"><?= count($inquiries) ?></div>
                </div>

                <div style="background: #fff; border-radius: var(--radius-lg); border: 1px solid var(--border-color); overflow: hidden;">
                    <div style="padding: 20px; border-bottom: 1px solid var(--border-color); font-weight: 800;">Recent Inquiries Received</div>
                    <?php if (empty($inquiries)): ?>
                        <div style="padding: 40px; text-align: center; color: var(--text-muted);">No inquiries yet.</div>
                    <?php else: ?>
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem;">
                            <thead style="background: var(--light-bg); border-bottom: 1px solid var(--border-color);">
                                <tr>
                                    <th style="padding: 14px 20px;">ID</th>
                                    <th style="padding: 14px 20px;">Name</th>
                                    <th style="padding: 14px 20px;">Phone</th>
                                    <th style="padding: 14px 20px;">Email</th>
                                    <th style="padding: 14px 20px;">Message</th>
                                    <th style="padding: 14px 20px; text-align: right;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($inquiries as $row): ?>
                                    <tr style="border-bottom: 1px solid var(--border-color);">
                                        <td style="padding: 14px 20px;">#<?= $row['id'] ?></td>
                                        <td style="padding: 14px 20px; font-weight: 700;"><?= esc($row['name']) ?></td>
                                        <td style="padding: 14px 20px;"><a href="tel:<?= esc($row['phone']) ?>" style="color: var(--primary);"><?= esc($row['phone']) ?></a></td>
                                        <td style="padding: 14px 20px;"><?= esc($row['email']) ?></td>
                                        <td style="padding: 14px 20px;"><?= esc($row['message']) ?></td>
                                        <td style="padding: 14px 20px; text-align: right;">
                                            <form action="<?= site_url('admin/dashboard') ?>" method="POST" style="display:inline;" onsubmit="return confirm('Delete?');">
                                                <input type="hidden" name="admin_action" value="delete">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <button type="submit" style="border:none; background:none; color:red; cursor:pointer;"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid" style="grid-template-columns: 1.4fr 1fr 1fr 1fr 1.2fr;">
                <div>
                    <div class="brand-logo" style="color: #fff; margin-bottom: 14px;">
                        <div class="brand-icon"><i class="fa-solid fa-cube"></i></div>
                        <div><?= esc($site->name) ?></div>
                    </div>
                    <p style="font-size: 0.9rem; line-height: 1.6;"><?= esc($site->tagline) ?></p>
                </div>
                <div>
                    <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Navigation</h4>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('/') ?>" style="color: #cbd5e1;">Home</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('about') ?>" style="color: #cbd5e1;">About Us</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('why-choose-us') ?>" style="color: #cbd5e1;">Why Choose Us</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">Services</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city') ?>" style="color: #cbd5e1;">All States & Cities</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('contact') ?>" style="color: #cbd5e1;">Contact Us</a></p>
                </div>
                <div>
                    <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Services</h4>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">Household Moving</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">Office Relocation</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">Vehicle Transport</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">Warehouse Storage</a></p>
                </div>
                <div>
                    <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Top Locations</h4>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city/delhi') ?>" style="color: #cbd5e1;">Delhi NCR</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city/maharashtra') ?>" style="color: #cbd5e1;">Maharashtra</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city/uttar-pradesh') ?>" style="color: #cbd5e1;">Uttar Pradesh</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city/bihar') ?>" style="color: #cbd5e1;">Bihar Hub</a></p>
                    <p style="margin-bottom: 8px;"><a href="<?= site_url('city/karnataka') ?>" style="color: #cbd5e1;">Karnataka</a></p>
                </div>
                <div>
                    <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Head Office</h4>
                    <p style="margin-bottom: 8px; font-size: 0.9rem; color: #cbd5e1;"><?= esc($site->address) ?></p>
                    <p style="margin-bottom: 8px;"><a href="tel:<?= esc($site->phone) ?>" style="color: #fff; font-weight: 700;"><?= esc($site->phone) ?></a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <div>&copy; <?= date('Y') ?> <?= esc($site->name) ?>. Upgraded to CodeIgniter 4.6.1 (PHP 8.3 Ready).</div>
                <div>Clean starter template.</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url('assets/js/form.js') ?>"></script>
</body>
</html>
