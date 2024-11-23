<?php

/**
 * Plugin Name: Zen (CURA Digital Snippets)
 * Description: A collection of PHP snippets used on all CURA Digital sites.
 * Version: 1.2
 * Author: CURA Digital
 * Author URI: https://curadigital.io
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Include Snippets
foreach (glob(plugin_dir_path(__FILE__) . 'includes/*.php') as $filename) { 
    require_once $filename; 
}