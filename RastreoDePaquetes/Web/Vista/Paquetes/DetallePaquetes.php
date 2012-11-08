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
<center>
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
                Informacion de paquete
            </th>
        </tr>
        <tr>
            <td class="campo">Numero de EBL:</td>
            <td><?php echo $Paquete->I_numeroebl; ?></td>
        </tr>
        <tr>
            <td class="campo">Tracking:</td>
            <td><?php echo $Paquete->S_trackingexterno; ?></td>
        </tr>
        <tr>
            <td class="campo">Codigo de Pais:</td>
            <td><?php echo $Paquete->S_codpais; ?></td>
        </tr>
        <tr>
            <td class="campo">Numero de Casillero:</td>
            <td><?php echo $Paquete->I_numcasillero; ?></td>
        </tr>
        <tr>
            <td class="campo">Descripion:</td>
            <td><?php echo $Paquete->S_descripcion; ?></td>
        </tr>
        <tr>
            <td class="campo">Contenido (Piezas):</td>
            <td><?php echo $Paquete->I_piezaseninterior; ?></td>
        </tr>
        <tr>
            <td class="campo">Piezas:</td>
            <td><?php echo $Paquete->I_piezas; ?></td>
        </tr>
        <tr>
            <td class="campo">Peso:</td>
            <td><?php echo $Paquete->D_peso; ?></td>
        </tr>
        <tr>
            <td class="campo">Largo:</td>
            <td><?php echo $Paquete->D_largo; ?></td>
        </tr>
        <tr>
            <td class="campo">Ancho:</td>
            <td><?php echo $Paquete->D_ancho; ?></td>
        </tr>
        <tr>
            <td class="campo">Espesor:</td>
            <td><?php echo $Paquete->D_espesor; ?></td>
        </tr>
        <tr>
            <td class="campo">Tipo:</td>
            <td><?php echo $Paquete->E_tipo; ?></td>
        </tr>
        <tr>
            <td class="campo">Valor Comercial:</td>
            <td><?php echo $Paquete->D_valorcomercial; ?></td>
        </tr>
        <tr>
            <td class="campo">Fecha de Ingreso en Miami:</td>
            <td><?php echo $Paquete->Dt_fechaingresoamiami; ?></td>
        </tr>
        <tr>
            <td class="campo">Ultima Actualización:</td>
            <td><?php echo $Paquete->Dt_fechaultimoestado; ?></td>
        </tr>
        <tr>
            <td class="campo">Manifiesto:</td>
            <td><?php echo $Paquete->S_manifiesto; ?></td>
        </tr>
        <tr>
            <td class="campo">Estado Actual en el proceso de Importacion:</td>
            <td><?php echo $Paquete->S_estadoimportacion; ?></td>
        </tr>
        <tr>
            <td class="campo">Estado:</td>
            <td><?php echo $Paquete->S_estadoarchivado; ?></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2"></th>
        </tr>
    </table>
</center>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
