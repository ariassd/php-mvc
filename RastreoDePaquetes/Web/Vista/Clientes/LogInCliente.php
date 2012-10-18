<?php

    $g_tituloPagina = 'Actualizacion de Datos del Cliente';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
    ?>
<script language="javascript" type="text/javascript">
    function limpiar(obj){
        obj.value="";
    }
</script>
<center>
    <br/>
    <br/>
    <div>
        <table>
            <tr>
                <td><h3>Usuario: </h3></td>
                <td>
                    <input type="text" name="tf_CodPaisNumCas" value="SJO####" onclick="limpiar(this)"/>
                    <?php HtmlControles::UserHelpInformation("AyudaUsuario", "Ayuda", "LoginUsuario.php?IdAyuda=tf_CodPaisNumCas") ?>
                </td>
                <td><p class="hide" name="p_ayudaUserName">Ej SJO-1234</p></td>
            </tr>
            <tr>
                <td><h3>Contrasena:</h3></td>
                <td><input type="password" name="pf_Contrasena"/></td>
            </tr>
        </table>
        <input type="submit" value="Ingresar"/>
    </div>

    <h3>Olvido su contrasena? Click </h3><a href onclick="">Aqui<a/>
</center>


<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>