<?php

    $g_tituloPagina = 'Solicitud de Link Acceso Temporal al Sistema';
    $g_formAction = "Index.php";
    ob_start();
    
?>

<center>
    <br/>
    <br/>
    <h1>Detalle sobre Solicitud de Link para Acceso Temporal al Sistema</h1>
    <br/>
    <table>
        <tr>
            <td><h3>El link para el acceso temporal ha sido enviado a su direccion de correo electronico.</h3></td>
        </tr>
        <tr>
            <td><h3>Para ingresar al sistema debe hacerlo por medio del link desde su cuenta de correo electronico.</h3></td>
        </tr>
        
        <tr>
            <td><h3>Si presenta problemas a la hora de ingresar con el link, favor comunicarse con la empresa.</h3></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_Buscar" value="Salir"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>