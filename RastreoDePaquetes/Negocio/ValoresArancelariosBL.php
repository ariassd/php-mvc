<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ValoresArancelario
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.ValoresArancelariosBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ValoresArancelariosDAO");
import("RastreoDePaquetes.Entidades.*");
class ValoresArancelariosBL {
    public static function ListarValoresArancelarios_al() {
        
        $a_lista = NULL;
        
        $dataResult = ValoresArancelariosDAO::ListarValoresArancelarios_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_ValoresArancelarioEncontrado = ValoresArancelariosBL::ConvertirMySQLRowAValoresArancelario_o($row);
                $a_lista[] = $o_ValoresArancelarioEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetalleValoresArancelario_o($i_idValoresArancelario) {
        
        $o_ValoresArancelario = NULL;
        
        $dataResult = ValoresArancelariosDAO::DetalleValoresArancelario_o($i_idValoresArancelario);
        if ( count($dataResult) >= 1 ) {
            $o_ValoresArancelario = new ValoresArancelario();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_ValoresArancelario = ValoresArancelariosBL::ConvertirMySQLRowAValoresArancelario_o($row);
            }
        }
        
        return $o_ValoresArancelario;
    }

    public static function InsertarValoresArancelario_o($i_idValoresArancelario) {
        
        $i_total = 0;
        
        $dataResult = ValoresArancelariosDAO::InsertarValoresArancelario_o($i_idValoresArancelario);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarValoresArancelario_o($i_idValoresArancelario) {
        
        $i_total = 0;
        
        $dataResult = ValoresArancelariosDAO::ActualizarValoresArancelario_o($i_idValoresArancelario);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowAValoresArancelario_o($row) {
        $o_ValoresArancelario = NULL;
        
        if ($row !=NULL) {
            
            $o_ValoresArancelario = new ValoresArancelario();
            $o_ValoresArancelario->d_valorAdicional = $row['d_valorAdicional'];
            $o_ValoresArancelario->d_valorBodegaje = $row['d_valorBodegaje'];
            $o_ValoresArancelario->d_valorDesalmacenaje = $row['d_valorDesalmacenaje'];
            $o_ValoresArancelario->e_operacionValoradicional = $row['e_operacionValoradicional'];

            
        }
        
        return $o_ValoresArancelario;
    }
    
}

?>
