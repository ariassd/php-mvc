<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */

    $g_tituloPagina = 'Mantenimiento de Estados';
    $g_formAction = "";
    ob_start();
?>



<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>