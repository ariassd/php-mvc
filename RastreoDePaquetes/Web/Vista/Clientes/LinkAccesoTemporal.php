<?php

    $g_tituloPagina = 'Solicitar Link Acceso Temporal al Sistema';
    $g_formAction="Clientes.php?vista=LinkAccesoTemporalInfo";
    ob_start();
?>
<script language="JavaScript">
function pregunta(){
    return confirm('¿Estas seguro que desea enviar la solicitud del LINK ?');
}
</script>

<center>
    <br/>
    <br/>
    <h1>Solicitar Link para Acceso Temporal al Sistema</h1>
    <br/>
    <table>
        <tr>
            <td align="right"><text>Codigo Pais:</text></td>
            <td><input type="text" name="tf_CodPais" size="6"/></td>
        </tr>
        <tr>
            <td align="right"><text>Numero de casillero:</text></td>
            <td><input type="text" name="tf_NumCasillero" size="6"/></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_Buscar" onclick="return pregunta()" value="Solicitar Link"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>