<?php

/**
<<<<<<< HEAD
 * Plugin Name: FL WEB DESIGN CUSTOM ELEMENTS
 * Plugin URI: https://www.flweb.design/
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: Frank Lowe
 * Author URI: https://www.flweb.design/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 1.0.1
 */

namespace FLWEBCustomElements;
=======
 * Plugin Name: FL WEB DESIGN Custom Elements
 * Plugin URI: https://flweb.design/
 * Description: FL Web Design Custom elements for Breakdance
 * Author: Frank Lowe
 * Author URI: https://www.linkedin.com/in/flweb-design/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 2.4.0
 */

namespace FLWEBDESIGNCustomElements;
>>>>>>> e1d504ab7b27b43f6eb3101530bc466be8b30b8b

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
<<<<<<< HEAD
        'FLWEBCustomElements',
        'element',
        'FLWEB Custom Elements',
=======
        'FLWEBDESIGNCustomElements',
        'element',
        'FL WEB DESIGN Custom Elements',
>>>>>>> e1d504ab7b27b43f6eb3101530bc466be8b30b8b
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
<<<<<<< HEAD
        'FLWEBCustomElements',
        'macro',
        'FLWEB Custom Macros',
=======
        'FLWEBDESIGNCustomElements',
        'macro',
        'FL WEB DESIGN Custom Macros',
>>>>>>> e1d504ab7b27b43f6eb3101530bc466be8b30b8b
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
<<<<<<< HEAD
        'FLWEBCustomElements',
        'preset',
        'FLWEB Custom Presets',
=======
        'FLWEBDESIGNCustomElements',
        'preset',
        'FL WEB DESIGN Custom Presets',
>>>>>>> e1d504ab7b27b43f6eb3101530bc466be8b30b8b
        false,
    );
},
    // register elements before loading them
    9
);
