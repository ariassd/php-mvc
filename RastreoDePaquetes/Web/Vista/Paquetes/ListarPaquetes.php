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

	<h1>Lista de Paquetes</h1>
        <table>
            <thead>
                <tr>
                    <th>i_numeroEBL</th>
                    <th>s_trackingExterno</th>
                    <th>s_numeroDeBolsa</th>
                    <th>s_codPais</th>
                    <th>i_numCasillero</th>
                    <th>s_descripcion</th>
                    <th>i_piezasEnInterior</th>
                    <th>i_piezas</th>
                    <th>d_peso</th>
                    <th>d_largo</th>
                    <th>d_ancho</th>
                    <th>d_espesor</th>
                    <th>e_tipo</th>
                    <th>d_valorComercial</th>
                    <th>dt_fechaIngresoAMiami</th>
                    <th>dt_fechaUltimoEstado</th>
                    <th>s_manifiesto</th>
                    <th>s_estadoImportacion</th>
                    <th>s_estadoArchivado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Paquetes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_numeroebl; ?></td>
                    <td><?php echo $value->S_trackingexterno; ?></td>
                    <td><?php echo $value->S_numerodebolsa; ?></td>
                    <td><?php echo $value->S_codpais; ?></td>
                    <td><?php echo $value->I_numcasillero; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><?php echo $value->I_piezaseninterior; ?></td>
                    <td><?php echo $value->I_piezas; ?></td>
                    <td><?php echo $value->D_peso; ?></td>
                    <td><?php echo $value->D_largo; ?></td>
                    <td><?php echo $value->D_ancho; ?></td>
                    <td><?php echo $value->D_espesor; ?></td>
                    <td><?php echo $value->E_tipo; ?></td>
                    <td><?php echo $value->D_valorcomercial; ?></td>
                    <td><?php echo $value->Dt_fechaingresoamiami; ?></td>
                    <td><?php echo $value->Dt_fechaultimoestado; ?></td>
                    <td><?php echo $value->S_manifiesto; ?></td>
                    <td><?php echo $value->S_estadoimportacion; ?></td>
                    <td><?php echo $value->S_estadoarchivado; ?></td>
                    <td><a href="?vista=DetallePaquete&idPaquete=<?php echo $value->I_idPaquete; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
