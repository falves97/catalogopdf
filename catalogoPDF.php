<?php

require_once __DIR__ . "/vendor/autoload.php";

use Source\Model\Data\ClientData;
use Source\Model\Data\LoadProduct;

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

function loadClientData() {
    
    
    try {
        //lendo arquivo
        $file_name = plugin_dir_path( __FILE__ ) . "source/include/api.json";
        $file = fopen($file_name, "r");
        $json = fread($file, filesize($file_name));
        fclose($file);

        //atualizando dados
        $data = json_decode($json);
        $data->host = site_url();
        $data->consumerKey = "ck_092ca1022be96ccb40eb901714924f82410e837b";
        $data->consumerSecret = "cs_1808a3e39cb74866e5c46ae73129030772aa5576";
        $json = json_encode($data);

        //atualizando arquivo
        $file = fopen($file_name, "w");
        fwrite($file, $json);
    }
    catch(Exception $e) {
        exit($e->getMessage());
    }
    
}

function catalogoPath()
{
    $path = plugin_dir_url( __FILE__ ) . "source/View/makeCatalogo.php";
    return $path;
}

add_shortcode( 'teste', function() {
    return plugin_dir_url( __FILE__ );
});

add_shortcode( 'catalogo', 'catalogoPath' );

register_activation_hook(__FILE__, 'loadClientData');