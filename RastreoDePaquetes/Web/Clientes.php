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
    View('ListarClientes',array('o_Clientes'=>$clientes));
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
function IngresoClienteCargaArchivotxt() {
    //$planes=PlanMbesBL::ListarPlanMbes_al();
    include("Vista/Clientes/IngresoClienteCargaArchivotxt.php");
}

function RegistroClientesManual() {
    
    if(!isset($_POST["tf_NombreCliente"],$_POST["tf_ApellidoCliente"],$_POST["tf_CodPais"],
            $_POST["tf_NumCasillero"],$_POST["r_PlanContratado"])){
    
    $planes=PlanMbesBL::ListarPlanMbes_al();
    include("Vista/Clientes/RegistroClientesManual.php");
    }else{
        $Cliente=new Cliente();
        $Cliente->setI_idcliente($_POST["tf_IDCliente"]);
        $Cliente->setI_numcasillero($_POST["tf_NumCasillero"]);
        $Cliente->setS_codigopais($_POST["tf_CodPais"]);
        $Cliente->setS_direccion($_POST["tf_DireccionCliente"]);
        $Cliente->setS_nombre($_POST["tf_NombreCliente"]);
        $Cliente->setS_apellidos($_POST["tf_ApellidoCliente"]);
        $Cliente->setS_email($_POST["tf_EmailCliente"]);
        $Cliente->setS_telefono($_POST["tf_Telefono"]);
        $Cliente->setS_plancontratado($_POST["r_PlanContratado"]);
        $Cliente->setO_codigotienda($_POST["tf_CodTienda"]);
        if(ClientesBL::InsertarCLiente_b($Cliente)){
            echo'<text>Guardado exitosamente</text>';
            include("Vista/Clientes/RegistroClientesManual.php");
        }else{
            echo'<text>Error Al guardar no se cumplio con la peticion</text>';
            include("Vista/Clientes/RegistroClientesManual.php");
        }
        
    }
}
function ActualizacionDatosCliente(){
      $planes=PlanMbesBL::ListarPlanMbes_al();
    $Resultados=ClientesBL::ListarClientes_al();
    
    $clienteSeleccionado = isset($_GET['clienteE']);
    if ($clienteSeleccionado != NULL) {
        $cl1E = new Cliente();
        $cl1E->setS_nombre("Nombre 1");
        $cl1E->setS_codigopais("SJO");
        $cl1E->setI_numcasillero("1234");
    }
    
    $Resultados = array();
    $cl1 = new Cliente();
    $cl1->setS_nombre("Nombre 1");
    $cl1->setS_codigopais("SJO");
    $cl1->setI_numcasillero("1234");
    $Resultados[] = $cl1;
    
    if(count($Resultados)==0){
        echo'<text>Vacio</>';
    }
    include("Vista/Clientes/ActualizacionDatosCliente.php");
}
function LogInCliente(){
    include ("Vista/Clientes/LogInCliente.php");
    
    }
?>
