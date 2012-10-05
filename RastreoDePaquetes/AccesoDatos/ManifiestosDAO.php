<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Manifiesto
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.ManifiestosDAO
 */
class ManifiestosDAO {
    public static function ListarManifiestos_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Manifiestos/ListarManifiestos.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleManifiesto_o($i_idManifiesto) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idManifiesto'] = $i_idManifiesto;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Manifiestos/DetalleManifiestos.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarManifiesto_o($s_idManifiesto,$dt_fechaRegistro,$s_estadoDelManifiesto,$s_Formato) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@s_idManifiesto] = $s_idManifiesto;
        $params[@dt_fechaRegistro] = $dt_fechaRegistro;
        $params[@s_estadoDelManifiesto] = $s_estadoDelManifiesto;
        $params[@s_Formato] = $s_Formato;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Manifiestos/InsertarManifiestos.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarManifiesto_o($s_idManifiesto,$dt_fechaRegistro,$s_estadoDelManifiesto,$s_Formato) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@s_idManifiesto] = $s_idManifiesto;
        $params[@dt_fechaRegistro] = $dt_fechaRegistro;
        $params[@s_estadoDelManifiesto] = $s_estadoDelManifiesto;
        $params[@s_Formato] = $s_Formato;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Manifiestos/ActualizarManifiestos.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
