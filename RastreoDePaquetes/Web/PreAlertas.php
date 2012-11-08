<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.PreAlertasBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para PreAlerta
 * Esta es la clase controlador para las GUI's de PreAlerta
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PreAlertas
 */

function ListarPreAlerta() {
    $o_PreAlertas = PreAlertasBL::ListarPreAlertas_al();
    include("Vista/PreAlertas/ListarPreAlertas.php");
}

function DetallePreAlerta() {
    $idPreAlerta = $_REQUEST["idPreAlerta"];
    $PreAlerta = PreAlertasBL::DetallePreAlerta_o($idPreAlerta);
    
    include("Vista/PreAlertas/DetallePreAlertas.php");
}

function InsertarPreAlerta() {
    //throw new Exception("Debe de implementarse");
    include("Vista/PreAlertas/InsertarPreAlertas.php");
}

function InsertarPreAlertaConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/PreAlertas/InsertarPreAlertaConfirmacion.php");
}

function ActualizarPreAlerta() {
    throw new Exception("Debe de implementarse");
    include("Vista/PreAlertas/ActualizarPreAlertas.php");
}

function ActualizarPreAlertaConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/PreAlertas/ActualizarPreAlertaConfirmacion.php");
}
function RegistroPreAlerta() {
    include("Vista/PreAlertas/RegistroPreAlerta.php");
}


?>
