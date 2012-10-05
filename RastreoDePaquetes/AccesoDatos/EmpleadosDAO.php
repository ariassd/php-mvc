<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Empleado
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.EmpleadosDAO
 */
class EmpleadosDAO {
    public static function ListarEmpleados_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Empleados/ListarEmpleados.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleEmpleado_o($i_idEmpleado) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idEmpleado'] = $i_idEmpleado;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Empleados/DetalleEmpleados.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarEmpleado_o($i_id,$s_nombre,$s_nombreDeUsuario,$s_clave,$e_tipo,$o_tiendaALaQuePertenece) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_nombre] = $s_nombre;
        $params[@s_nombreDeUsuario] = $s_nombreDeUsuario;
        $params[@s_clave] = $s_clave;
        $params[@e_tipo] = $e_tipo;
        $params[@o_tiendaALaQuePertenece] = $o_tiendaALaQuePertenece;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Empleados/InsertarEmpleados.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarEmpleado_o($i_id,$s_nombre,$s_nombreDeUsuario,$s_clave,$e_tipo,$o_tiendaALaQuePertenece) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_nombre] = $s_nombre;
        $params[@s_nombreDeUsuario] = $s_nombreDeUsuario;
        $params[@s_clave] = $s_clave;
        $params[@e_tipo] = $e_tipo;
        $params[@o_tiendaALaQuePertenece] = $o_tiendaALaQuePertenece;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Empleados/ActualizarEmpleados.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
