<?php
/**
 * Vista listado para la entidad de Empleados
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Empleado.ListarEmpleados
 */

    $g_tituloPagina = 'Lista de Empleados';
    $g_formAction = "";
    ob_start();
?>
<center>
    <br>
    <br>
    <h1>Lista de Empleados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                <th>TIENDA PERTENECE</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($o_Empleados as $value) { ?>
                <tr>
                    <td><?php echo $value->I_id; ?></td>
                    <td><?php echo $value->S_nombre; ?></td>
                    <td><?php echo $value->S_nombredeusuario; ?></td>
                    <td><?php echo $value->S_clave; ?></td>
                    <td><?php echo $value->E_tipo; ?></td>
                    <td><?php echo $value->O_tiendaalaquepertenece; ?></td>
                    <td><a href="?vista=DetalleEmpleado&idEmpleado=<?php echo $value->I_idEmpleado; ?>">Ver detalle</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
 </center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
