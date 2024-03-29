# WordPress plugin boilerplate - PSR standard

## Description

A starting point for development of a WordPress plugin using PHP namespaces. By default, the plugin demands PHP 8.1 and WordPress 6.2 - partially for technical reasons, but also in order to encourage a more modern installation.

### JavaScript and CSS build processes

The plugin contains Gulp/Webpack build processes for scripts, styles, block scripts and block styles. Before running them, make sure that you have prepared all of the files by ensuring that the steps listed below (“Manual usage”) have been carried out. Install the dependencies by running `npm install` in the root folder, then run `npm start` to start the watcher.

### Blocks

The plugin contains an example of registering a WordPress Block using the block.json methodology. The scripts and styles in this example are compiled as part of the build process detailed above. Maintain the folder structure in order to allow the build process to work correctly.

### READMEs

You're currently reading the contents of `README.md`, which is not required for your plugin. (Your own version is recommended for documentation purposes.)

The file `README.txt` is the one which the WordPress Plugin Repository needs.

## Coding Standards

The code in this boilerplate adheres to the [PSR-2 Coding Standard](http://www.php-fig.org/psr/psr-2/), not WordPress Coding Standards. For a WordPress Coding Standards version, use [this version](https://github.com/WPSwitzerland/plugin-boilerplate-wordpress) instead.

## Usage

This code has no function of its own. It is a starting point for plugin developers.

### Liability

The contributors to this code accept no responsibility for correct and accurate code. Use the code at your own risk.

### Kickstart using a Shell script

If you're happy working with shell scripts, then you can use https://github.com/WPSwitzerland/plugin-builder, which will use prompts to automatically customise code in this plugin for you.

### Manual usage

1. Download the zip `plugin-boilerplate-psr` from GitHub, unpack it, and put the generated folder in your `wp-content/plugins` directory.
2. Rename the folder to reflect your own plugin name. This must be a unique name, so use a prefix which is specific to you as part of the plugin name. Uses dashes to separate words: `my-plugin`.
3. Rename the file `plugin-boilerplate-psr.php` to use the same name as the folder you've created.
4. If you want to link any CSS, JavaScript or image files from your plugin, use a folder called `assets`.
5. Language files belong in the `languages` folder.
6. Replace the following uppercase text markers in the PHP files and in the `composer.json` file. Don't change `PHP_VERSION`: this is a [pre-defined PHP constant](http://php.net/manual/en/reserved.constants.php), which the code uses to check compatibility.
    - _PLUGIN_NAME_ is the title or name of the plugin which appears in plugin overview lists.
    - _PLUGIN_URI_ is the web address where users can find out details of your plugin. e.g. in the WordPress Plugin Directory, in Github, or on your website. This URI appears in the plugin overview list in WordPress Admin and in the WordPress Plugin Directory.
    - _PLUGIN_DESCRIPTION_ is a text description of what the plugin does and what requirements it might have. Make it readable and useful!
    - _PLUGIN_AUTHOR_ is your name or company name.
    - _AUTHOR_URI_ is the address of your website.
    - _AUTHOR_EMAIL_ is your email address.
    - _TEXT_DOMAIN_ is the text domain which you're using for translations. This should match the folder name of the plugin; lowercase and featuring underscores instead of spaces. (`my_plugin`)
    - _PLUGIN_DOMAIN_ is the slug of the plugin: for example, this repository's slug is _wpswitzerland/plugin-boilerplate-psr_.
    - _PLUGIN_PREFIX_ is a unique prefix applied to function names, so that there is no conflict with other functions in the global namespace. This should ideally match the folder name of the plugin. (`my-plugin`)
7. Replace the namespace `AUTHOR_NAMESPACE\PLUGIN_NAMESPACE` in `Classes/Plugin.php` with your own namespace. We recommend using your own unique vendor prefix for the top-level namespace in all of your plugins, and the name of the plugin for the second-level namespace. Both of these namespace parts should be in [PascalCase](https://en.wikipedia.org/wiki/PascalCase). (For example, the namespace for the example code would be `Wpswitzerland\PluginBoilerplatePsr`.)
8. Use and maintain the version number according to the specifications explained at http://semver.org/. This is _essential_, so that you (and the plugin users) can manage plugin usage.
9. Check and replace the PHP version number _8.0_ and the WordPress version number _6.0_ in the main plugin file according to your own plugin's requirements.
    - As this code uses [PHP namespaces](http://php.net/manual/en/language.namespaces.php), the code will only work in PHP 8.0 or newer. (It will automatically refuse to be activated.)
10. Refer to [this dev note](https://make.wordpress.org/core/2021/06/29/introducing-update-uri-plugin-header-in-wordpress-5-8/) for details of the Update URI feature, which is part of the plugin header.
11. `README.txt` is the file which the WordPress Plugin Repository uses. It is essential that you correctly maintain the _Requires at least_, _Tested up to_ and _Stable tag_ information whenever you make any changes, and it is also essential that you maintain the changelog. (Newest entries at the top.) [This reference guide](https://wordpress.org/plugins/about/svn/) to the WordPress SVN provides full information.
12. If you need to refer to the instance returned by the `get_instance` function in your own code (e.g. theme), then you can assign the return value of this function to a uniquely-named global variable. E.g. for the example code, `$plugin_boilerplate_psr = \AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\PLUGIN_PREFIX_get_instance()`. Be very careful when naming this variable and avoid conflicts with any other PHP variables.

## Changelog

### 4.4.0

-   Add build processes for CSS and JavaScript.
-   Add an example of a WordPress Block registered using block.json.
-   Bump dependencies to WordPress 6.2 and PHP 8.1

### 4.3.0

-   Fix and improve autoloading.
-   Update WordPress Core requirement to version 6.
-   Remove plugin's own version checking. This is carried out automatically by using the version requirements in the plugin's header comment.
-   Remove composer.json file.
-   Update code formatting helpers.
-   Fix array syntax in language-loading filter hook.
-   Update README files.

### 4.2.0

-   Bump version requirements to PHP 8 and WordPress 5.9.
-   Add example of child class usage, including `use function` for the get instance method.
-   Restructure and tidy code using PHPCS and the newest editorconfig and ruleset.xml.
-   Extend Plugin headers and README file.

### 4.1.0

-   Restructure and tidy PHP code using PHPCS
-   Add ruleset.xml and .editorconfig
-   Update PHP and WordPress version requirements

### 4.0.2

-   Formal GitHub release. No code changes.

### 4.0.1

-   Use `get_bloginfo('version')` to get WordPress Core version number.

### 4.0.0

-   Bump WordPress core version requirement to 4.9.
-   Bump PHP version requirement to 7.1.
-   Bump composer/installers dependency to 1.4.0.

### 3.0.0

-   Rework code to better adhere to OOP principles.
-   Hooking, filtering and function calls should ideally no longer be applied in the `__construct` function. See [Tom McFarlin's blog post](https://tommcfarlin.com/wordpress-plugin-constructors-hooks/) which details the reasons. This requirement is, however, not enforced in the repository code.
-   Renamed repository to `plugin-boilerplate-psr`, which more accurately describes the basis of the repository.

### 2.3.2

-   Update README.txt with markers.
-   Minor change to README_BLANK.md contents.
-   Update marker references in this README.

### 2.3.1

-   Add README_BLANK.md file as a basis for the real plugin.

### 2.3.0

-   Amend markers to reflect changes in the [Plugin Builder](https://github.com/WPSwitzerland/plugin-builder) script.
-   Bump WordPress core version requirement to 4.7.

### 2.2.0

-   Update WordPress version requirement to 4.7.
-   Minor syntax fixes.
-   Add correct placeholders to the `composer.json` file.
-   Add notes on liability and Composer to the README.
-   Credit Mauro Bringolf in README.

### 2.1.0

-   Add composer.json file
-   Updated README.

### 2.0.6

-   Updated README to reflect code amendments in 2.0.5.

### 2.0.5

-   Add markers to the code to enable automated search-and-replace.
-   Move languages target folder to /languages.

### 2.0.4

-   Fix and improve description and usage of `PLUGIN_PREFIX` and `TEXT_DOMAIN`.

### 2.0.3

-   Remove and ignore invivible OS X `.DS_Store` files from the repository.

### 2.0.2, 2.0.1

-   Improvements to this README

### 2.0.0

-   Breaking change: completely re-written to use more robust code for eligible submission to the WordPress Plugin Repository.
-   Use standard file name syntax for the PHP file which WordPress sees as the "main" plugin file.
-   Use simple code which is compatible with PHP 5.3 to check whether the plugin and PHP namespaces can be used.
-   Simplify the provided namespaced code for real-world use.
-   Provide a comprehensive README for the developer and an example of a README for use when submitting to the WordPress Plugin Repository.

### 1.0.0

-   Initial version from 2014

## Contributors

-   Mark Howells-Mead | [howellsmead.com](https://www.howellsmead.com)
-   Mauro Bringolf | [maurobringolf.ch](https://maurobringolf.ch)
-   Nico Martin | www.nicomartin.ch

## License

Use this code freely, widely and for free. Provision of this code provides and implies no guarantee.

Please respect the GPL v3 licence, which is available via http://www.gnu.org/licenses/gpl-3.0.html
