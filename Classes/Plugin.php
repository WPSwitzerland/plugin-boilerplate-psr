<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE;

class Plugin
{

    public $name    = '';
    public $pfx     = '';
    public $version = '';
    public $file    = '';

    public function dump($var, $die = false)
    {
        echo '<pre>' . print_r($var, 1) . '</pre>';
        if ($die) {
            die();
        }
    }

    public function __construct()
    {
        $this->name = 'PLUGIN_NAME';
    }

    public function set_PluginData($file)
    {

        $data = get_plugin_data($file);

        $this->name     = $data['Name'];
        $this->pfx      = 'PLUGIN_PREFIX';
        $this->version  = $data['Version'];
        $this->file     = $file;
    }

    public function run()
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