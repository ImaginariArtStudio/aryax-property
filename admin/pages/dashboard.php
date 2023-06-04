<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/pages/licencia.php';
function aryaxdashboard(){ ?>
    <div class="wrap">
		<div class="content-maya">
				<?php require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/functions-dashboard.php';
				inventario_inmuebles(); ?>
		</div>
	</div>
<?php
}

function aryax_propiedades(){ 
	require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/pages/crearpropiedad.php';

}



function aryax_tools(){ ?>
    <div class="wrap">
		<div class="content-maya">
 Propiedades
		</div>
	</div>
<?php
}