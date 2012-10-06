<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para PlanMbe
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.PlanMbesDAO
 */
class PlanMbesDAO {
    public static function ListarPlanMbes_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/PlanMbes/ListarPlanMbes.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetallePlanMbe_o($i_idPlanMbe) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idPlanMbe'] = $i_idPlanMbe;
        $query = MySqlHelper::GetQueryFromFile("/Querys/PlanMbes/DetallePlanMbes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarPlanMbe_o($i_id,$s_tipo,$d_seguroParaPaquetes) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_tipo] = $s_tipo;
        $params[@d_seguroParaPaquetes] = $d_seguroParaPaquetes;

        $query = MySqlHelper::GetQueryFromFile("/Querys/PlanMbes/InsertarPlanMbes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarPlanMbe_o($i_id,$s_tipo,$d_seguroParaPaquetes) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_tipo] = $s_tipo;
        $params[@d_seguroParaPaquetes] = $d_seguroParaPaquetes;

        $query = MySqlHelper::GetQueryFromFile("/Querys/PlanMbes/ActualizarPlanMbes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
