<?php
/**
 * Vista detalle para la entidad de Empleados
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Empleado.DetalleEmpleados
 */

    $g_tituloPagina = 'Detalle de Empleados';
    $g_formAction = "";
    ob_start();
?>

<h2>Detalle de Empleado</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">i_id:</td>
        <td><?php echo $Empleado->I_id; ?></td>
    </tr>
    <tr>
        <td class="campo">s_nombre:</td>
        <td><?php echo $Empleado->S_nombre; ?></td>
    </tr>
    <tr>
        <td class="campo">s_nombreDeUsuario:</td>
        <td><?php echo $Empleado->S_nombredeusuario; ?></td>
    </tr>
    <tr>
        <td class="campo">s_clave:</td>
        <td><?php echo $Empleado->S_clave; ?></td>
    </tr>
    <tr>
        <td class="campo">e_tipo:</td>
        <td><?php echo $Empleado->E_tipo; ?></td>
    </tr>
    <tr>
        <td class="campo">o_tiendaALaQuePertenece:</td>
        <td><?php echo $Empleado->O_tiendaalaquepertenece; ?></td>
    </tr>

</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
