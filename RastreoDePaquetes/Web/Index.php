<?php
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
    $g_tituloPagina = 'Indice';
    $g_formAction = "";
    ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<br>
<br>
<center>
    <h1>Mail Boxes Ect Online Traking les da la Bienvenida al Sistema</h1>
    <h1>Rastreo de Paquetes Online</h1>
</center>

    <?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
