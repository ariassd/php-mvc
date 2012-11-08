<?php
$g_tituloPagina = 'Bienvenido';
$g_formAction = "";
ob_start();
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
