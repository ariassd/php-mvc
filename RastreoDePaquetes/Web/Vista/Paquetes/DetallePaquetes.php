<?php
/**
 * Vista detalle para la entidad de Paquetes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Paquete.DetallePaquetes
 */

    $g_tituloPagina = 'Detalle de Paquetes';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_numeroEBL:</td>
        <td><?php echo $Paquete->I_numeroebl; ?></td>
    </tr>
    <tr>
        <td class="campo">s_trackingExterno:</td>
        <td><?php echo $Paquete->S_trackingexterno; ?></td>
    </tr>
    <tr>
        <td class="campo">s_numeroDeBolsa:</td>
        <td><?php echo $Paquete->S_numerodebolsa; ?></td>
    </tr>
    <tr>
        <td class="campo">s_codPais:</td>
        <td><?php echo $Paquete->S_codpais; ?></td>
    </tr>
    <tr>
        <td class="campo">i_numCasillero:</td>
        <td><?php echo $Paquete->I_numcasillero; ?></td>
    </tr>
    <tr>
        <td class="campo">s_descripcion:</td>
        <td><?php echo $Paquete->S_descripcion; ?></td>
    </tr>
    <tr>
        <td class="campo">i_piezasEnInterior:</td>
        <td><?php echo $Paquete->I_piezaseninterior; ?></td>
    </tr>
    <tr>
        <td class="campo">i_piezas:</td>
        <td><?php echo $Paquete->I_piezas; ?></td>
    </tr>
    <tr>
        <td class="campo">d_peso:</td>
        <td><?php echo $Paquete->D_peso; ?></td>
    </tr>
    <tr>
        <td class="campo">d_largo:</td>
        <td><?php echo $Paquete->D_largo; ?></td>
    </tr>
    <tr>
        <td class="campo">d_ancho:</td>
        <td><?php echo $Paquete->D_ancho; ?></td>
    </tr>
    <tr>
        <td class="campo">d_espesor:</td>
        <td><?php echo $Paquete->D_espesor; ?></td>
    </tr>
    <tr>
        <td class="campo">e_tipo:</td>
        <td><?php echo $Paquete->E_tipo; ?></td>
    </tr>
    <tr>
        <td class="campo">d_valorComercial:</td>
        <td><?php echo $Paquete->D_valorcomercial; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaIngresoAMiami:</td>
        <td><?php echo $Paquete->Dt_fechaingresoamiami; ?></td>
    </tr>
    <tr>
        <td class="campo">dt_fechaUltimoEstado:</td>
        <td><?php echo $Paquete->Dt_fechaultimoestado; ?></td>
    </tr>
    <tr>
        <td class="campo">s_manifiesto:</td>
        <td><?php echo $Paquete->S_manifiesto; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estadoImportacion:</td>
        <td><?php echo $Paquete->S_estadoimportacion; ?></td>
    </tr>
    <tr>
        <td class="campo">s_estadoArchivado:</td>
        <td><?php echo $Paquete->S_estadoarchivado; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
