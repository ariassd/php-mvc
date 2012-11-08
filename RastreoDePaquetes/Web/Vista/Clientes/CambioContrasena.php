<?php

$g_tituloPagina = 'Cambio de Contraseña';
$g_formAction = "Clientes.php?vista=LogInCliente";
ob_start();
    
?><center>
    <table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Cambiar Datos
            </th>
        </tr>
        <tr>
            <td>Contraseña Anterior:</td>
            <td><input type="text" name="tf_ContrasenaAnt" size="10"/></td>
        </tr>
        <tr>
            <td>Contraseña Nueva:</td>
            <td><input type="text" name="tf_ContrasenaNueva" size="10"/></td>
        </tr>
        <tr>
            <td>Confirmar Contraseña:</td>
            <td><input type="text" name="tf_ContrasenaConf" size="10"/></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_ActContrasena" value="Cambiar"/>
</center>


<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>