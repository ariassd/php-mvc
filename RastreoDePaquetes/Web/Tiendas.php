<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.TiendasBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");


function Listar() {
    $tiendas_al = TiendasBL::ListarTiendas_a();
    include('Vista/Tiendas/ListaTiendas.php');
}

?>
