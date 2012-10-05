<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.PaquetesBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Paquete
 * Esta es la clase controlador para las GUI's de Paquete
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Paquetes
 */

function ListarPaquete() {
    $o_Paquetes = PaquetesBL::ListarPaquetes_al();
    include("Vista/Paquetes/ListarPaquetes.php");
}

function DetallePaquete() {
    $idPaquete = $_REQUEST["idPaquete"];
    $Paquete = PaquetesBL::DetallePaquete_o($idPaquete);
    
    include("Vista/Paquetes/DetallePaquetes.php");
}

function InsertarPaquete() {
    throw new Exception("Debe de implementarse");
    include("Vista/Paquetes/InsertarPaquetes.php");
}

function InsertarPaqueteConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Paquetes/InsertarPaqueteConfirmacion.php");
}

function ActualizarPaquete() {
    throw new Exception("Debe de implementarse");
    include("Vista/Paquetes/ActualizarPaquetes.php");
}

function ActualizarPaqueteConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Paquetes/ActualizarPaqueteConfirmacion.php");
}

?>
