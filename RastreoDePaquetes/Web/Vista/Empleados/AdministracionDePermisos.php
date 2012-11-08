<?php
$g_tituloPagina = 'Administración de Permisos';
$g_formAction = "Empleados.php?vista=TablaAccesos";
ob_start();
?>
<center>
    <table class="vistaDetalle">

        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos del Permiso
            </th>
        </tr>
        <tr>
            <td>Usuario de Empleado:</td>
            <td><input type="text" name="tf_UsuarioEmpleado"/>
            <input type="button" value="Buscar" onclick="$('#d_Resultados').load('<?php echo path('Vista/Empleados/Ajax_info.php?params=hola'); ?>')"/></td>
        </tr>
        <tr>
            <td>Tienda:</td>
            <td><select>
                    <option>Seleccionar</option>
                    <option>Escazu</option>
                    <option>Santa Ana</option>
                    <option>San Pedro</option>
                </select></td>
        </tr>
        <tr><th class="lineaFin" colspan="2"></th></tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_SelAsignarPermisos" value="Seleccionar"/>
</center>
<script>
</script>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>