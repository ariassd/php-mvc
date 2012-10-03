<?php
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
    $g_tituloPagina = 'Indice';
    $g_formAction = "";
    ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

Esta es la pagina de indice

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
