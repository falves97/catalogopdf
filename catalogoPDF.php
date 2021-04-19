<?php

require_once __DIR__ . "/vendor/autoload.php";

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
 * Author:            Fernando Braga Alves
 * License:           GPL v3
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || exit;

function url_catalogo_include( $template ) {
    if ( get_query_var( 'catalogoPDF' ) ) {
        $template_name = 'templateTeste.php';

        $template = locate_template( $template_name );
        if ( '' === $template ) {
            $template = __DIR__ . '/' . $template_name;
        }
    }
    return $template;
}
add_filter( 'template_include', 'url_catalogo_include' );