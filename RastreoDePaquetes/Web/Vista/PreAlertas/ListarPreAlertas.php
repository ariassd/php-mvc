<?php
/**
 * Vista listado para la entidad de PreAlertas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PreAlerta.ListarPreAlertas
 */

    $g_tituloPagina = 'Lista de PreAlertas';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de PreAlertas</h1>
        <table>
            <thead>
                <tr>
                    <th>i_id</th>
                    <th>s_descripcion</th>
                    <th>d_valor</th>
                    <th>s_archivo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_PreAlertas as $value) { ?>
                <tr>
                    <td><?php echo $value->I_id; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><?php echo $value->D_valor; ?></td>
                    <td><?php echo $value->S_archivo; ?></td>
                    <td><a href="?vista=DetallePreAlerta&idPreAlerta=<?php echo $value->I_idPreAlerta; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
