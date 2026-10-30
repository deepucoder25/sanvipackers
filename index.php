<?php
/**
 *---------------------------------------------------------------
 * ENVIRONMENT SWITCH - CI3 Style
 *---------------------------------------------------------------
 * Change the environment from here:
 *
 *   'development'  -> errors are shown on screen (for local use)
 *   'production'   -> errors are hidden from screen (for live site)
 *
 *---------------------------------------------------------------
 */
define('MY_ENVIRONMENT', 'development');   // <- change only this line

// Override the CI_ENVIRONMENT value set in .env file
putenv('CI_ENVIRONMENT=' . MY_ENVIRONMENT);
$_ENV['CI_ENVIRONMENT']    = MY_ENVIRONMENT;
$_SERVER['CI_ENVIRONMENT'] = MY_ENVIRONMENT;

require_once __DIR__ . '/public/index.php';
