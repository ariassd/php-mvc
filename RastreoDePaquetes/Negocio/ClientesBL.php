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
                $a_Cliente = ClientesBL::ConvertirMySQLRowACliente_o($row);
            }
        }
        
        return $a_Cliente;
    }
    
    private static function ConvertirMySQLRowACliente_o($row) {
        $o_Cliente = NULL;
        
        if ($row !=NULL) {
            
            $o_Cliente = new Cliente();
            $o_Cliente->i_idCliente = $row['i_idCliente'];
            $o_Cliente->s_nombreCompleto = $row['s_nombreCompleto'];
            $o_Cliente->s_direccion = $row['s_direccion'];
            $o_Cliente->s_estado = $row['s_estado'];

            
        }
        
        return $o_Cliente;
    }
    
}

?>
