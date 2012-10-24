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
<center>
    <h1>Mantenimiento de estados para Manifiestos</h1>
    <br/>
    <br/>
    <br/>
    <table class="Lista" border="2">
        <th>ID Estado</th>
        <th>Descripocion</th>
        <th>Estado Actual</th>
        <?php foreach ($Resultados as $valEstado){?>
        <tr>
            <td><?php echo $valEstado->getI_idEstado()?></td>
            <td><?php echo $valEstado->getS_descripcion()?></td>
            <td><?php echo $valEstado->getS_activo()?></td>
            <td><a href="">Modificar</a></td>
        </tr>
        <?php }
        ?>
    </table>
    
    
    
    
    
    
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>