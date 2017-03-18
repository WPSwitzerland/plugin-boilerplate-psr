<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE;

class Plugin
{
    public function dump($var, $die = false)
    {
        echo '<pre>'.print_r($var, 1).'</pre>';
        if ($die) {
            die();
        }
    }

    public function __construct()
    {
        add_action('plugins_loaded', array($this, 'loadTextDomain'));
    }

    /**
     * Load translation files from the indicated directory.
     */
    public function loadPluginTextdomain()
    {
        load_plugin_textdomain('TEXT_DOMAIN', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }
}

new Plugin();
