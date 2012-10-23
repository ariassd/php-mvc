<?php
/**
 * Vista detalle para la entidad de Tiendas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Tienda.DetalleTiendas
 */

    $g_tituloPagina = 'Carga Listado Paquetes';
    $g_formAction = "";
    ob_start();
?>

<h2>Carga del listado de paquetes</h2>

<?php if (isset($s_pasoDelProceso) && $s_pasoDelProceso == '') {?>
Seleccione el archivo que desea cargar:
<br/>
<input type="file" name="datafile" size="40">
<?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "SeguimientoDePaquetes.php?ayuda=Carga") ?>
<div class="navegacion">
    <a href="?paso=lista">Siguiente</a>
</div>

<?php } ?>

<?php if (isset($s_pasoDelProceso) && $s_pasoDelProceso == 'lista') {?>
Lista de paquetes que se van a cargar:
Seleccione los paquetes que van a ser cargados al sistema
<br/>
<img src="<?php echo path('Vista/SeguimientoDePaquetes/lista.gif');?>" />
<div class="navegacion">
    <a href="?paso=">Regresar</a>
    <a href="?paso=guardar">Siguiente</a>
</div>
<?php } ?>

<?php if ($s_pasoDelProceso == 'guardar') {?>
Confirmacion:
<div style="color:red;font-size: 18px">La lista de paquetes fue guardada con éxito</div>
<br/>
<img src="<?php echo path('Vista/SeguimientoDePaquetes/lista.gif');?>" />
<div class="navegacion">
    <a href="index.php">Terminar</a>
</div>
<?php } ?>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
