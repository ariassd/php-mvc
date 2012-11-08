<?php

    $g_tituloPagina = 'Buscar Clientes';
    $g_formAction = "Clientes.php?vista=TablaClientes";
    ob_start();
    
?>

<center>
    <table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Parametros de Busqueda
            </th>
        </tr>
        <tr>
            <td>Codigo de Pais:</td>
            <td><input type="text" name="tf_CodPais" placeholder="Eje: SJO" size="6" class="validate[required]"/></td>
        </tr>
        <tr>
            <td>Numero de casillero:</td>
            <td><input type="text" name="tf_NumCasillero" placeholder="Eje: 0125" size="6" class="validate[required,custom[integer]]"/></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_Buscar" onclick="" value="Buscar"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>