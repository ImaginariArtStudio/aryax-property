<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function aryaxdashboard(){ ?>
    <div class="wrap">
		<div class="content-maya">
				<?php require_once ARYAXPROPERTY_PLUGIN_DIR . '/admin/functions/functions-dashboard.php';
				inventario_inmuebles(); ?>
		</div>
	</div>
<?php
}

function aryax_propiedades(){ ?>
    <div class="wrap">
		<div class="content-maya">
 Propiedades
		</div>
	</div>
<?php
}

function aryax_integraciones(){ ?>
    <div class="wrap">
		<div class="content-maya">
 Propiedades
		</div>
	</div>
<?php
}

function aryax_tools(){ ?>
    <div class="wrap">
		<div class="content-maya">
 Propiedades
		</div>
	</div>
<?php
}