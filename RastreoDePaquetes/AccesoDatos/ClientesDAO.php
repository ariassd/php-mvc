<?php
import("RastreoDePaquetes.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
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
}
?>
