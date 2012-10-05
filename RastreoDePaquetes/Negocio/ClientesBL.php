<?php
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Cliente
 * Esta clase convierte el data result devuelto por la capa de acceso a datos
 * en un objetos del tipo de la entidad 
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Negocio.ClientesBL
 */
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ClientesDAO");
import("RastreoDePaquetes.Entidades.*");
class ClientesBL {
    public static function ListarClientes_al() {
        
        $a_lista = NULL;
        
        $dataResult = ClientesDAO::ListarClientes_o();
        if ( count($dataResult) >= 1 ) {
            $a_lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_ClienteEncontrado = ClientesBL::ConvertirMySQLRowACliente_o($row);
                $a_lista[] = $o_ClienteEncontrado;
            }
        }
        return $a_lista;
    }
    
    public static function DetalleCliente_o($i_idCliente) {
        
        $o_Cliente = NULL;
        
        $dataResult = ClientesDAO::DetalleCliente_o($i_idCliente);
        if ( count($dataResult) >= 1 ) {
            $o_Cliente = new Cliente();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_Cliente = ClientesBL::ConvertirMySQLRowACliente_o($row);
            }
        }
        
        return $o_Cliente;
    }

    public static function InsertarCliente_o($i_idCliente) {
        
        $i_total = 0;
        
        $dataResult = ClientesDAO::InsertarCliente_o($i_idCliente);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }

    public static function ActualizarCliente_o($i_idCliente) {
        
        $i_total = 0;
        
        $dataResult = ClientesDAO::ActualizarCliente_o($i_idCliente);
        if ( count($dataResult) >= 1 ) {
            while($row = mysql_fetch_array($dataResult))
            {
                $i_total = $row[0];
            }
        }
        
        return $i_total;
    }
    
    private static function ConvertirMySQLRowACliente_o($row) {
        $o_Cliente = NULL;
        
        if ($row !=NULL) {
            
            $o_Cliente = new Cliente();
            $o_Cliente->i_idCliente = $row['i_idCliente'];
            $o_Cliente->s_nombre = $row['s_nombre'];
            $o_Cliente->s_apellidos = $row['s_apellidos'];
            $o_Cliente->s_direccion = $row['s_direccion'];
            $o_Cliente->s_telefono = $row['s_telefono'];
            $o_Cliente->s_email = $row['s_email'];
            $o_Cliente->s_planContratado = $row['s_planContratado'];
            $o_Cliente->s_codigoPais = $row['s_codigoPais'];
            $o_Cliente->s_numCasillero = $row['s_numCasillero'];
            $o_Cliente->o_codTienda = $row['o_codTienda'];

            
        }
        
        return $o_Cliente;
    }
    
}

?>
