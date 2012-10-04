<?php
import("RastreoDePaquetes.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Acceso a datos para Tienda
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.TiendasDAO
 */
class TiendasDAO {
    public static function ListarTiendas_o() {
	    $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/ListarTiendas.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleTienda_o($i_idTienda) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idTienda'] = $i_idTienda;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Tiendas/DetalleTiendas.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }
}
?>
