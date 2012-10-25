<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Consulta de Paquetes de Clientes';
    $g_formAction = "Paquetes.php?vista=ListarPaquetes";
    ob_start();
?>
<center>
    <br/>
    <h1>Consulta de Paquetes del Cliente</h1>
    <br/>
    <br/>
    <br/>
    
        <table>
            <tr>
                <td align="right"><h3>Codigo de pais Cliente</h3></td>
                <td><input type="text" name="tf_ConsPaqCodPais" size="6"/></td>
            </tr>
            <tr>
                <td align="right"><h3>Numerdo de Casillero Cliente</h3></td>
                <td><input type="text" name="tf_ConsPaqNumCAsillero" size="6"/></td>
            </tr>
            <tr>
                <td align="right"><h3>Lista de Paquetes</h3></td>
                <td><input type="radio" name="r_tipoLista" value="1"/>En Transito
                    <input type="radio" name="r_tipoLista" value="0"/>Archivados</td>
            </tr>
            <tr>
                <td align="right"><h3>Desde</h3></td>
                <td><input type="text" class="datepicker" name="tf_finicio" size="15"/></td>
            </tr>
            <tr>
                <td align="right"><h3>Hasta</h3></td>
                <td><input type="text" class="datepicker" name="tf_ffinal" size="15"/></td>
            </tr>
        </table>
        <input type="submit" name="b_BuscarPaquetes" value="Mostrar"/>
</center>
<script>
    $(function() {
        $( ".datepicker" ).datepicker();
    });
</script>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>