<?php
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
    $g_tituloPagina = 'Iniciar Sesión';
    $g_formAction = "Index.php?vista=BienvenidaSistema";
    ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<center>
    <div class="formlogin">
    <label>Usuario:</label>
    <input type="text" name="tf_usuario" placeholder="Eje: SJO-1245" size="15"/>
    <br>
    <br>
    <label>Clave:</label>
    <input type="password" name="tf_clave" placeholder="Clave usuario..." size="15"/>
    <br>
    <br>
    <input type="submit" value="Ingresar"/>
    <input type="reset" value="Cancelar"/>
    
</div>
    
    <br>
    <br>
    <h3>Olvido su contraseña ? Solicitar Link Acceso Temporal...</h3>
    <a href="<?php echo ('Clientes.php?vista=LinkAccesoTemporal');?>">Aqui.</a>
</center>

    <?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
