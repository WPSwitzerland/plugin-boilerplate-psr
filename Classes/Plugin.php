<?php

namespace YourUniqueTopLevelNamespace\PascalCasePluginKey;

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
        load_plugin_textdomain('PLUGIN_KEY', false, dirname(plugin_basename(__FILE__)).'/Resources/Private/Language');
    }
}

new Plugin();
