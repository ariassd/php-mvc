<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
$g_tituloPagina = 'Consulta de Paquetes';
$g_formAction = "Paquetes.php?vista=ListarPaquetes";
ob_start();
?>
<center>
    <table class="vistaDetalle">
           <tr>
           <th class="nombreFormulario" colspan="2">
           Busqueda de Paquetes
           </th>
        </tr> 
        <tr>
            <td>Buscar en:</td>
            <td><input type="radio" name="r_tipoLista" value="1"/>Transito
                <input type="radio" name="r_tipoLista" value="0"/>Archivados</td>
        </tr>
        <tr>
            <td>Fecha Inicio:</td>
            <td><input type="text" class="datepicker" name="tf_finicio" size="15"/></td>
        </tr>
        <tr>
            <td>Fecha Final:</td>
            <td><input type="text" class="datepicker" name="tf_ffinal" size="15"/></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_BuscarPaquetes" value="Mostrar"/>
</center>
<script>
    $(function() {
        $(".datepicker").datepicker();
    });
</script>
<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>