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

}

function desactivar_aryaxproperty(){

}