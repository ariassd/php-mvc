<?php
/**
 * Vista para la descarga de archivos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Idiomas.ListarIdiomas
 */

    $g_tituloPagina = 'Descargar Archivo de idioma';
    $g_formAction = "";
    ob_start();
    
?>

<center>
    <table class="Lista">
        <tr>
            <td colspan='9' class="nombreTabla">Idiomas disponibles para el sistema</td>
        </tr>
        <tr align="center">
            <th>Numero</th>
            <th>Nombre</th>
            <th></th>
        </tr>
        <?php $i = 0; foreach ($archivos as $value) {?>
        <tr>
            <td align='center'><?php echo $i; ?></td>
            <td><?php echo $value; ?></td>
            <td><a href="Descarga.php?tipo=lang&id=<?php echo $value; ?>">Descargar</a></td>
        </tr>
        <?php 
        $i++;
        } ?>
        <tr>
            <td colspan='9'></td>
        </tr>  
        <tr>
            <td class="lineaFin" colspan="9">

            </td>
        </tr>
    </table>
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Vista/Idiomas/Master.php";
?>