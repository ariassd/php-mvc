
<?php
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
$g_tituloPagina = 'Error 404';
$g_formAction = "";
ob_start();
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
?>

<h1>Error 404</h1>
No es posible localizar la pagina solicitada. 
<br/>
<!--
<div style="background-color: #efefef;border-style: solid; border-color: #cd0a0a;padding: 15px">
    <?php echo isset($message); ?>
</div>
-->
<br/><br/>
Compruebe que la direccion que digito es correcta, o utilice el menu de navegación para localizar la pagina.
<br/><br/>
Si tiene preguntas no dude en llamar a nuestros centros de atención.

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
