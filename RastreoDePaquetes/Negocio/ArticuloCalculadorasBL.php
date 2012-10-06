<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ArticuloCalculadora
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.ArticuloCalculadorasBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ArticuloCalculadorasDAO");
import("RastreoDePaquetes.Entidades.*");
class ArticuloCalculadorasBL {
    public static function ListarArticuloCalculadoras_al() {
        
        $a_lista = NULL;
        
        $dataResult = ArticuloCalculadorasDAO::ListarArticuloCalculadoras_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_ArticuloCalculadoraEncontrado = ArticuloCalculadorasBL::ConvertirMySQLRowAArticuloCalculadora_o($row);
                    $a_lista[] = $o_ArticuloCalculadoraEncontrado;
                }
            }
        }
        return $a_lista;
    }
    
    public static function DetalleArticuloCalculadora_o($i_idArticuloCalculadora) {
        
        $o_ArticuloCalculadora = NULL;
        
        $dataResult = ArticuloCalculadorasDAO::DetalleArticuloCalculadora_o($i_idArticuloCalculadora);
        if ( count($dataResult) >= 1 ) {
            $o_ArticuloCalculadora = new ArticuloCalculadora();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_ArticuloCalculadora = ArticuloCalculadorasBL::ConvertirMySQLRowAArticuloCalculadora_o($row);
                }
            }
        }
        
        return $o_ArticuloCalculadora;
    }

    public static function InsertarArticuloCalculadora_o($i_idArticuloCalculadora) {
        
        $i_total = 0;
        
        $dataResult = ArticuloCalculadorasDAO::InsertarArticuloCalculadora_o($i_idArticuloCalculadora);
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

    public static function ActualizarArticuloCalculadora_o($i_idArticuloCalculadora) {
        
        $i_total = 0;
        
        $dataResult = ArticuloCalculadorasDAO::ActualizarArticuloCalculadora_o($i_idArticuloCalculadora);
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
    
    private static function ConvertirMySQLRowAArticuloCalculadora_o($row) {
        $o_ArticuloCalculadora = NULL;
        
        if ($row !=NULL) {
            
            $o_ArticuloCalculadora = new ArticuloCalculadora();
            $o_ArticuloCalculadora->d_peso = $row['d_peso'];
            $o_ArticuloCalculadora->d_porcentajeArancelario = $row['d_porcentajeArancelario'];
            $o_ArticuloCalculadora->d_valorComercial = $row['d_valorComercial'];
            $o_ArticuloCalculadora->s_descripcion = $row['s_descripcion'];

            
        }
        
        return $o_ArticuloCalculadora;
    }
    
}

?>
