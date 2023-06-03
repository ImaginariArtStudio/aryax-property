<?php
add_action('admin_menu', 'aryaxproperty_api_gateway');
function aryaxproperty_api_gateway(){
    add_menu_page(
        'Api Gateway Pro',
        'API Gateway',
        'manage_options',
        'Api-Dashboard',
        'aryaxpropertyApiDashboard',
        //'dashicons-building',
        plugin_dir_url(__DIR__) . 'includes/images/logo_Aryax.png',
        '2'
    );
}