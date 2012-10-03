<?php
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.ClientesDAO");
import("RastreoDePaquetes.Entidades.*");
class ClientesBL {
    public static function ListarClientes_a() {
        
        $a_listaClientes = NULL;
        
        $dataResult = ClientesDAO::ListarClientes_o();
        if ( count($dataResult) >= 1 ) {
            $a_listaClientes = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $o_clienteEncontrado = ClientesBL::ConvertirMySQLRowACliente_o($row);
                $a_listaClientes[] = $o_clienteEncontrado;
            }
        }
        return $a_listaClientes;
    }
    
    private static function ConvertirMySQLRowACliente_o($row) {
        $o_clienteEncontrado = NULL;
        
        if ($row !=NULL) {
            
            $o_clienteEncontrado = new Cliente();
            $o_clienteEncontrado->I_idCliente = $row['idCliente'];
            $o_clienteEncontrado->S_nombreCompleto = $row['nombreCompleto'];
            $o_clienteEncontrado->S_direccion = $row['direccion'];
            $o_clienteEncontrado->S_estado = $row['estado'];
            
        }
        
        return $o_clienteEncontrado;
    }
    
}

?>