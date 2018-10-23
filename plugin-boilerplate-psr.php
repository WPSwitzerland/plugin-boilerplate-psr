<?php
/*
Plugin Name: PLUGIN_NAME
Plugin URI: PLUGIN_URI
Description: PLUGIN_DESCRIPTION
Author: PLUGIN_AUTHOR (AUTHOR_EMAIL)
Version: 0.0.1
Author URI: AUTHOR_URI
Text Domain: TEXT_DOMAIN
Domain Path: /languages
 */

if (version_compare(get_bloginfo('version'), '4.9', '<') || version_compare(PHP_VERSION, '7.1', '<')) {
	function PLUGIN_PREFIX_compatability_warning()
	{
		echo '<div class="error"><p>' . sprintf(
			__('“%1$s” requires PHP %2$s (or newer) and WordPress %3$s (or newer) to function properly. Your site is using PHP %4$s and WordPress %5$s. Please upgrade. The plugin has been automatically deactivated.', 'TEXT_DOMAIN'),
			'PLUGIN NAME',
			'7.1',
			'4.9',
			PHP_VERSION,
			$GLOBALS['wp_version']
		) . '</p></div>';
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}
	}
	add_action('admin_notices', 'PLUGIN_PREFIX_compatability_warning');

	function PLUGIN_PREFIX_deactivate_self()
	{
		deactivate_plugins(plugin_basename(__FILE__));
	}
	add_action('admin_init', 'PLUGIN_PREFIX_deactivate_self');

	return;
} else {
	require_once 'Classes/Plugin.php';

	function PLUGIN_PREFIX_get_instance()
	{
		return AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Plugin::getInstance(__FILE__);
	}
	PLUGIN_PREFIX_get_instance();
}
