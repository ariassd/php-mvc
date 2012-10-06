<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.BannersBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Banner
 * Esta es la clase controlador para las GUI's de Banner
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Banners
 */

function ListarBanner() {
    $o_Banners = BannersBL::ListarBanners_al();
    include("Vista/Banners/ListarBanners.php");
}

function DetalleBanner() {
    $idBanner = $_REQUEST["idBanner"];
    $Banner = BannersBL::DetalleBanner_o($idBanner);
    
    include("Vista/Banners/DetalleBanners.php");
}

function InsertarBanner() {
    throw new Exception("Debe de implementarse");
    include("Vista/Banners/InsertarBanners.php");
}

function InsertarBannerConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Banners/InsertarBannerConfirmacion.php");
}

function ActualizarBanner() {
    throw new Exception("Debe de implementarse");
    include("Vista/Banners/ActualizarBanners.php");
}

function ActualizarBannerConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Banners/ActualizarBannerConfirmacion.php");
}

?>
