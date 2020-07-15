<?php

/**
 * Innatiive functions and definitions
 *
 * @package Innatiive
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$innatiive_includes = array(
	'/tgm-plugin-require.php',              // Initialize TGM.
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/innatiive/innatiive/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($innatiive_includes as $file) {
	require_once get_template_directory() . '/inc' . $file;
}

function init_my_custom_redux()
{
	require_once(dirname(__FILE__) . 'config.php');
}
add_action('plugins_loaded', 'init_my_custom_redux', 30);
