<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ManifiestosBL");
import("RastreoDePaquetes.Negocio.EstadoManifiestoBL");
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
function DetalleManifiestoGuardado() {
    include("Vista/Manifiestos/ManifiestoGuardadoDetalle.php");
}
function ManifiestoCargado() {
    include("Vista/Manifiestos/ManifiestoCargado.php");
}


function InsertarManifiestoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Manifiestos/InsertarManifiestoConfirmacion.php");
}

function ActualizarManifiestos() {
    $o_Manifiestos = array();
    $man1=ManifiestosBL::CrearManifiesto('15/10/2012', '15/10/2012', 'En Vuelo', '.dbf');
    $man2=ManifiestosBL::CrearManifiesto('17/10/2012', '17/10/2012', 'En Vuelo', '.dbf');
    $man3=ManifiestosBL::CrearManifiesto('21/10/2012', '21/10/2012', 'En Vuelo', '.dbf');
    $o_Manifiestos[]=$man1;
    $o_Manifiestos[]=$man2;
    $o_Manifiestos[]=$man3;
    include("Vista/Manifiestos/ActualizarManifiestos.php");
}

function ActualizarManifiestoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Manifiestos/ActualizarManifiestoConfirmacion.php");
}
function MantenimientoDeEstados(){
    $es1= EstadoManifiestoBL::CrearEstado("1", "En Miami", "Activo");
    $es2= EstadoManifiestoBL::CrearEstado("2", "En Aduanas", "Activo");
    $es3= EstadoManifiestoBL::CrearEstado("3", "En Tienda", "Activo");
    $Resultados=array();
    $Resultados[]=$es1;
    $Resultados[]=$es2;
    $Resultados[]=$es3;
    include ("Vista/Manifiestos/MantenimientoDeEstados.php");
    
}
function ModificarEstado(){
    include ("Vista/Manifiestos/ModificarEstado.php");
}
?>
