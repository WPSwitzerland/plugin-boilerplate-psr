<?php
/*
 * Plugin Name:       PLUGIN_NAME
 * Plugin URI:        PLUGIN_URI
 * Description:       PLUGIN_DESCRIPTION
 * Author:            PLUGIN_AUTHOR (AUTHOR_EMAIL)
 * Version:           0.0.0
 * Author URI:        AUTHOR_URI
 * Text Domain:       TEXT_DOMAIN
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        AUTHOR_URI
 */

/*
 * This lot auto-loads a class or trait just when you need it. You don't need to
 * use require, include or anything to get the class/trait files, as long
 * as they are stored in the correct folder and use the correct namespaces.
 *
 * See http://www.php-fig.org/psr/psr-4/ for an explanation of the file structure
 * and https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md for usage examples.
 */
spl_autoload_register(function ($class) {

	// project-specific namespace prefix
	$prefix = 'AUTHOR_NAMESPACE\\PLUGIN_NAMESPACE\\';

	// base directory for the namespace prefix
	$base_dir = __DIR__ . '/src/';

	// does the class use the namespace prefix?
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0) {
		// no, move to the next registered autoloader
		return;
	}

	// get the relative class name
	$relative_class = substr($class, $len);

	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

	// if the file exists, require it
	if (file_exists($file)) {
		require $file;
	}
});

function PLUGIN_PREFIX_get_instance()
{
	return AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Plugin::getInstance(__FILE__);
}
PLUGIN_PREFIX_get_instance();
