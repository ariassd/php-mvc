<?php

$g_tituloPagina = 'Cambio de Contrasena';
$g_formAction = "Clientes.php?vista=LogInCliente";
ob_start();
    
?><center>
    <h1>Cambio de Contraseña</h1>
    <br/>
    <br/>
    <br/>
    <table>
        <tr>
            <td><h3>Contraseña Anterior:</h3></td>
            <td><input type="text" name="tf_ContrasenaAnt"/></td>
        </tr>
        <tr>
            <td><h3>Contraseña Nueva:</h3></td>
            <td><input type="text" name="tf_ContrasenaNueva"/></td>
        </tr>
        <tr>
            <td><h3>Confirmar Contraseña:</h3></td>
            <td><input type="text" name="tf_ContrasenaConf"/></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_ActContrasena" value="Guardar"/>
</center>


<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>