<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ManifiestosBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Manifiesto
 * Esta es la clase controlador para las GUI's de Manifiesto
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiestos
 */

function ListarManifiesto() {
    $o_Manifiestos = ManifiestosBL::ListarManifiestos_al();
    include("Vista/Manifiestos/ListarManifiestos.php");
}

function DetalleManifiesto() {
    $idManifiesto = $_REQUEST["idManifiesto"];
    $Manifiesto = ManifiestosBL::DetalleManifiesto_o($idManifiesto);
    
    include("Vista/Manifiestos/DetalleManifiestos.php");
}

function CargarManifiesto() {
    
    include("Vista/Manifiestos/CargarManifiesto.php");
}

function InsertarManifiestoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Manifiestos/InsertarManifiestoConfirmacion.php");
}

function ActualizarManifiestos() {
    $o_Manifiestos = ManifiestosBL::ListarManifiestos_al();
    include("Vista/Manifiestos/ActualizarManifiestos.php");
}

function ActualizarManifiestoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Manifiestos/ActualizarManifiestoConfirmacion.php");
}

?>
