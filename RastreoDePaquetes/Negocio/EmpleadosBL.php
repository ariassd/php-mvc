<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Empleado
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.EmpleadosBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.EmpleadosDAO");
import("RastreoDePaquetes.Entidades.*");
class EmpleadosBL {
    public static function ListarEmpleados_al() {
        
        $a_lista = NULL;
        
        $dataResult = EmpleadosDAO::ListarEmpleados_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_EmpleadoEncontrado = EmpleadosBL::ConvertirMySQLRowAEmpleado_o($row);
                $a_lista[] = $o_EmpleadoEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetalleEmpleado_o($i_idEmpleado) {
        
        $o_Empleado = NULL;
        
        $dataResult = EmpleadosDAO::DetalleEmpleado_o($i_idEmpleado);
        if ( count($dataResult) >= 1 ) {
            $o_Empleado = new Empleado();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_Empleado = EmpleadosBL::ConvertirMySQLRowAEmpleado_o($row);
            }
        }
        
        return $o_Empleado;
    }

    public static function InsertarEmpleado_o($i_idEmpleado) {
        
        $i_total = 0;
        
        $dataResult = EmpleadosDAO::InsertarEmpleado_o($i_idEmpleado);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarEmpleado_o($i_idEmpleado) {
        
        $i_total = 0;
        
        $dataResult = EmpleadosDAO::ActualizarEmpleado_o($i_idEmpleado);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowAEmpleado_o($row) {
        $o_Empleado = NULL;
        
        if ($row !=NULL) {
            
            $o_Empleado = new Empleado();
            $o_Empleado->i_id = $row['i_id'];
            $o_Empleado->s_nombre = $row['s_nombre'];
            $o_Empleado->s_nombreDeUsuario = $row['s_nombreDeUsuario'];
            $o_Empleado->s_clave = $row['s_clave'];
            $o_Empleado->e_tipo = $row['e_tipo'];
            $o_Empleado->o_tiendaALaQuePertenece = $row['o_tiendaALaQuePertenece'];

            
        }
        
        return $o_Empleado;
    }
    
}

?>
