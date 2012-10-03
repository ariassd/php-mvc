<?php

import("RastreoDePaquetes.AccesoDatos.MySqlHelper");
class ClientesDAO {
    public static function ListarClientes_o() {
        
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,"select * from Clientes");
        
        return $dataResult;
        
    }
    
    public static function DetalleClientes_o($i_idCliente) {
        
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,"select * from Clientes where idCliente = ".$i_idCliente);
        
        return $dataResult;
        
    }
}
?>