<?php

/**
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

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'FLWEBCustomElements',
        'element',
        'FLWEB Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'FLWEBCustomElements',
        'macro',
        'FLWEB Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'FLWEBCustomElements',
        'preset',
        'FLWEB Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
