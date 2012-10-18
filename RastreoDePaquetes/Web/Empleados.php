<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.EmpleadosBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Clase de capa de negocio para Empleado
 * Esta es la clase controlador para las GUI's de Empleado
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Empleados
 */

function ListarEmpleado() {
    $o_Empleados = EmpleadosBL::ListarEmpleados_al();
    include("Vista/Empleados/ListarEmpleados.php");
}

function DetalleEmpleado() {
    $idEmpleado = $_REQUEST["idEmpleado"];
    $Empleado = EmpleadosBL::DetalleEmpleado_o($idEmpleado);
    
    include("Vista/Empleados/DetalleEmpleados.php");
}

function InsertarEmpleado() {
    include("Vista/Empleados/RegistroEmpleados.php");
}

function InsertarEmpleadoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Empleados/InsertarEmpleadoConfirmacion.php");
}

function ActualizarEmpleado() {
    include("Vista/Empleados/ActualizarEmpleados.php");
}
function EliminarEmpleado() {
    include("Vista/Empleados/EliminarEmpleados.php");
}

function BuscarEmpleado() {
    include("Vista/Empleados/BuscarEmpleados.php");
}

function ActualizarEmpleadoConfirmacion() {
    throw new Exception("Debe de implementarse");
    include("Vista/Empleados/ActualizarEmpleadoConfirmacion.php");
}

?>
