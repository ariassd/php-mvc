<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "Empleados.php?vista=ActualizarEmpleadosConf";
ob_start();
    
?>
<center>
    <br>
    <br>
    <h1>Actualizar Empleado</h1>
    <br>
    <table>
        <tr>
            <td align="right"><h3>Nombres:</h3></td>
            <td><input type="text" name="tf_nombre" value="" size="25"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Apellido1:</h3></td>
            <td><input type="text" name="tf_apellido1" size="40"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Apellido2:</h3></td>
            <td><input type="text" name="tf_apellido2" size="40"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Nombre Usuario: </h3></td>
            <td><input type="text" name="tf_usuario" size="15"/></td>
        </tr>
               
        <tr>
            <td align="right"><h3>Password:</h3></td>
            <td><input type="password" name="pf_clave" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><h3>Confirmar Password: </h3></td>
            <td><input type="password" name="pf_confirmar" size="15"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Estado:</h3></td>
            <td><input name="rb_estado" type="radio" value="Activo" />Activo
                <input name="rb_estado" type="radio" value="Inactivo"/>Inactivo
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_actualizar" value="Actualizar Empleado"/>   
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>