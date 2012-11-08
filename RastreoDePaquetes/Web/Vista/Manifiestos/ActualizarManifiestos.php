<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */

    $g_tituloPagina = 'Actualizar Manifiestos';
    $g_formAction = "";
    ob_start();
?>
<center>
<table class="Lista">
        
        <tr>
            <td class="nombreTabla" colspan="6">
                MANIFIESTOS CARGADOS
            </td>
        </tr>
        <tr align="center">
            <th>ID MANIFIESTO</th>
            <th>FECHA DE REGISTRO</th>
            <th>ESTADO</th>
            <th>FORMATO</th>
            <th colspan ="2">OPERACIONES</th>
        </tr>
        <?php foreach ($o_Manifiestos as $value) { ?>
        <tr align="center">
           <td><?php echo $value->S_idmanifiesto; ?></td>
           <td><?php echo $value->Dt_fecharegistro; ?></td>
           <td><?php echo $value->S_estadodelmanifiesto; ?></td>
           <td><?php echo $value->S_formato; ?></td>
           <td><a href="?vista=DetalleManifiesto&idManifiesto=<?php echo $value->I_idManifiesto; ?>">Ver detalle</a></td>
           <td><a href="?vista=ModificacionDeEstados&idManifiesto=<?php echo $value->S_idmanifiesto; ?>">Cambiar estado</a></td>
        </tr>
        <?php } ?>
        
    </table>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
