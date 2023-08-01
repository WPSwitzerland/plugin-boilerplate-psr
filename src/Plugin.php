<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE;

class Plugin
{
	private static $instance;
	public $debug = false;
	public $dir = '';
	public $dirname = '';
	public $file = '';
	public $key = '';
	public $name = '';
	public $prefix = '';
	public $url = '';
	public $version = '';

	/**
	 * Loads and initializes the provided classes.
	 *
	 * @param $classes
	 */
	private function loadClasses($classes)
	{
		foreach ($classes as $class) {
			$class_parts = explode('\\', $class);
			$class_short = end($class_parts);
			$class_set   = $class_parts[count($class_parts) - 2];

			if (!isset(PLUGIN_PREFIX_get_instance()->{$class_set}) || !is_object(PLUGIN_PREFIX_get_instance()->{$class_set})) {
				PLUGIN_PREFIX_get_instance()->{$class_set} = new \stdClass();
			}

			if (property_exists(PLUGIN_PREFIX_get_instance()->{$class_set}, $class_short)) {
				wp_die(sprintf(__('A problem has ocurred in the Theme. Only one PHP class named “%1$s” may be assigned to the “%2$s” object in the Theme.', 'sht'), $class_short, $class_set), 500);
			}

			PLUGIN_PREFIX_get_instance()->{$class_set}->{$class_short} = new $class();

			if (method_exists(PLUGIN_PREFIX_get_instance()->{$class_set}->{$class_short}, 'run')) {
				PLUGIN_PREFIX_get_instance()->{$class_set}->{$class_short}->run();
			}
		}
	}

	/**
	 * Creates an instance if one isn't already available,
	 * then return the current instance.
	 *
	 * @param  string $file The file from which the class is being instantiated.
	 * @return object       The class instance.
	 */
	public static function getInstance($file)
	{
		if (!isset(self::$instance) && !(self::$instance instanceof Plugin)) {
			self::$instance = new Plugin;

			self::$instance->debug = defined('WP_DEBUG') && WP_DEBUG;
			self::$instance->dir = plugin_dir_path(self::$instance->file);
			self::$instance->dirname = dirname(plugin_basename(self::$instance->file));
			self::$instance->file = $file;
			self::$instance->prefix = 'PLUGIN_PREFIX';
			self::$instance->url = plugin_dir_url(self::$instance->file);

			$version = get_file_data($file, ['Version']);
			$text_domain = get_file_data($file, ['Text Domain']);
			self::$instance->version = $version[0] ?? '';
			self::$instance->key = $text_domain[0] ?? '';

			self::$instance->run();
		}
		return self::$instance;
	}

	/**
	 * Execution function which is called after the class has been initialized.
	 * This contains hook and filter assignments, etc.
	 */
	private function run()
	{

		// Load individual pattern classes which contain
		// grouped functionality. E.g. everything to do with a post type.
		$this->loadClasses(
			[
				Controller\Assets::class,
			]
		);

		add_action('plugins_loaded', [$this, 'loadPluginTextdomain']);
	}

	/**
	 * Load translation files from the indicated directory.
	 */
	public function loadPluginTextdomain()
	{
		load_plugin_textdomain('TEXT_DOMAIN', false, dirname(plugin_basename($this->file)) . '/languages');
	}
}
