<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para PreAlerta
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.PreAlertasBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.PreAlertasDAO");
import("RastreoDePaquetes.Entidades.*");
class PreAlertasBL {
    public static function ListarPreAlertas_al() {
        
        $a_lista = NULL;
        
        $dataResult = PreAlertasDAO::ListarPreAlertas_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_PreAlertaEncontrado = PreAlertasBL::ConvertirMySQLRowAPreAlerta_o($row);
                    $a_lista[] = $o_PreAlertaEncontrado;
                }
            }
        }
        return $a_lista;
    }
    
    public static function DetallePreAlerta_o($i_idPreAlerta) {
        
        $o_PreAlerta = NULL;
        
        $dataResult = PreAlertasDAO::DetallePreAlerta_o($i_idPreAlerta);
        if ( count($dataResult) >= 1 ) {
            $o_PreAlerta = new PreAlerta();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_PreAlerta = PreAlertasBL::ConvertirMySQLRowAPreAlerta_o($row);
                }
            }
        }
        
        return $o_PreAlerta;
    }

    public static function InsertarPreAlerta_o($i_idPreAlerta) {
        
        $i_total = 0;
        
        $dataResult = PreAlertasDAO::InsertarPreAlerta_o($i_idPreAlerta);
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

    public static function ActualizarPreAlerta_o($i_idPreAlerta) {
        
        $i_total = 0;
        
        $dataResult = PreAlertasDAO::ActualizarPreAlerta_o($i_idPreAlerta);
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
    
    private static function ConvertirMySQLRowAPreAlerta_o($row) {
        $o_PreAlerta = NULL;
        
        if ($row !=NULL) {
            
            $o_PreAlerta = new PreAlerta();
            $o_PreAlerta->i_id = $row['i_id'];
            $o_PreAlerta->s_descripcion = $row['s_descripcion'];
            $o_PreAlerta->d_valor = $row['d_valor'];
            $o_PreAlerta->s_archivo = $row['s_archivo'];

            
        }
        
        return $o_PreAlerta;
    }
    
}

?>
