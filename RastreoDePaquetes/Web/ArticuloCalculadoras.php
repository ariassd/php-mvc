<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ArticuloCalculadorasBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para ArticuloCalculadora
 * Esta es la clase controlador para las GUI's de ArticuloCalculadora
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.ArticuloCalculadoras
 */

function ListarArticuloCalculadora() {
    $o_ArticuloCalculadoras = ArticuloCalculadorasBL::ListarArticuloCalculadoras_al();
    include("Vista/ArticuloCalculadoras/ListarArticuloCalculadoras.php");
}

function DetalleArticuloCalculadora() {
    $idArticuloCalculadora = $_REQUEST["idArticuloCalculadora"];
    $ArticuloCalculadora = ArticuloCalculadorasBL::DetalleArticuloCalculadora_o($idArticuloCalculadora);
    
    include("Vista/ArticuloCalculadoras/DetalleArticuloCalculadoras.php");
}

function InsertarArticuloCalculadora() {
    throw new Exception("Debe de implementarse");
    include("Vista/ArticuloCalculadoras/InsertarArticuloCalculadoras.php");
}

function InsertarArticuloCalculadoraConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ArticuloCalculadoras/InsertarArticuloCalculadoraConfirmacion.php");
}

function ActualizarArticuloCalculadora() {
    throw new Exception("Debe de implementarse");
    include("Vista/ArticuloCalculadoras/ActualizarArticuloCalculadoras.php");
}

function ActualizarArticuloCalculadoraConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/ArticuloCalculadoras/ActualizarArticuloCalculadoraConfirmacion.php");
}

?>
