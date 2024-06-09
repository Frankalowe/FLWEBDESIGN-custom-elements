<?php

/**
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

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'FLWEBDESIGNCustomElements',
        'element',
        'FL WEB DESIGN Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'FLWEBDESIGNCustomElements',
        'macro',
        'FL WEB DESIGN Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'FLWEBDESIGNCustomElements',
        'preset',
        'FL WEB DESIGN Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
