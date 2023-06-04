<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function savetoken(){
    global $wpdb;
    $tabla ="{$wpdb->prefix}aryax_tokens";

        $aryaxid = $_POST['aryaxid'];
        $aryaxnombre = $_POST['aryaxnombre'];
        $aryaxtoken = $_POST['aryaxtoken'];
        $aryaxcrm = $_POST['aryaxcrm'];

        $datos =[
          'id' => null,
          'idinmo' => $aryaxid,
          'token' => $aryaxtoken,
          'nombre' => $aryaxnombre,
          'crm' => $aryaxcrm,
        ];
        $wpdb->insert($tabla,$datos);

}
