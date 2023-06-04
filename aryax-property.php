<?php
/**
 * Plugin Name:       aryax property
 * Plugin URI:        https://aryaxcode.com/plugins/aryax-property
 * Description:       plugin para la administracion de inmuebles
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Aryax Code Team
 * Author URI:        https://aryaxcode.com/
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        https://aryaxcode.com/plugins/aryax-property
 * Text Domain:       aryaxproperty
 * Domain Path:       /languages
 */

 /*
Derechos de autor (C) 2017-2023 Imaginaryi Art Studios

Este programa es software libre: puede redistribuirlo y/o modificarlo 
según los términos de la Licencia Pública General GNU publicada por la 
Free Software Foundation, ya sea la versión 3 de la Licencia o (a su elección)
cualquier versión posterior.

Este programa se distribuye con la esperanza de que sea útil, 
pero SIN NINGUNA GARANTÍA; sin siquiera la garantía implícita 
de COMERCIABILIDAD o IDONEIDAD PARA UN PROPÓSITO PARTICULAR. 
Consulte la Licencia pública general de GNU para obtener más detalles.

Debería haber recibido una copia de la Licencia Pública General de GNU
 junto con este programa. Si no, consulte <https://www.gnu.org/licenses/>.

TÉRMINOS ADICIONALES según GNU GPL Sección 7 El origen del Programa no debe tergiversarse; 
no debe afirmar que escribió el Programa original. Las versiones fuente alteradas deben estar 
claramente marcadas como tales y no deben tergiversarse como si fueran el Programa original.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! defined( '_SP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_SP_VERSION', '1.0' );
}

define("ARYAXPROPERTY_DIR", __FILE__);
define("ARYAXPROPERTY_PLUGIN_DIR", plugin_dir_path(ARYAXPROPERTY_DIR));
define("BLACKCATPROPERTY_PLUGIN_NAME","Aryax Property");

register_activation_hook(ARYAXPROPERTY_DIR, "activar_aryaxproperty");
register_deactivation_hook(ARYAXPROPERTY_DIR, "desactivar_aryaxproperty");
require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/menu-admin.php';

function activar_aryaxproperty(){
	require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/aryax-db.php';
	aryax_create_db_inmuebles();
	aryax_create_db();
}

function desactivar_aryaxproperty(){
	require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/aryax-db.php';
	aryax_delet_inmu();
}

function aryax_librerias($hook){
	
	echo "<script> console.log('$hook')</script>";
	if($hook != "aryax-property_page_Integraciones" && $hook != "toplevel_page_Api-Dashboard" && $hook != "api-gateway_page_aryax-plugin-endpoint"){
		return;
	}
    wp_enqueue_script('bootstrapjs', plugins_url('includes/librerias/bootstrap-4/js/bootstrap.bundle.min.js',__FILE__),array('jquery'));
    wp_enqueue_style('bootstrapcss', plugins_url('includes/librerias/bootstrap-4/css/bootstrap.min.css',__FILE__));
	wp_enqueue_script('aryax-apigateway-js', plugins_url('includes/js/aryax-apigateway.js',__FILE__),array('jquery'));
	wp_enqueue_style('aryaxcss', plugins_url('includes/css/aryaxapigateway.css',__FILE__));
	wp_enqueue_style('maya-css', plugins_url('includes/css/mayagrip-min.css',__FILE__));
	wp_enqueue_script('jquery'); 
}
add_action('admin_enqueue_scripts', 'aryax_librerias');

function aryax_librerias_tokens($hook){
	//echo "<script> console.log('$hook')</script>";
	if($hook != "aryax-property_page_Integraciones"){
		return;
	}
	wp_enqueue_script('aryax-tokens-js', plugins_url('includes/js/aryax-tokens.js',__FILE__),array('jquery'));
	
	wp_localize_script('aryax-tokens-js','SolicitudesAjax',[
        'url' => admin_url('admin-ajax.php'),
        'seguridad' => wp_create_nonce('seg')
    ]);

}
add_action('admin_enqueue_scripts', 'aryax_librerias_tokens');


//ajax

function EliminarToken(){
    $nonce = $_POST['nonce'];
    if(!wp_verify_nonce($nonce, 'seg')){
        die('no tiene permisos para ejecutar ese ajax');
    }

    $id = $_POST['id'];
    global $wpdb;
    $tabla = "{$wpdb->prefix}aryax_tokens";
    $wpdb->delete($tabla,array('id' =>$id));
     return true;
}

add_action('wp_ajax_peticioneliminar','EliminarToken');
