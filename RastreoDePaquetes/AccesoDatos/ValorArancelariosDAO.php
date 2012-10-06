<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para ValorArancelario
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.ValorArancelariosDAO
 */
class ValorArancelariosDAO {
    public static function ListarValorArancelarios_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/ValorArancelarios/ListarValorArancelarios.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleValorArancelario_o($i_idValorArancelario) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idValorArancelario'] = $i_idValorArancelario;
        $query = MySqlHelper::GetQueryFromFile("/Querys/ValorArancelarios/DetalleValorArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarValorArancelario_o($d_valorAdicional,$d_valorBodegaje,$d_valorDesalmacenaje,$e_operacionValoradicional) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_valorAdicional] = $d_valorAdicional;
        $params[@d_valorBodegaje] = $d_valorBodegaje;
        $params[@d_valorDesalmacenaje] = $d_valorDesalmacenaje;
        $params[@e_operacionValoradicional] = $e_operacionValoradicional;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ValorArancelarios/InsertarValorArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarValorArancelario_o($d_valorAdicional,$d_valorBodegaje,$d_valorDesalmacenaje,$e_operacionValoradicional) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_valorAdicional] = $d_valorAdicional;
        $params[@d_valorBodegaje] = $d_valorBodegaje;
        $params[@d_valorDesalmacenaje] = $d_valorDesalmacenaje;
        $params[@e_operacionValoradicional] = $e_operacionValoradicional;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ValorArancelarios/ActualizarValorArancelarios.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
