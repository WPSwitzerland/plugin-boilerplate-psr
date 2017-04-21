<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE;

class Plugin
{
    private static $instance;
    public static $name = '';
    public static $prefix = '';
    public static $version = '';
    public static $file = '';

    /**
     * Creates an instance if one isn't already available,
     * then return the current instance.
     * @param  string $file The file from which the class is being instantiated.
     * @return object       The class instance.
     */
    public static function getInstance($file)
    {
        if (!isset(self::$instance) && !(self::$instance instanceof Plugin)) {
            self::$instance = new Plugin;
            self::$instance->run();

            $data = get_plugin_data($file);

            self::$instance->name = $data['Name'];
            self::$instance->prefix = 'PLUGIN_PREFIX';
            self::$instance->version = $data['Version'];
            self::$instance->file = $file;
        }
        return self::$instance;
    }

    /**
     * Non-essential dump function to debug variables.
     * @param  mixed  $var The variable to be output
     * @param  boolean $die Should the script stop immediately after outputting $var?
     */
    public function dump($var, $die = false)
    {
        echo '<pre>' . print_r($var, 1) . '</pre>';
        if ($die) {
            die();
        }
    }

    /**
     * Execution function which is called after the class has been initialized.
     * This contains hook and filter assignments, etc.
     */
    private function run()
    {
        add_action('plugins_loaded', array($this, 'loadPluginTextdomain'));
    }

    /**
     * Load translation files from the indicated directory.
     */
    public function loadPluginTextdomain()
    {
        load_plugin_textdomain('TEXT_DOMAIN', false, dirname(plugin_basename($this->file)) . '/languages');
    }
}
