<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para ValoresArancelario
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.ValoresArancelariosDAO
 */
class ValoresArancelariosDAO {
    public static function ListarValoresArancelarios_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/ValoresArancelarios/ListarValoresArancelarios.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleValoresArancelario_o($i_idValoresArancelario) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idValoresArancelario'] = $i_idValoresArancelario;
        $query = MySqlHelper::GetQueryFromFile("/Querys/ValoresArancelarios/DetalleValoresArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarValoresArancelario_o($d_valorAdicional,$d_valorBodegaje,$d_valorDesalmacenaje,$e_operacionValoradicional) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_valorAdicional] = $d_valorAdicional;
        $params[@d_valorBodegaje] = $d_valorBodegaje;
        $params[@d_valorDesalmacenaje] = $d_valorDesalmacenaje;
        $params[@e_operacionValoradicional] = $e_operacionValoradicional;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ValoresArancelarios/InsertarValoresArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarValoresArancelario_o($d_valorAdicional,$d_valorBodegaje,$d_valorDesalmacenaje,$e_operacionValoradicional) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_valorAdicional] = $d_valorAdicional;
        $params[@d_valorBodegaje] = $d_valorBodegaje;
        $params[@d_valorDesalmacenaje] = $d_valorDesalmacenaje;
        $params[@e_operacionValoradicional] = $e_operacionValoradicional;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ValoresArancelarios/ActualizarValoresArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
