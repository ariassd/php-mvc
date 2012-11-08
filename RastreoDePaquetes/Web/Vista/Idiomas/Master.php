<?php
/**
 * Vista Master para la gestion de Idiomas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Idiomas.Master
 */
 ob_start(); 
 $menuVertical = array();
 $menuVertical['Descarga de idiomas'] = 'Idiomas.php?vista=ListarIdiomas';
 $menuVertical['Carga de idiomas'] = 'Idiomas.php?vista=CargarIdioma';
?>
<center>
    <?php echo $g_contenido; ?>
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>