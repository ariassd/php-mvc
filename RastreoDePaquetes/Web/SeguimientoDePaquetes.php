<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.TiendasBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Tienda
 * Esta es la clase controlador para las GUI's de Tienda
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Tiendas
 */

function CargaDeListadoDePaquetes() {
    //$o_Tiendas = TiendasBL::ListarTiendas_al();
    $paso = '';
    if (isset($_GET["paso"])) {
        $paso = $_GET["paso"];
    }
    echo $paso;
    View('',array('s_pasoDelProceso'=>$paso));
}

function DetalleTienda() {
    $idTienda = $_REQUEST["idTienda"];
    $Tienda = TiendasBL::DetalleTienda_o($idTienda);
    
    include("Vista/Tiendas/DetalleTiendas.php");
}



?>
