<?php

$g_tituloPagina = 'Buscar Empleados';
$g_formAction = "";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Buscar Empleados</h1>
    <form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Criterio de busuqeda:</text></td>
            <td><select name="criterio">
              <option value="1">Identificacion</option>
              <option value="2">Apellidos</option>
              <option value="3">Nombres</option>
            </select></td>
        </tr>
        <tr>
            <td align="right"><text>Texto a buscar:</text></td>
            <td><input type="text" name="identificacion" size="30"/></td>
        </tr>
        
    </table>
    <br>
    <br>
    <input type="submit" value="Buscar Empleado"/>
    </form>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>