<?php

if (! function_exists('dump')) {

	/**
	 * Non-essential dump function to debug variables.
	 *
	 * @param mixed   $var The variable to be output
	 * @param boolean $die Should the script stop immediately after outputting $var?
	 */
	function dump($var, $die = false)
	{
		echo '<pre>' . print_r($var, 1) . '</pre>';
		if ($die) {
			die();
		}
	}
}
