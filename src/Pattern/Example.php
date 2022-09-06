<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Pattern;

/**
 * Example child class
 *
 * @author PLUGIN_AUTHOR <AUTHOR_EMAIL>
 */
class Example
{

	public function run()
	{
		add_action('wp_head', [$this, 'example']);
	}

	/**
	 * An example of getting data from the plugin's
	 * top-level namespace using the get_instance method.
	 *
	 * @return void
	 */
	public function example()
	{
		$version = PLUGIN_PREFIX_get_instance()->version;
		$name = dirname(plugin_basename(PLUGIN_PREFIX_get_instance()->file));
		echo "<!-- Plugin “{$name}” running in version {$version} -->";
	}
}
