<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Paquete
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.PaquetesDAO
 */
class PaquetesDAO {
    public static function ListarPaquetes_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Paquetes/ListarPaquetes.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetallePaquete_o($i_idPaquete) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idPaquete'] = $i_idPaquete;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Paquetes/DetallePaquetes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarPaquete_o($i_numeroEBL,$s_trackingExterno,$s_numeroDeBolsa,$s_codPais,$i_numCasillero,$s_descripcion,$i_piezasEnInterior,$i_piezas,$d_peso,$d_largo,$d_ancho,$d_espesor,$e_tipo,$d_valorComercial,$dt_fechaIngresoAMiami,$dt_fechaUltimoEstado,$s_manifiesto,$s_estadoImportacion,$s_estadoArchivado) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_numeroEBL] = $i_numeroEBL;
        $params[@s_trackingExterno] = $s_trackingExterno;
        $params[@s_numeroDeBolsa] = $s_numeroDeBolsa;
        $params[@s_codPais] = $s_codPais;
        $params[@i_numCasillero] = $i_numCasillero;
        $params[@s_descripcion] = $s_descripcion;
        $params[@i_piezasEnInterior] = $i_piezasEnInterior;
        $params[@i_piezas] = $i_piezas;
        $params[@d_peso] = $d_peso;
        $params[@d_largo] = $d_largo;
        $params[@d_ancho] = $d_ancho;
        $params[@d_espesor] = $d_espesor;
        $params[@e_tipo] = $e_tipo;
        $params[@d_valorComercial] = $d_valorComercial;
        $params[@dt_fechaIngresoAMiami] = $dt_fechaIngresoAMiami;
        $params[@dt_fechaUltimoEstado] = $dt_fechaUltimoEstado;
        $params[@s_manifiesto] = $s_manifiesto;
        $params[@s_estadoImportacion] = $s_estadoImportacion;
        $params[@s_estadoArchivado] = $s_estadoArchivado;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Paquetes/InsertarPaquetes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarPaquete_o($i_numeroEBL,$s_trackingExterno,$s_numeroDeBolsa,$s_codPais,$i_numCasillero,$s_descripcion,$i_piezasEnInterior,$i_piezas,$d_peso,$d_largo,$d_ancho,$d_espesor,$e_tipo,$d_valorComercial,$dt_fechaIngresoAMiami,$dt_fechaUltimoEstado,$s_manifiesto,$s_estadoImportacion,$s_estadoArchivado) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_numeroEBL] = $i_numeroEBL;
        $params[@s_trackingExterno] = $s_trackingExterno;
        $params[@s_numeroDeBolsa] = $s_numeroDeBolsa;
        $params[@s_codPais] = $s_codPais;
        $params[@i_numCasillero] = $i_numCasillero;
        $params[@s_descripcion] = $s_descripcion;
        $params[@i_piezasEnInterior] = $i_piezasEnInterior;
        $params[@i_piezas] = $i_piezas;
        $params[@d_peso] = $d_peso;
        $params[@d_largo] = $d_largo;
        $params[@d_ancho] = $d_ancho;
        $params[@d_espesor] = $d_espesor;
        $params[@e_tipo] = $e_tipo;
        $params[@d_valorComercial] = $d_valorComercial;
        $params[@dt_fechaIngresoAMiami] = $dt_fechaIngresoAMiami;
        $params[@dt_fechaUltimoEstado] = $dt_fechaUltimoEstado;
        $params[@s_manifiesto] = $s_manifiesto;
        $params[@s_estadoImportacion] = $s_estadoImportacion;
        $params[@s_estadoArchivado] = $s_estadoArchivado;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Paquetes/ActualizarPaquetes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
