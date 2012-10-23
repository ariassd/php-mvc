<?php
$g_tituloPagina = 'Notificacion de paquete perdido';
    $g_formAction = "SeguimientoDePaquetes.php?vista=NotificacionPaquetePerdido.php";
    ob_start();
?>

<center>
    <h1>Notificar paquete perdido</h1>
    <br/>
    <br/>
    <br/>
    <div>
        <table>
            <tr>
                <td><h3>Numero de Rastreo(Tracking):</h3></td>
                <td><input type="text"name="tf_NumRastreo" size="20"/>
                <?php HtmlControles::UserHelpInformation("AyudaUsuario", "Ayuda", "NotPaqPerdido.php?IdAyuda=tf_NumRastreo") ?>
                </td>
            </tr>
            <tr>
                <td><h3>Descripción del paquete(Contenido):</h3></td>
                <td><input type="text" name="tf_DescPaquete" size="20"/>
                <?php HtmlControles::UserHelpInformation("AyudaUsuario", "Ayuda", "NotPaqPerdido.php?IdAyuda=tf_DescPaquete") ?>
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
        <input type="submit" name="b_EnviarNotificacion" value="Enviar Notificación"/>
    </div>
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>
