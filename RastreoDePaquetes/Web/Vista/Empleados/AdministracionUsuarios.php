<?php

$g_tituloPagina = 'Administracion de Usuarios';
$g_formAction = "Index.php";
ob_start();
?>
<center>
    <br/>
    <br/>
    <h1>Administracion Usuarios</h1>
    <br/>
    <br/>
    <table>
            <tr><td><a href="<?php echo ('Empleados.php?vista=InsertarEmpleado');?>"><h3>Insertar Empleado</h3></a></td></tr>
            <tr><td><a href="<?php echo ('Empleados.php?vista=BuscarEmpleado');?>"><h3>Buscar Empleado</h3></a></td></tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_salir" value="Salir"/> 
</center>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
