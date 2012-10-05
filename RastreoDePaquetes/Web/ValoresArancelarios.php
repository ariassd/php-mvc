<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ValoresArancelariosBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ValoresArancelario
 * Esta es la clase controlador para las GUI's de ValoresArancelario
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ValoresArancelarios
 */

function ListarValoresArancelario() {
    $o_ValoresArancelarios = ValoresArancelariosBL::ListarValoresArancelarios_al();
    include("Vista/ValoresArancelarios/ListarValoresArancelarios.php");
}

function DetalleValoresArancelario() {
    $idValoresArancelario = $_REQUEST["idValoresArancelario"];
    $ValoresArancelario = ValoresArancelariosBL::DetalleValoresArancelario_o($idValoresArancelario);
    
    include("Vista/ValoresArancelarios/DetalleValoresArancelarios.php");
}

function InsertarValoresArancelario() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValoresArancelarios/InsertarValoresArancelarios.php");
}

function InsertarValoresArancelarioConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValoresArancelarios/InsertarValoresArancelarioConfirmacion.php");
}

function ActualizarValoresArancelario() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValoresArancelarios/ActualizarValoresArancelarios.php");
}

function ActualizarValoresArancelarioConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValoresArancelarios/ActualizarValoresArancelarioConfirmacion.php");
}

?>
