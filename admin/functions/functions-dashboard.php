<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
function inventario_inmuebles(){
	global $wpdb;
	$tabla = $wpdb->prefix . 'aryax_propiedades'; 
	$consulta = "SELECT COUNT(*) FROM $tabla";
	$inmueblestotales = $wpdb->get_var( $consulta );
	echo " la cantidad de inmuebles son " . $inmueblestotales;
}
