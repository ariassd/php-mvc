<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ClientesBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Cliente
 * Esta es la clase controlador para las GUI's de Cliente
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Clientes
 */

function ListarCliente() {
    $o_Clientes = ClientesBL::ListarClientes_al();
    include("Vista/Clientes/ListarClientes.php");
}

function DetalleCliente() {
    $idCliente = $_REQUEST["idCliente"];
    $Cliente = ClientesBL::DetalleCliente_o($idCliente);
    
    include("Vista/Clientes/DetalleClientes.php");
}

function InsertarCliente() {
    throw new Exception("Debe de implementarse");
    include("Vista/Clientes/InsertarClientes.php");
}

function InsertarClienteConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Clientes/InsertarClienteConfirmacion.php");
}

function ActualizarCliente() {
    throw new Exception("Debe de implementarse");
    include("Vista/Clientes/ActualizarClientes.php");
}

function ActualizarClienteConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Clientes/ActualizarClienteConfirmacion.php");
}

?>
