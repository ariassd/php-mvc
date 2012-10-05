<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para PreAlerta
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.PreAlertasDAO
 */
class PreAlertasDAO {
    public static function ListarPreAlertas_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/PreAlertas/ListarPreAlertas.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetallePreAlerta_o($i_idPreAlerta) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idPreAlerta'] = $i_idPreAlerta;
        $query = MySqlHelper::GetQueryFromFile("/Querys/PreAlertas/DetallePreAlertas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarPreAlerta_o($i_id,$s_descripcion,$d_valor,$s_archivo) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_descripcion] = $s_descripcion;
        $params[@d_valor] = $d_valor;
        $params[@s_archivo] = $s_archivo;

        $query = MySqlHelper::GetQueryFromFile("/Querys/PreAlertas/InsertarPreAlertas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarPreAlerta_o($i_id,$s_descripcion,$d_valor,$s_archivo) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_descripcion] = $s_descripcion;
        $params[@d_valor] = $d_valor;
        $params[@s_archivo] = $s_archivo;

        $query = MySqlHelper::GetQueryFromFile("/Querys/PreAlertas/ActualizarPreAlertas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
