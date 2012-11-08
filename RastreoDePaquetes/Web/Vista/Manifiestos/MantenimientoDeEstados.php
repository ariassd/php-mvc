<?php 
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */
$g_tituloPagina = 'Mantenimiento de Estados';
$g_formAction = "Manifiestos.php?vista=AgregarEstados";
ob_start();
?>
<br/>
<center>
    
    <table class="Lista" >
        <tr>
            <th class="nombreTabla" colspan="5">Estados disponibles para el seguimiento de paquetes</th>
        </tr>
        <tr>
            <th>ID Estado</th>
            <th>Descripocion</th>
            <th>Estado Actual</th>
            <th colspan="2">Acciones</th>
        </tr>
        
        <?php foreach ($Resultados as $valEstado) { ?>
            <tr>
                <td><?php echo $valEstado->getI_idEstado() ?></td>
                <td><?php echo $valEstado->getS_descripcion() ?></td>
                <td><?php echo $valEstado->getS_activo() ?></td>
                <td><a href="Manifiestos.php?vista=ModificacionDeEstados">Modificar</a></td>
                <td><a href="Manifiestos.php?vista=DesactivarEstados">Desactivar</a></td>
            </tr>

        <?php }
        ?>
            <tr>
                <th class="lineaFin" colspan="5"></th>
            </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_agregarEstado" value="Agregar Nuevo estado"/>




</center>

<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>