<?php
/**
 * Vista listado para la entidad de Paquetes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Paquete.ListarPaquetes
 */

    $g_tituloPagina = 'Lista de Paquetes';
    $g_formAction = "";
    ob_start();
?>

	<center><h1>Lista de Paquetes</h1>
        <table class="Lista" border="2">
            <thead>
                <tr>
                    <th>Numero de EBL</th>
                    <th>Tracking</th>
                    <th>Descripcion</th>
                    <th>Peso</th>
                    <th>Valor Comercial</th>
                    <th>Fecha de Ingreso a Miami</th>
                    <th>Estado Actual</th>
                    <th>Archivar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Paquetes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_numeroebl; ?></td>
                    <td><?php echo $value->S_trackingexterno; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><?php echo $value->D_peso; ?></td>
                    <td><?php echo $value->D_valorcomercial; ?></td>
                    <td><?php echo $value->Dt_fechaingresoamiami; ?></td>
                    <td><?php echo $value->S_estadoimportacion; ?></td>
                    <td><input type="checkBox" name="cb_ArchivarPaquete"/></td>
                    <td><a href="?vista=DetallePaquete&idPaquete=<?php echo $value->I_idPaquete; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
            <br/>
            <br/>
            <input type="submit" name="b_ArchivarPaquetes" value="Archivar Paquetes seleccionados"/>
        </center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
