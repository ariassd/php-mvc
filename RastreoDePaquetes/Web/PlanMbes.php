<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.PlanMbesBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para PlanMbe
 * Esta es la clase controlador para las GUI's de PlanMbe
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PlanMbes
 */

function ListarPlanMbe() {
    $o_PlanMbes = PlanMbesBL::ListarPlanMbes_al();
    include("Vista/PlanMbes/ListarPlanMbes.php");
}

function DetallePlanMbe() {
    $idPlanMbe = $_REQUEST["idPlanMbe"];
    $PlanMbe = PlanMbesBL::DetallePlanMbe_o($idPlanMbe);
    
    include("Vista/PlanMbes/DetallePlanMbes.php");
}

function InsertarPlanMbe() {
    throw new Exception("Debe de implementarse");
    include("Vista/PlanMbes/InsertarPlanMbes.php");
}

function InsertarPlanMbeConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/PlanMbes/InsertarPlanMbeConfirmacion.php");
}

function ActualizarPlanMbe() {
    throw new Exception("Debe de implementarse");
    include("Vista/PlanMbes/ActualizarPlanMbes.php");
}

function ActualizarPlanMbeConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/PlanMbes/ActualizarPlanMbeConfirmacion.php");
}

?>
