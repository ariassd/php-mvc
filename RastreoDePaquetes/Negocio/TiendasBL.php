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
                $a_Tienda = TiendasBL::ConvertirMySQLRowATienda_o($row);
            }
        }
        
        return $a_Tienda;
    }
    
    private static function ConvertirMySQLRowATienda_o($row) {
        $o_Tienda = NULL;
        
        if ($row !=NULL) {
            
            $o_Tienda = new Tienda();
            $o_Tienda->i_idTienda = $row['i_idTienda'];
            $o_Tienda->s_descripcion = $row['s_descripcion'];
            $o_Tienda->s_estado = $row['s_estado'];

            
        }
        
        return $o_Tienda;
    }
    
}

?>
