<?php

$g_tituloPagina = 'Eliminar Empleados';
$g_formAction = "";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Eliminar Empleados</h1>
    <form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Identificacion:</text></td>
            <td><input type="text" name="identificacion" size="15"/></td>
        </tr>
        
    </table>
    <br>
    <br>
    <input type="submit" value="Eliminar Empleado"/>
    </form>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>