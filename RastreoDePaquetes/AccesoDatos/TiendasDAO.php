<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Tienda
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.TiendasDAO
 */
class TiendasDAO {
    public static function ListarTiendas_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/ListarTiendas.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleTienda_o($i_idTienda) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idTienda'] = $i_idTienda;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/DetalleTiendas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarTienda_o($s_codigoTienda,$s_estadoActivo,$s_email,$s_telefono,$s_direccion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@s_codigoTienda] = $s_codigoTienda;
        $params[@s_estadoActivo] = $s_estadoActivo;
        $params[@s_email] = $s_email;
        $params[@s_telefono] = $s_telefono;
        $params[@s_direccion] = $s_direccion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/InsertarTiendas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarTienda_o($s_codigoTienda,$s_estadoActivo,$s_email,$s_telefono,$s_direccion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@s_codigoTienda] = $s_codigoTienda;
        $params[@s_estadoActivo] = $s_estadoActivo;
        $params[@s_email] = $s_email;
        $params[@s_telefono] = $s_telefono;
        $params[@s_direccion] = $s_direccion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/ActualizarTiendas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
