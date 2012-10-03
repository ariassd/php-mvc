<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ClientesBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");


/**
 * Controlador de clientes
 *
 * @author Luis Diego Arias Segura
 */

$saludo = "";
$o_clientes = NULL;

function Indice() {
    $o_clientes = ClientesBL::ListarClientes_a();
    include("Vista/Clientes/ListaDeClientes.php");
}

function Saludar_click() {
    echo 'hola';
    $saludo = "Que pasoo amigo!";
}
?>