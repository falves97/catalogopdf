<?php

/**
 * catalogoPDF
 *
 * @package           catalogoPDF
 * @author            Fernando Braga Alves
 * @copyright         2021 Fernando Braga Alves
 * @license           GPL-3
 *
 * @wordpress-plugin
 * Plugin Name:       catalogoPDF
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           0.0.1
 * Requires at least: 5.7
 * Requires PHP:      7.4
 * Author:            Fernando Braga Alves
 * License:           GPL v3
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


function catalogoPath()
{
    $path = plugin_dir_url(__FILE__) . "source/View/makeCatalogo.php";
    return $path;
}

add_shortcode('catalogo', 'catalogoPath');