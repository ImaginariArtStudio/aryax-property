<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
add_action('admin_menu', 'aryaxproperty_api_gateway');
function aryaxproperty_api_gateway(){
    add_menu_page(
        'Aryax Property',
        'Aryax Property',
        'manage_options',
        'Aryax-Property-Dashboard',
        'aryaxdashboard',
        //'dashicons-building',
        plugin_dir_url(__DIR__) . 'includes/images/logo_Aryax.png',
        '2'
    );
}
// Hook para agregar el submenú
add_action('admin_menu', 'agregar_submenu');

// Función para agregar el submenú
function agregar_submenu() {
    // Añade un submenú bajo la sección "Configuración" en el menú de administración
    add_submenu_page(
        'Aryax-Property-Dashboard', // Slug de la página principal
        'Mis Propiedades', // Título de la página
        'Mis Propiedades', // Título del menú
        'manage_options', // Capacidad requerida para acceder a la página
        'Mis-Propiedades', // Slug del submenú
        'aryax_propiedades' // Función de devolución de llamada para mostrar la página del submenú
    );
    add_submenu_page(
        'Aryax-Property-Dashboard', // Slug de la página principal
        'Integraciones', // Título de la página
        'Integraciones', // Título del menú
        'manage_options', // Capacidad requerida para acceder a la página
        'Integraciones', // Slug del submenú
        'aryax_integraciones' // Función de devolución de llamada para mostrar la página del submenú
    );
    add_submenu_page(
        'Aryax-Property-Dashboard', // Slug de la página principal
        'Herramientas', // Título de la página
        'Herramientas', // Título del menú
        'manage_options', // Capacidad requerida para acceder a la página
        'Herramientas', // Slug del submenú
        'aryax_tools' // Función de devolución de llamada para mostrar la página del submenú
    );
}

require_once ARYAXPROPERTY_PLUGIN_DIR  . '/admin/pages/dashboard.php';