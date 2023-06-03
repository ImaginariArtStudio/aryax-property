<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function aryax_create_db_inmuebles(){
    global $wpdb;
    $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}aryax_propiedades(
            `id` INT NOT NULL AUTO_INCREMENT,
            `idInmobiliaria` INT NULL,
            `fconsignacion` VARCHAR(45) NULL,
            `idEstadoInmueble` VARCHAR(45) NULL,
            `idInmueble` VARCHAR(45) NULL,
            `tipo_inmueble` VARCHAR(100) NULL,
            `gestion` VARCHAR(50) NULL,
            `alcobas` INT NULL,
            `banos` INT NULL,
            `garaje` INT NULL,
            `depto` VARCHAR(100) NULL,
            `ciudad` VARCHAR(100) NULL,
            `barrio` VARCHAR(100) NULL,
            `localidad` VARCHAR(100) NULL,
            `zona` VARCHAR(100) NULL,
            `latitud` VARCHAR(100) NULL,
            `longitud` VARCHAR(100) NULL,
            `AreaConstruida` VARCHAR(100) NULL,
            `AreaLote` VARCHAR(100) NULL,
            `Estrato` INT NULL,
            `valorcanon` VARCHAR(100) NULL,
            `administracion` VARCHAR(100) NULL,
            `admonIncluida` VARCHAR(100) NULL,
            `valoriva` VARCHAR(100) NULL,
            `valorventa` VARCHAR(100) NULL,
            `precio` VARCHAR(100) NULL,
            `descripcion` VARCHAR(200) NULL,
            `edadinmueble` INT NULL,
            `destinacion` INT NULL,
            `esnuevo` VARCHAR(20) NULL,
            `fotos` LONGTEXT NULL,
            `fotos360` LONGTEXT NULL,
            `video` VARCHAR(100) NULL,
            `video360` VARCHAR(100) NULL,
            `restricciones` VARCHAR(100) NULL,
            PRIMARY KEY (`id`)
    );";

  $wpdb->query($sql);
}

function aryax_delet_inmu(){
	global $wpdb;
	$sql = "DROP TABLE {$wpdb->prefix}aryax_propiedades;";
	$wpdb->query($sql);
}