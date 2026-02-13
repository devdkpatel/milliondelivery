<?php
/**
 * Plugin Name: Event Booking Manager Pro
 */

defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

use EBMP\Core\Loader;

function ebmp_run() {
    $loader = new Loader();
    $loader->run();
}

ebmp_run();
