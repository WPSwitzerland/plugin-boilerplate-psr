# WordPress plugin starter code

## Description
A starting point for development of a WordPress plugin using PHP namespaces. The use of PHP namespaces means that plugins built using this code require PHP 5.3 or newer.

You're currently reading the contents of ``README.md``, which is not required for your plugin. (Although your own version is recommended for documentational purposes.)

The file ``README.txt`` is the one which the WordPress Plugin Repository needs.

## Usage
This code has no function of its own. It is a starting point for plugin developers. Do not install this code as a plugin without first customizing it.

### Liability
The contributors to this code accept no responsibility for correct and accurate code. Use the code at your own risk.

### Kickstart using a Shell script
If you're happy working with shell scripts, then you can use https://github.com/WPSwitzerland/plugin-builder, which will use prompts to automatically customize code in this plugin for you.

### Composer
If you don't use [Composer](https://getcomposer.org/doc/00-intro.md) and you don't want your generated plugin to be used with Composer, then remove the ``composer.json`` file from your generated plugin.

### Manual usage

1. Download the zip ``wp-plugin-default`` from GitHub, unpack it, and put the generated folder in your ``wp-content/plugins`` directory.
2. Rename the folder to reflect your own plugin name. This must be a unique name, so use a prefix which is specific to you as part of the plugin name. Uses dashes to separate words: ``my-plugin``.
3. Rename the file ``wp-plugin-default.php`` to use the same name as the folder you've created.
4. If you want to link any CSS, JavaScript or image files from your plugin, use a folder called ``assets``. 
5. Language files belong in the ``languages`` folder.
6. Replace the following uppercase text markers in the PHP files and in the ``composer.json`` file. Don't change ``PHP_VERSION``: this is a [pre-defined PHP constant](http://php.net/manual/en/reserved.constants.php), which the code uses to check compatability.
    - *PLUGIN_NAME* is the title or name of the plugin which appears in plugin overview lists.
    - *PLUGIN_URI* is the web address where users can find out details of your plugin. e.g. in the WordPress Plugin Directory, in Github, or on your website. This URI appears in the plugin overview list in WordPress Admin and in the WordPress Plugin Directory.
    - *PLUGIN_DESCRIPTION* is a text description of what the plugin does and what requirements it might have. Make it readable and useful!
    - *PLUGIN_AUTHOR* is your name or company name.
    - *AUTHOR_URI* is the address of your website.
    - *AUTHOR_EMAIL* is your email address.
    - *TEXT_DOMAIN* is the text domain which you're using for translations. This should match the folder name of the plugin; lowercase and featuring underscores instead of spaces.
    - *PLUGIN_DOMAIN* is the slug of the plugin: for example, this repository's slug is *wpswitzerland/wp-plugin-default*.
    - *PLUGIN_PREFIX* is a unique prefix applied to function names, so that there is no conflict with other functions in the global namespace. This should ideally match the folder name of the plugin.
7. Replace the namespace ``AUTHOR_NAMESPACE\PLUGIN_NAMESPACE`` in ``Classes/Plugin.php`` with your own namespace. I recommend using your own unique vendor prefix for the top-level namespace in all of your plugins, and the name of the plugin for the second-level namespace. Both of these namespace parts should be in [PascalCase](https://en.wikipedia.org/wiki/PascalCase). (For example, the namespace for the example code would be ``Wpswitzerland\WpPluginDefault``.)
8. Use and maintain the version number according to the specifications explained at http://semver.org/. This is *essential*, so that you (and the plugin users) can manage plugin usage.
9. Check and replace the PHP version number *5.3* and the WordPress version number *4.7* in the main plugin file and in the ``composer.json`` file, according to your own plugin's requirements.
    - As this code uses [PHP namespaces](http://php.net/manual/en/language.namespaces.php), the code will only work in PHP 5.3 or newer. Bear in mind that WordPress officially [still supports servers using PHP 5.2.4](https://wordpress.org/about/requirements/), so the version control code in the main plugin file ensures that your plugin won't break older environments. (It will automatically refuse to be activated.)
10. ``README.txt`` is the file which the WordPress Plugin Repository uses. It is essential that you correctly maintain the *Requires at least*, *Tested up to* and *Stable tag* information whenever you make any changes, and it is also essential that you maintain the changelog. (Newest entries at the top.) [This reference guide](https://wordpress.org/plugins/about/svn/) to the WordPress SVN provides full information.

## Changelog

### 2.3.2
* Update README.txt with markers.
* Minor change to README_BLANK.md contents.
* Update marker references in this README.

### 2.3.1
* Add README_BLANK.md file as a basis for the real plugin.

### 2.3.0
* Amend markers to reflect changes in the [Plugin Builder](https://github.com/WPSwitzerland/plugin-builder) script.
* Bump WordPress core version requirement to 4.7.

### 2.2.0
* Update WordPress version requirement to 4.7.
* Minor syntax fixes.
* Add correct placeholders to the ``composer.json`` file.
* Add notes on liability and Composer to the README.
* Credit Mauro Bringolf in README.

### 2.1.0
* Add composer.json file
* Updated README.

### 2.0.6
* Updated README to reflect code amendments in 2.0.5.

### 2.0.5
* Add markers to the code to enable automated search-and-replace.
* Move languages target folder to /languages.

### 2.0.4
* Fix and improve description and usage of ``PLUGIN_PREFIX`` and ``TEXT_DOMAIN``.

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

## Contributors
* Mark Howells-Mead | www.markweb.ch
* Mauro Bringolf | www.webkinder.ch/team/mauro/
* Nico Martin | www.nicomartin.ch

## License
Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
