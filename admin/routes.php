<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * Pure CodeIgniter 4 Admin HMVC Routing
 */
// To change the admin URL, update the group name below.
// Example: 'admin' -> 'my-admin', 'cp', 'backend', 'manage', etc.
$routes->group('admin', static function ($routes) {
    // Shortcuts
    $routes->match(['get', 'post'], 'login/check', '\Admin\Core\AdminDispatcher::dispatch/login/check');
    $routes->get('login/logout', '\Admin\Core\AdminDispatcher::dispatch/login/logout');
    $routes->get('logout', '\Admin\Core\AdminDispatcher::dispatch/login/logout');
    $routes->get('app/app_main', '\Admin\Core\AdminDispatcher::dispatch/app/app_main');
    $routes->get('app/pagination', '\Admin\Core\AdminDispatcher::dispatch/app/pagination');

    // Dynamic Module Routing
    $routes->match(['get', 'post'], '/', '\Admin\Core\AdminDispatcher::dispatch/login/index');
    $routes->match(['get', 'post'], '(:segment)', '\Admin\Core\AdminDispatcher::dispatch/$1/index');
    $routes->match(['get', 'post'], '(:segment)/(:segment)', '\Admin\Core\AdminDispatcher::dispatch/$1/$2');
    $routes->match(['get', 'post'], '(:segment)/(:segment)/(:any)', '\Admin\Core\AdminDispatcher::dispatch/$1/$2/$3');
});
