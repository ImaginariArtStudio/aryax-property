<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function listartokens(){
    global $wpdb;
    $tabla ="{$wpdb->prefix}aryax_tokens";
    $id ="";
    $token="";
    $nombre="";
    $estado="";
    $query = "SELECT * FROM {$wpdb->prefix}aryax_tokens";
    $lista_tokens = $wpdb->get_results($query,ARRAY_A);
    if(empty($lista_tokens)){ 
        $lista_tokens = array();
    }  ?>

    <table class="wp-list-table widefat fixed striped pages">
            <thead>
                <th>IDINMO</th>
                <th>TOKEN</th>
                <th>NOMBRE</th>
                <th>CRM</th>
                <th>ACCIONES</th>
            </thead>
            <tbody class="the-list">
                    <?php  
                        foreach ($lista_tokens as $key => $value) {
                            $id = $value['id'];
                            $idinm = $value['idinmo'];
                            $token = $value['token'];
                            $nombre = $value['nombre']; 
                            $crm = $value['crm'];    
                            echo " <tr>
                            <td>$idinm</td>
                            <td>$token</td>
                            <td>$nombre</td>
                            <td>$crm</td>
                            <td>  
                                <button type='submit' class='btn btn-primary' name='btnactualizar' id='btnactualizar'>Actualizar</button>
                                <a data-id='$id' class='btn btn-danger'>Borrar</a>
                            </td>
                            </tr>
                            ";
                        } 
                    ?>
            </tbody>
    </table>
<?php 
}