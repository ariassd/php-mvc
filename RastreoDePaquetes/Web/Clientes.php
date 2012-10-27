<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("RastreoDePaquetes.Negocio.ClientesBL");
import("RastreoDePaquetes.Negocio.PlanMbesBL");
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
    $clientes = array();
    $cl1 = new Cliente();
    $cl1->setS_nombre("Nombre 1");
    $clientes[] = $cl1;
    View('TablaClientes', array('o_Clientes' => $clientes));
}

function DetalleClientes() {
    $Cliente = ClientesBL::CrearClienteTEMP('1-111-111', 'Pedro', 'Salas Perez', 'Heredia', '123456789', 'sdfslkjhsdg@sds', 'A', 'SJO', '1234', '61');
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
    //throw new Exception("Debe de implementarse");
    include("Vista/Clientes/ActualizarClientes.php");
}

function IngresoClienteCargaArchivotxt() {
    //$planes=PlanMbesBL::ListarPlanMbes_al();
    include("Vista/Clientes/IngresoClienteCargaArchivotxt.php");
}

function RegistroClientesManual() {

    if (!isset($_POST["tf_NombreCliente"], $_POST["tf_ApellidoCliente"], $_POST["tf_CodPais"], $_POST["tf_NumCasillero"], $_POST["r_PlanContratado"])) {

        $planes = PlanMbesBL::ListarPlanMbes_al();
        include("Vista/Clientes/RegistroClientesManual.php");
    }
}

function ActualizacionDatosCliente() {

    $actualizo = false;
    if (isset($_POST['tf_NombreCliente'])) {
        $actualizo = true;
    }

    $planes = PlanMbesBL::ListarPlanMbes_al();
    $Resultados = ClientesBL::ListarClientes_al();

    include("Vista/Clientes/ActualizacionDatosCliente.php");
}

function LogInCliente() {
    include ("Vista/Clientes/LogInCliente.php");
}

function BuscarClientes() {
    include ("Vista/Clientes/BuscarClientes.php");
}

function TablaClientes() {
    $Resultados = array();
    $CL1 = ClientesBL::CrearClienteTEMP('1-111-111', 'Pedro', 'Salas Perez', 'Heredia', '123456789', 'sdfslkjhsdg@sds', 'A', 'SJO', '1234', '61');
    $CL2 = ClientesBL::CrearClienteTEMP('2-222-012', 'Maria', 'Mora Perez', 'San Jose', '123456789', 'sdfslkjhsdg@sds', 'A', 'SJO', '5678', '61');
    $Resultados[] = $CL1;
    $Resultados[] = $CL2;
    include ("Vista/Clientes/TablaClientes.php");
}

function RegistroManualClientesConf() {
    include ("Vista/Clientes/RegistroManualClientesConf.php");
}

function ClienteActualizaInformacion() {
    include ("Vista/Clientes/ClienteActualizaInformacion.php");
}

function CalculadoraImpuestos() {
    include ("Vista/Clientes/CalculadoraImpuestos.php");
}

function DetallePagoImpuestos() {
    include ("Vista/Clientes/DetallePagoImpuestos.php");
}

function ClientesCargados() {
    include ("Vista/Clientes/ClientesCargados.php");
}

function ClientesGuardadoDetalle() {
    include ("Vista/Clientes/ClientesGuardadoDetalle.php");
}

?>
