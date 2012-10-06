<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Cliente
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.ClientesDAO
 */
class ClientesDAO {
    public static function ListarClientes_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Clientes/ListarClientes.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleCliente_o($i_idCliente) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idCliente'] = $i_idCliente;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Clientes/DetalleClientes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarCliente_o($i_idCliente,$s_nombre,$s_apellidos,$s_direccion,$s_telefono,$s_email,$s_planContratado,$s_codigoPais,$i_numCasillero,$o_codigoTienda) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_idCliente] = $i_idCliente;
        $params[@s_nombre] = $s_nombre;
        $params[@s_apellidos] = $s_apellidos;
        $params[@s_direccion] = $s_direccion;
        $params[@s_telefono] = $s_telefono;
        $params[@s_email] = $s_email;
        $params[@s_planContratado] = $s_planContratado;
        $params[@s_codigoPais] = $s_codigoPais;
        $params[@i_numCasillero] = $i_numCasillero;
        $params[@o_codigoTienda] = $o_codigoTienda;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Clientes/InsertarClientes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarCliente_o($i_idCliente,$s_nombre,$s_apellidos,$s_direccion,$s_telefono,$s_email,$s_planContratado,$s_codigoPais,$i_numCasillero,$o_codigoTienda) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_idCliente] = $i_idCliente;
        $params[@s_nombre] = $s_nombre;
        $params[@s_apellidos] = $s_apellidos;
        $params[@s_direccion] = $s_direccion;
        $params[@s_telefono] = $s_telefono;
        $params[@s_email] = $s_email;
        $params[@s_planContratado] = $s_planContratado;
        $params[@s_codigoPais] = $s_codigoPais;
        $params[@i_numCasillero] = $i_numCasillero;
        $params[@o_codigoTienda] = $o_codigoTienda;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Clientes/ActualizarClientes.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
