<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Banner
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.BannersBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.BannersDAO");
import("RastreoDePaquetes.Entidades.*");
class BannersBL {
    public static function ListarBanners_al() {
        
        $a_lista = NULL;
        
        $dataResult = BannersDAO::ListarBanners_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_BannerEncontrado = BannersBL::ConvertirMySQLRowABanner_o($row);
                    $a_lista[] = $o_BannerEncontrado;
                }
            }
        }
        return $a_lista;
    }
    
    public static function DetalleBanner_o($i_idBanner) {
        
        $o_Banner = NULL;
        
        $dataResult = BannersDAO::DetalleBanner_o($i_idBanner);
        if ( count($dataResult) >= 1 ) {
            $o_Banner = new Banner();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_Banner = BannersBL::ConvertirMySQLRowABanner_o($row);
                }
            }
        }
        
        return $o_Banner;
    }

    public static function InsertarBanner_o($i_idBanner) {
        
        $i_total = 0;
        
        $dataResult = BannersDAO::InsertarBanner_o($i_idBanner);
        if ( count($dataResult) >= 1 ) {
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $i_total = $row[0];
                }
            }
        }
        
        return $i_total;
    }

    public static function ActualizarBanner_o($i_idBanner) {
        
        $i_total = 0;
        
        $dataResult = BannersDAO::ActualizarBanner_o($i_idBanner);
        if ( count($dataResult) >= 1 ) {
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $i_total = $row[0];
                }
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowABanner_o($row) {
        $o_Banner = NULL;
        
        if ($row !=NULL) {
            
            $o_Banner = new Banner();
            $o_Banner->i_id = $row['i_id'];
            $o_Banner->s_descripcion = $row['s_descripcion'];
            $o_Banner->dt_fechaIngreso = $row['dt_fechaIngreso'];
            $o_Banner->dt_fechaInicioPublicacion = $row['dt_fechaInicioPublicacion'];
            $o_Banner->dt_fechaFinPublicacion = $row['dt_fechaFinPublicacion'];
            $o_Banner->s_textoPublicitario = $row['s_textoPublicitario'];
            $o_Banner->s_linkDeVisita = $row['s_linkDeVisita'];
            $o_Banner->s_posicion = $row['s_posicion'];
            $o_Banner->s_estadoDePublicacion = $row['s_estadoDePublicacion'];

            
        }
        
        return $o_Banner;
    }
    
}

?>
