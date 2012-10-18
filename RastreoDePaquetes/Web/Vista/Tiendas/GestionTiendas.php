<?php
$g_tituloPagina = 'Gestion de Tiendas';
    $g_formAction = "Tiendas.php?vista=GestionTiendas.php";
    ob_start();
?>
<center><h1>Gestion de Tiendas</h1>
<br/>
<br/>
<br/>
<br/>
<div>
    <table>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=AgregarTienda"><h3>Agregar Tienda</h3></a></td></tr>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=ModificarTienda"><h3>Modificar Tienda</h3></a></td></tr>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=EliminarTienda"><h3>Eliminar Tienda</h3></a></td></tr>
    </table>
</div>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>