<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para PlanMbe
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.PlanMbesBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.PlanMbesDAO");
import("RastreoDePaquetes.Entidades.*");
class PlanMbesBL {
    public static function ListarPlanMbes_al() {
        
        $a_lista = NULL;
        
        $dataResult = PlanMbesDAO::ListarPlanMbes_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_PlanMbeEncontrado = PlanMbesBL::ConvertirMySQLRowAPlanMbe_o($row);
                $a_lista[] = $o_PlanMbeEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetallePlanMbe_o($i_idPlanMbe) {
        
        $o_PlanMbe = NULL;
        
        $dataResult = PlanMbesDAO::DetallePlanMbe_o($i_idPlanMbe);
        if ( count($dataResult) >= 1 ) {
            $o_PlanMbe = new PlanMbe();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_PlanMbe = PlanMbesBL::ConvertirMySQLRowAPlanMbe_o($row);
            }
        }
        
        return $o_PlanMbe;
    }

    public static function InsertarPlanMbe_o($i_idPlanMbe) {
        
        $i_total = 0;
        
        $dataResult = PlanMbesDAO::InsertarPlanMbe_o($i_idPlanMbe);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarPlanMbe_o($i_idPlanMbe) {
        
        $i_total = 0;
        
        $dataResult = PlanMbesDAO::ActualizarPlanMbe_o($i_idPlanMbe);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowAPlanMbe_o($row) {
        $o_PlanMbe = NULL;
        
        if ($row !=NULL) {
            
            $o_PlanMbe = new PlanMbe();
            $o_PlanMbe->i_id = $row['i_id'];
            $o_PlanMbe->s_ipo = $row['s_ipo'];
            $o_PlanMbe->d_seguroParaPaquetes = $row['d_seguroParaPaquetes'];

            
        }
        
        return $o_PlanMbe;
    }
    
}

?>
