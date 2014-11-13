<?php

namespace MHM\WordPress;

class Plugin extends Core {


	function __construct(){
		parent::__construct();
		error_log('Plugin'.chr(10), 3, dirname(__FILE__).'/log.txt');
	}
	
	private function helloWorld(){
		
		//echo 'Hello World';
		
	}

}