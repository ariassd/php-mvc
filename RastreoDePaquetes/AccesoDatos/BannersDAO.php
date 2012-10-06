<?php
import("MbeFramework.AccesoDatos.MySqlHelper");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 * El codigo de esta clase debe de ser revisado para asegurar su correcto funcionamiento
 */
/**
 * Acceso a datos para Banner
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.AccesoDatos.BannersDAO
 */
class BannersDAO {
    public static function ListarBanners_o() {
	$cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $query = MySqlHelper::GetQueryFromFile("/Querys/Banners/ListarBanners.sql", NULL);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
        
    }
    
    public static function DetalleBanner_o($i_idBanner) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params['@idBanner'] = $i_idBanner;
        $query = MySqlHelper::GetQueryFromFile("/Querys/Banners/DetalleBanners.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function InsertarBanner_o($i_id,$s_descripcion,$dt_fechaIngreso,$dt_fechaInicioPublicacion,$dt_fechaFinPublicacion,$s_textoPublicitario,$s_linkDeVisita,$s_posicion,$s_estadoDePublicacion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_descripcion] = $s_descripcion;
        $params[@dt_fechaIngreso] = $dt_fechaIngreso;
        $params[@dt_fechaInicioPublicacion] = $dt_fechaInicioPublicacion;
        $params[@dt_fechaFinPublicacion] = $dt_fechaFinPublicacion;
        $params[@s_textoPublicitario] = $s_textoPublicitario;
        $params[@s_linkDeVisita] = $s_linkDeVisita;
        $params[@s_posicion] = $s_posicion;
        $params[@s_estadoDePublicacion] = $s_estadoDePublicacion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Banners/InsertarBanners.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

    public static function ActualizarBanner_o($i_id,$s_descripcion,$dt_fechaIngreso,$dt_fechaInicioPublicacion,$dt_fechaFinPublicacion,$s_textoPublicitario,$s_linkDeVisita,$s_posicion,$s_estadoDePublicacion) {
        $cnn_MYSQL = ConfigurationSettings::GetConnectionString("CnxMySQL-RW");
        $params = array();
        $params[@i_id] = $i_id;
        $params[@s_descripcion] = $s_descripcion;
        $params[@dt_fechaIngreso] = $dt_fechaIngreso;
        $params[@dt_fechaInicioPublicacion] = $dt_fechaInicioPublicacion;
        $params[@dt_fechaFinPublicacion] = $dt_fechaFinPublicacion;
        $params[@s_textoPublicitario] = $s_textoPublicitario;
        $params[@s_linkDeVisita] = $s_linkDeVisita;
        $params[@s_posicion] = $s_posicion;
        $params[@s_estadoDePublicacion] = $s_estadoDePublicacion;

        $query = MySqlHelper::GetQueryFromFile("/Querys/Banners/ActualizarBanners.sql", $params);
        $dataResult = MySqlHelper::ExecuteQuery($cnn_MYSQL,$query);
        return $dataResult;
    }

}
?>
