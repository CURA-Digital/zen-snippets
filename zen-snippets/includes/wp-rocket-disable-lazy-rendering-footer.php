<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

add_filter( 'rocket_lrc_exclusions', function( $exclusions ) {

	$exclusions[] = 'x-colophon"';

return $exclusions;
} );