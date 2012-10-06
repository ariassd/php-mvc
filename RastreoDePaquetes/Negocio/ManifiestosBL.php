<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Manifiesto
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.ManifiestosBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ManifiestosDAO");
import("RastreoDePaquetes.Entidades.*");
class ManifiestosBL {
    public static function ListarManifiestos_al() {
        
        $a_lista = NULL;
        
        $dataResult = ManifiestosDAO::ListarManifiestos_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_ManifiestoEncontrado = ManifiestosBL::ConvertirMySQLRowAManifiesto_o($row);
                    $a_lista[] = $o_ManifiestoEncontrado;
                }
            }
        }
        return $a_lista;
    }
    
    public static function DetalleManifiesto_o($i_idManifiesto) {
        
        $o_Manifiesto = NULL;
        
        $dataResult = ManifiestosDAO::DetalleManifiesto_o($i_idManifiesto);
        if ( count($dataResult) >= 1 ) {
            $o_Manifiesto = new Manifiesto();
            if ($dataResult != NULL) {
                while($row = mysql_fetch_array($dataResult))
                {
                    $o_Manifiesto = ManifiestosBL::ConvertirMySQLRowAManifiesto_o($row);
                }
            }
        }
        
        return $o_Manifiesto;
    }

    public static function InsertarManifiesto_o($i_idManifiesto) {
        
        $i_total = 0;
        
        $dataResult = ManifiestosDAO::InsertarManifiesto_o($i_idManifiesto);
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

    public static function ActualizarManifiesto_o($i_idManifiesto) {
        
        $i_total = 0;
        
        $dataResult = ManifiestosDAO::ActualizarManifiesto_o($i_idManifiesto);
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
    
    private static function ConvertirMySQLRowAManifiesto_o($row) {
        $o_Manifiesto = NULL;
        
        if ($row !=NULL) {
            
            $o_Manifiesto = new Manifiesto();
            $o_Manifiesto->s_idManifiesto = $row['s_idManifiesto'];
            $o_Manifiesto->dt_fechaRegistro = $row['dt_fechaRegistro'];
            $o_Manifiesto->s_estadoDelManifiesto = $row['s_estadoDelManifiesto'];
            $o_Manifiesto->s_Formato = $row['s_Formato'];

            
        }
        
        return $o_Manifiesto;
    }
    
}

?>
