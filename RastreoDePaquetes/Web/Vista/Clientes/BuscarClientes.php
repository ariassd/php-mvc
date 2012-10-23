<?php

    $g_tituloPagina = 'Buscar Clientes';
    $g_formAction = "Clientes.php?vista=TablaClientes";
    ob_start();
    
?>

<center><h1>Actualizacion de Datos de Cliente</h1>
    <table>
        <tr>
            <td><h3>Codigo de Pais:</h3></td>
            <td><input type="text" name="tf_CodPais" size="6"/></td>
        </tr>
        <tr>
            <td><h3>Numero de casillero:</h3></td>
            <td><input type="text" name="tf_NumCasillero" size="6"/></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_Buscar" onclick="" value="Buscar"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>