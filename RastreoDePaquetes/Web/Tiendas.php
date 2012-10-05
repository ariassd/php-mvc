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

function ListarTienda() {
    $o_Tiendas = TiendasBL::ListarTiendas_al();
    include("Vista/Tiendas/ListarTiendas.php");
}

function DetalleTienda() {
    $idTienda = $_REQUEST["idTienda"];
    $Tienda = TiendasBL::DetalleTienda_o($idTienda);
    
    include("Vista/Tiendas/DetalleTiendas.php");
}

function InsertarTienda() {
    throw new Exception("Debe de implementarse");
    include("Vista/Tiendas/InsertarTiendas.php");
}

function InsertarTiendaConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Tiendas/InsertarTiendaConfirmacion.php");
}

function ActualizarTienda() {
    throw new Exception("Debe de implementarse");
    include("Vista/Tiendas/ActualizarTiendas.php");
}

function ActualizarTiendaConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Tiendas/ActualizarTiendaConfirmacion.php");
}

?>
