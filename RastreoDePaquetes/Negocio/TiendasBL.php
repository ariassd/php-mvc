<?php
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");
import("RastreoDePaquetes.AccesoDatos.TiendasDAO");
import("RastreoDePaquetes.Entidades.*");

/**
 * Esta case contiene metodos para manipulacion de las tiendas en base de datos
 *
 * @author diegus
 */
class TiendasBL {
    public static function ListarTiendas_a() {
        
        $lista = NULL;
        
        $dataResult = TiendasDAO::ListarTiendas_o();
        if ( count($dataResult) >= 1 ) {
            $lista = Array();
            while($row = mysql_fetch_array($dataResult))
            {
                $cliente = TiendasBL::ConvertirMySQLRowATienda_o($row);
                $lista[] = $cliente;
            }
        }
        
        return $lista;
        
    }
    
    private static function ConvertirMySQLRowATienda_o($row) {
        $o_resultado = NULL;
        
        if ($row !=NULL) {
            
            $o_resultado = new Tienda();
            $o_resultado->I_idTienda = $row['idTienda'];
            $o_resultado->S_descripcion = $row['Descripcion'];
            $o_resultado->S_estado = $row['Estado'];
            
        }
        
        return $o_resultado;
    }
}

?>
