<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE;

class Plugin
{
 
    public static $instance;

    public static $name     = '';
    public static $prefix   = '';
    public static $version  = '';
    public static $file     = '';

    public static function getInstance($file)
    {
        if(!isset(self::$instance) && !(self::$instance instanceof Plugin))
        {
            self::$instance = new Plugin;
            self::$instance->run();

            $data = get_plugin_data($file);

            self::$instance->name       = $data['Name'];
            self::$instance->prefix     = 'PLUGIN_PREFIX';
            self::$instance->version    = $data['Version'];
            self::$instance->file       = $file;
        }
        return self::$instance;
    }

    public function dump($var, $die = false)
    {
        echo '<pre>' . print_r($var, 1) . '</pre>';
        if ($die) {
            die();
        }
    }

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