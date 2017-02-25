# WordPress plugin starter code

## Description
A starting point for development of a WordPress plugin using PHP namespaces. The use of PHP namespaces means that plugins built using this code require PHP 5.3 or newer.

## Usage
This code has no function of its own. It is a starting point for plugin developers. 

You're currently reading the contents of ``README.md`` - the file ``README.txt`` is the one which the WordPress Plugin Repository needs.

1. Download the zip ``wp-plugin-default``, unpack it, and put the generated folder in your ``wp-content/plugins`` directory.
2. Rename the folder to reflect your own plugin name. This must be a unique name, so use a prefix which is specific to you as part of the plugin name.
3. Rename the file ``wp-plugin-default.php`` to use the same name as the folder you've created.
4. If you don't want to link any CSS, JavaScript or image files from your plugin, then you can remove the ``Resources`` folder. You can also use your own structure for such files if you need to.
    - If you use your own file structure for resources (“assets”), then don't forget to change the ``Domain Path`` in the main plugin file.
5. Replace all uppercase text in the main PHP file appropriately: *PLUGIN NAME*, *PLUGIN URI* and so on. Don't change ``PHP_VERSION``: this is a [pre-defined PHP constant](http://php.net/manual/en/reserved.constants.php) which the code uses to check compatability.
    - *PLUGIN NAME* is the title or name of the plugin which appears in plugin overview lists.
    - *PLUGIN URI* is the web address where users can find out details of your plugin. e.g. in the WordPress Plugin Directory, in Github, or on your website. This URI appears in the plugin overview list in WordPress Admin and in the WordPress Plugin Directory.
    - *DESCRIPTION* is a text description of what the plugin does and what requirements it might have. Make it readable and useful!
    - *PLUGIN AUTHOR* is your name or company name.
    - *AUTHOR URI* is the address of your website.
    - *TEXT-DOMAIN* is the text domain which you're using for translations. This should ideally match the folder name of the plugin.
    - *PLUGIN_PREFIX* is a unique prefix applied to function names, so that there is no conflict with other functions in the global namespace. This should ideally match the folder name of the plugin.
6. Replace the namespace ``YourUniqueTopLevelNamespace\PascalCasePluginKey`` in ``Classes/Plugin.php`` with your own namespace. I recommend using your own unique prefix for the top-level namespace in all of your plugins, and the name of the plugin for the second-level namespace. Both of these namespace parts should be in [PascalCase](https://en.wikipedia.org/wiki/PascalCase).
7. Use and maintain the version number according to the specifications explained at http://semver.org/. This is *essential*, so that you (and the plugin users) can manage plugin usage.
8. Check and replace the PHP version number ``5.3`` and the WordPress version number ``4.6`` in the main plugin file, according to your own plugin's requirements.
    - As this code uses [PHP namespaces](http://php.net/manual/en/language.namespaces.php), the code will only work in PHP 5.3 or newer. Bear in mind that WordPress officially [still supports servers using PHP 5.2.4](https://wordpress.org/about/requirements/), so the version control code in the main plugin file ensures that your plugin won't break older environments. (It will automatically refuse to be activated.)
9. ``README.txt`` is the file which the WordPress Plugin Repository uses. It is enssential that you correctly maintain the *Requires at least*, *Tested up to* and *Stable tag* information whenever you make any changes, and it is also essential that you maintain the changelog. (Newest entries at the top.) [This reference guide](https://wordpress.org/plugins/about/svn/) to the WordPress SVN provides full information.

## Changelog

### 2.0.5
* Add markers to the code to enable automated search-and-replace.
* Move languages target folder to /languages.

### 2.0.4
* Fix and improve description and usage of ``PLUGIN_PREFIX`` and ``TEXT-DOMAIN``.

### 2.0.3
* Remove and ignore invivible OS X ``.DS_Store`` files from the repository.

### 2.0.2, 2.0.1
* Improvements to this README

### 2.0.0
* Breaking change: completely re-written to use more robust code for eligible submission to the WordPress Plugin Repository.
* Use standard file name syntax for the PHP file which WordPress sees as the "main" plugin file.
* Use simple code which is compatible with PHP 5.3 to check whether the plugin and PHP namespaces can be used.
* Simplify the provided namespaced code for real-world use.
* Provide a comprehensive README for the developer and an example of a README for use when submitting to the WordPress Plugin Repository.

### 1.0.0
* Initial version from 2014

## Author
Mark Howells-Mead | www.markweb.ch | Since November 2014

## License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
