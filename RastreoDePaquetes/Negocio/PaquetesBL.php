<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Paquete
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.PaquetesBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.PaquetesDAO");
import("RastreoDePaquetes.Entidades.*");
class PaquetesBL {
    public static function ListarPaquetes_al() {
        
        $a_lista = NULL;
        
        $dataResult = PaquetesDAO::ListarPaquetes_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_PaqueteEncontrado = PaquetesBL::ConvertirMySQLRowAPaquete_o($row);
                $a_lista[] = $o_PaqueteEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetallePaquete_o($i_idPaquete) {
        
        $o_Paquete = NULL;
        
        $dataResult = PaquetesDAO::DetallePaquete_o($i_idPaquete);
        if ( count($dataResult) >= 1 ) {
            $o_Paquete = new Paquete();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_Paquete = PaquetesBL::ConvertirMySQLRowAPaquete_o($row);
            }
        }
        
        return $o_Paquete;
    }

    public static function InsertarPaquete_o($i_idPaquete) {
        
        $i_total = 0;
        
        $dataResult = PaquetesDAO::InsertarPaquete_o($i_idPaquete);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarPaquete_o($i_idPaquete) {
        
        $i_total = 0;
        
        $dataResult = PaquetesDAO::ActualizarPaquete_o($i_idPaquete);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowAPaquete_o($row) {
        $o_Paquete = NULL;
        
        if ($row !=NULL) {
            
            $o_Paquete = new Paquete();
            $o_Paquete->i_numeroEBL = $row['i_numeroEBL'];
            $o_Paquete->s_trackingExterno = $row['s_trackingExterno'];
            $o_Paquete->s_numeroDeBolsa = $row['s_numeroDeBolsa'];
            $o_Paquete->s_codPais = $row['s_codPais'];
            $o_Paquete->i_numCasillero = $row['i_numCasillero'];
            $o_Paquete->s_descripcion = $row['s_descripcion'];
            $o_Paquete->i_piezasEnInterior = $row['i_piezasEnInterior'];
            $o_Paquete->i_piezas = $row['i_piezas'];
            $o_Paquete->d_peso = $row['d_peso'];
            $o_Paquete->d_largo = $row['d_largo'];
            $o_Paquete->d_ancho = $row['d_ancho'];
            $o_Paquete->d_espesor = $row['d_espesor'];
            $o_Paquete->e_tipo = $row['e_tipo'];
            $o_Paquete->d_valorComercial = $row['d_valorComercial'];
            $o_Paquete->dt_fechaIngresoAMiami = $row['dt_fechaIngresoAMiami'];
            $o_Paquete->dt_fechaUltimoEstado = $row['dt_fechaUltimoEstado'];
            $o_Paquete->s_manifiesto = $row['s_manifiesto'];
            $o_Paquete->s_estadoImportacion = $row['s_estadoImportacion'];
            $o_Paquete->s_estadoArchivado = $row['s_estadoArchivado'];

            
        }
        
        return $o_Paquete;
    }
    
}

?>
