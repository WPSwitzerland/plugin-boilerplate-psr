<?php

namespace MHM\WordPress;

class Core {

	function __construct(){
		error_log('Core'.chr(10), 3, dirname(__FILE__).'/log.txt');
	}

}