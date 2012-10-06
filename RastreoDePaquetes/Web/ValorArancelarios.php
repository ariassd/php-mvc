<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ValorArancelariosBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ValorArancelario
 * Esta es la clase controlador para las GUI's de ValorArancelario
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ValorArancelarios
 */

function ListarValorArancelario() {
    $o_ValorArancelarios = ValorArancelariosBL::ListarValorArancelarios_al();
    include("Vista/ValorArancelarios/ListarValorArancelarios.php");
}

function DetalleValorArancelario() {
    $idValorArancelario = $_REQUEST["idValorArancelario"];
    $ValorArancelario = ValorArancelariosBL::DetalleValorArancelario_o($idValorArancelario);
    
    include("Vista/ValorArancelarios/DetalleValorArancelarios.php");
}

function InsertarValorArancelario() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValorArancelarios/InsertarValorArancelarios.php");
}

function InsertarValorArancelarioConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValorArancelarios/InsertarValorArancelarioConfirmacion.php");
}

function ActualizarValorArancelario() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValorArancelarios/ActualizarValorArancelarios.php");
}

function ActualizarValorArancelarioConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ValorArancelarios/ActualizarValorArancelarioConfirmacion.php");
}

?>
