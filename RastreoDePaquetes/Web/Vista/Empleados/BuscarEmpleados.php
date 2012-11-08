<?php

$g_tituloPagina = 'Buscar Empleados';
$g_formAction = "Empleados.php?vista=CargaBusquedaEmpleados";
ob_start();
    
?>
<center>
<table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos de Busqueda
            </th>
        </tr>
        
        <tr>
            <td>Buscar por:</td>
            <td><select name="sl_criterio">
		<option value="0">Todos</option>	
              	<option value="1">Identificacion</option>
              	<option value="2">Apellidos</option>
              	<option value="3">Nombre</option>
                </select>
            <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "BuscaEmpleados.php?ayuda=Carga") ?>
            </td>
        </tr>
        <tr>
            <td>Identificación:</td>
            <td><input type="text" name="tf_identificacion" size="15"/></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="tf_nombre" size="15"/></td>
        </tr>
        <tr>
            <td>Primer Apellido:</td>
            <td><input type="text" name="tf_primerApellido" size="15"/></td>
        </tr>
        <tr>
            <td>Segundo Apellido:</td>
            <td><input type="text" name="tf_segundoApellido" size="15"/></td>
        </tr>
        <tr><th class="lineaFin" colspan="2"></th></tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_buscarEmpleado" value="Buscar Empleado"/>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>