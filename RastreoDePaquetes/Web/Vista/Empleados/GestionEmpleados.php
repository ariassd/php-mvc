<?php
$g_tituloPagina = 'Gestion de Empleados';
    $g_formAction = "Tiendas.php?vista=GestionEmpleados.php";
    ob_start();
?>
<center><h1>Gestion de Empleados</h1>
<br/>
<br/>
<br/>
<br/>
<div>
    <table>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=AgregarTienda"><h3>Agregar Empleado</h3></a></td></tr>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=ModificarTienda"><h3>Buscar Empleado</h3></a></td></tr>
        <tr><td><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Tiendas.php?vista=EliminarTienda"><h3>Eliminar Empleado</h3></a></td></tr>
    </table>
</div>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>