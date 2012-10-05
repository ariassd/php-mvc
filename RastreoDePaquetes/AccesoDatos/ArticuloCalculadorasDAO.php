<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para ArticuloCalculadora
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.ArticuloCalculadorasDAO
 */
class ArticuloCalculadorasDAO {
    public static function ListarArticuloCalculadoras_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/ArticuloCalculadoras/ListarArticuloCalculadoras.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleArticuloCalculadora_o($i_idArticuloCalculadora) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idArticuloCalculadora'] = $i_idArticuloCalculadora;
        $query = MySqlHelper::GetQueryFromFile("/Querys/ArticuloCalculadoras/DetalleArticuloCalculadoras.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarArticuloCalculadora_o($d_peso,$d_porcentajeArancelario,$d_valorComercial,$s_descripcion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_peso] = $d_peso;
        $params[@d_porcentajeArancelario] = $d_porcentajeArancelario;
        $params[@d_valorComercial] = $d_valorComercial;
        $params[@s_descripcion] = $s_descripcion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ArticuloCalculadoras/InsertarArticuloCalculadoras.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarArticuloCalculadora_o($d_peso,$d_porcentajeArancelario,$d_valorComercial,$s_descripcion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@d_peso] = $d_peso;
        $params[@d_porcentajeArancelario] = $d_porcentajeArancelario;
        $params[@d_valorComercial] = $d_valorComercial;
        $params[@s_descripcion] = $s_descripcion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/ArticuloCalculadoras/ActualizarArticuloCalculadoras.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
