<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

add_filter( 'cs_enable_srcset', '__return_true' );