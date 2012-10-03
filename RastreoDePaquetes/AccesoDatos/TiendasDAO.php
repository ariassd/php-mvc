<?php

import("RastreoDePaquetes.AccesoDatos.MySqlHelper");
class TiendasDAO {
    public static function ListarTiendas_o() {
        
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,"SELECT idTienda, Descripcion, Estado FROM Tiendas");
        
        return $dataResult;
        
    }

}
?>