<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ValorArancelario
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.ValorArancelariosBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ValorArancelariosDAO");
import("RastreoDePaquetes.Entidades.*");
class ValorArancelariosBL {
    public static function ListarValorArancelarios_al() {
        
        $a_lista = NULL;
        
        $dataResult = ValorArancelariosDAO::ListarValorArancelarios_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_ValorArancelarioEncontrado = ValorArancelariosBL::ConvertirMySQLRowAValorArancelario_o($row);
                $a_lista[] = $o_ValorArancelarioEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetalleValorArancelario_o($i_idValorArancelario) {
        
        $o_ValorArancelario = NULL;
        
        $dataResult = ValorArancelariosDAO::DetalleValorArancelario_o($i_idValorArancelario);
        if ( count($dataResult) >= 1 ) {
            $o_ValorArancelario = new ValorArancelario();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_ValorArancelario = ValorArancelariosBL::ConvertirMySQLRowAValorArancelario_o($row);
            }
        }
        
        return $o_ValorArancelario;
    }

    public static function InsertarValorArancelario_o($i_idValorArancelario) {
        
        $i_total = 0;
        
        $dataResult = ValorArancelariosDAO::InsertarValorArancelario_o($i_idValorArancelario);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarValorArancelario_o($i_idValorArancelario) {
        
        $i_total = 0;
        
        $dataResult = ValorArancelariosDAO::ActualizarValorArancelario_o($i_idValorArancelario);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowAValorArancelario_o($row) {
        $o_ValorArancelario = NULL;
        
        if ($row !=NULL) {
            
            $o_ValorArancelario = new ValorArancelario();
            $o_ValorArancelario->d_valorAdicional = $row['d_valorAdicional'];
            $o_ValorArancelario->d_valorBodegaje = $row['d_valorBodegaje'];
            $o_ValorArancelario->d_valorDesalmacenaje = $row['d_valorDesalmacenaje'];
            $o_ValorArancelario->e_operacionValoradicional = $row['e_operacionValoradicional'];

            
        }
        
        return $o_ValorArancelario;
    }
    
}

?>
