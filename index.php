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
spl_autoload_register(function ($class) {
	if(strpos('MHM',$class)==0){
		$class = 'Classes/' . str_replace('\\', '/', $class) . '.php';
		require_once($class);
	}
});

new Plugin();
