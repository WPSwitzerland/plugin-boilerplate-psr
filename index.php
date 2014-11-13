<?php
/*
Plugin Name: Default WordPress Plugin
Plugin URI: https://github.com/mhmli/wp-plugin-default
Description: A description of what this plugin does
Author: Mark Howells-Mead
Version: 1.0
Author URI: https://github.com/mhmli/
*/

use MHM\WordPress\Plugin as Plugin;

// always required
function __autoload($class) {
	$class = 'classes/' . str_replace('\\', '/', $class) . '.php';
	@include_once($class);
}

new Plugin();