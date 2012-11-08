<?php
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
    $g_tituloPagina = 'Indice';
    $g_formAction = "";
    ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");


function Login() {
    include("Vista/Login/Index.php");  
}
function BienvenidaSistema() {
    
    //recibimos datos del formulario
    /*$usuario = $_POST["tf_usuario"];
    $clave = $_POST["tf_clave"];
     
    $_SESSION['autenticado'] = true;
    $_SESSION['usuario']= $usuario;
    $_SESSION['pclave'] = $clave;
    $_SESSION['nombre'] = $usuario."  "."ZAMBRANA GUTIERREZ";
    
     */
    include("Vista/Index/BienvenidaSistema.php");   
    
     
}
?>