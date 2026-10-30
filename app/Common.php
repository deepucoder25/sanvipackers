<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 */

if (!function_exists('redirect')) {
    /**
     * Dual CI4/CI3 compatible redirect helper
     *
     * @param string|null $route
     * @return \CodeIgniter\HTTP\RedirectResponse|void
     */
    function redirect(?string $route = null)
    {
        if ($route !== null) {
            if ($route === 'login' || $route === 'app' || strpos($route, 'admin') === 0) {
                $dest = site_url('admin/' . trim($route, '/'));
                header("Location: " . $dest);
                exit;
            }
            return service('redirectresponse')->to($route);
        }

        return service('redirectresponse');
    }
}

