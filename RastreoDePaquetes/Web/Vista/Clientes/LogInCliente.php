<?php
$g_tituloPagina = '';
$g_formAction = "Clientes.php?vista=RegistroClientesManual";
ob_start();
?>
<script language="javascript" type="text/javascript">
    function limpiar(obj){
        obj.value="";
    }
</script>
<center>

    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">Login</th>
        </tr>
        <tr>
            <td><h3>Usuario: </h3></td>
            <td>
                <input type="text" name="tf_CodPaisNumCas" value="SJO####" onclick="limpiar(this)"/>
                <?php HtmlControles::UserHelpInformation("AyudaUsuario", "Ayuda", "LoginUsuario.php?IdAyuda=tf_CodPaisNumCas") ?>
                Ej SJO-1234
            </td>
            
        </tr>
        <tr>
            <td><h3>Contrasena:</h3></td>
            <td><input type="password" name="pf_Contrasena"/></td>
        </tr>
        <tr>
            <th colspan="2" class="lineaFin"></th>
        </tr>
    </table>
    <br/>
    <input type="submit" value="Ingresar"/>
    <h3>Olvido su contraseña ? Solicitar Link Acceso Temporal...</h3>
    <a href="<?php echo ('Clientes.php?vista=LinkAccesoTemporal'); ?>">Aqui.</a>
</center>


<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>