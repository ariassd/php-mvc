<?php

    $g_tituloPagina = 'Creacion de nueva contraseña';
    $g_formAction="Index.php";
    ob_start();
    
?>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro que desea crear nueva contraseña ?')){
        alert("Nueva contraseña creda, para ingresar al sistema ingrese al Login");
     }
    else{
    
    }
}
</script>
<center>
    <br/>
    <br/>
    <h1>Creacion de nueva contraseña</h1>
    <br/>
    <table>
        <tr>
            <td align="right"><text>Contraseña nueva:</text></td>
            <td><input type="password" name="tf_claveNueva" size="6"/></td>
        </tr>
        <tr>
            <td align="right"><text>Confirmar Contraseña:</text></td>
            <td><input type="password" name="tf_claveConfirma" size="6"/></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_Buscar" onclick="pregunta()" value="Crear Contraseña"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>