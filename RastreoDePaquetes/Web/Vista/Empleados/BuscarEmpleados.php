<?php

$g_tituloPagina = 'Buscar Empleados';
$g_formAction = "Empleados.php?vista=CargaBusquedaEmpleados";
ob_start();
    
?>
<center>
    <br>
    <br>
    <h1>Buscar Empleados</h1>
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Criterio de busuqeda:</text></td>
            <td><select name="criterio">
		<option value="0">Buscar Todos</option>	
              	<option value="1">Identificacion</option>
              	<option value="2">Apellidos</option>
              	<option value="3">Nombres</option>
                </select>
            <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "BuscaEmpleados.php?ayuda=Carga") ?>
            </td>
        </tr>
        <tr>
            <br>
            <td align="right"><text>Texto a buscar:</text></td>
            <td><input type="text" name="identificacion" size="30"/></td>
        </tr>
        
    </table>
    <br>
    <br>
    <input type="submit" value="Buscar Empleado"/>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>