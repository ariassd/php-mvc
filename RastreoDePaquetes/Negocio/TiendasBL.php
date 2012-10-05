<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Tienda
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.TiendasBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.TiendasDAO");
import("RastreoDePaquetes.Entidades.*");
class TiendasBL {
    public static function ListarTiendas_al() {
        
        $a_lista = NULL;
        
        $dataResult = TiendasDAO::ListarTiendas_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_TiendaEncontrado = TiendasBL::ConvertirMySQLRowATienda_o($row);
                $a_lista[] = $o_TiendaEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetalleTienda_o($i_idTienda) {
        
        $o_Tienda = NULL;
        
        $dataResult = TiendasDAO::DetalleTienda_o($i_idTienda);
        if ( count($dataResult) >= 1 ) {
            $o_Tienda = new Tienda();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_Tienda = TiendasBL::ConvertirMySQLRowATienda_o($row);
            }
        }
        
        return $o_Tienda;
    }

    public static function InsertarTienda_o($i_idTienda) {
        
        $i_total = 0;
        
        $dataResult = TiendasDAO::InsertarTienda_o($i_idTienda);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarTienda_o($i_idTienda) {
        
        $i_total = 0;
        
        $dataResult = TiendasDAO::ActualizarTienda_o($i_idTienda);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowATienda_o($row) {
        $o_Tienda = NULL;
        
        if ($row !=NULL) {
            
            $o_Tienda = new Tienda();
            $o_Tienda->s_codigoTienda = $row['s_codigoTienda'];
            $o_Tienda->s_estadoActivo = $row['s_estadoActivo'];
            $o_Tienda->s_email = $row['s_email'];
            $o_Tienda->s_telefono = $row['s_telefono'];
            $o_Tienda->s_direccion = $row['s_direccion'];

            
        }
        
        return $o_Tienda;
    }
    
}

?>
