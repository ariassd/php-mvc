<?php
/**
 * Vista detalle para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.DetalleManifiestos
 */

    $g_tituloPagina = 'Detalle del Manifiestos';
    $g_formAction = "Manifiestos.php?vista=ModificarEstado";
    ob_start();
?>

<center>
<table class="vistaDetalle">
        <tr>
            <th align="center" colspan='15' class="nombreFormulario">
                DETALLE DEL MANIFIESTO
            </th>
	</tr>
       <tr>
           <td>ID:</td>   
           <td><?php echo $Manifiesto->S_idmanifiesto; ?></td>
        </tr>
        <tr>
            <td>FECHA DE REGISTRO:</td>
            <td><?php echo $Manifiesto->Dt_fecharegistro; ?></td>
        </tr>
        <tr>
            <td>ESTADO DEL MANIFIESTO:</td>
            <td><?php echo $Manifiesto->S_estadodelmanifiesto; ?></td>
        </tr>
        <tr>
            <td>FORMATO DEL MANIFIESTO:</td>
            <td><?php echo $Manifiesto->S_formato; ?></td>
        </tr>
        <tr>
        <th class="lineaFin" colspan="4"></th>
     </tr>
</table>
<br/>
<br/>
<input type="submit" name="b_detalleManifiesto" value="Regresar"/> 
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
