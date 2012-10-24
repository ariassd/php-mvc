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

function ListarPaquetes() {
    $o_Paquetes = PaquetesBL::ListarPaquetes_al();
    include("Vista/Paquetes/ListarPaquetes.php");
}

function DetallePaquetes() {
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

function ActualizaEstado() {
    include("Vista/Paquetes/ActualizaEstado.php");
}

function ActualizarPaqueteConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Paquetes/ActualizarPaqueteConfirmacion.php");
}
function ConsultaPaquetes() {
    include("Vista/Paquetes/ConsultaPaquetes.php");
}
function Calendar(){
    include ("Vista/Paquetes/Calendar.php");
}
function ConsultaPaquetesCliente() {
    include ("Vista/Paquetes/ConsultaPaquetesCliente.php");
}
?>
