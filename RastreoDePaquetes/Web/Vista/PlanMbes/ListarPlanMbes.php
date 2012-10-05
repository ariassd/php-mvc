<?php
/**
 * Vista listado para la entidad de PlanMbes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.PlanMbe.ListarPlanMbes
 */

    $g_tituloPagina = 'Lista de PlanMbes';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de PlanMbes</h1>
        <table>
            <thead>
                <tr>
                    <th>i_id</th>
                    <th>s_ipo</th>
                    <th>d_seguroParaPaquetes</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_PlanMbes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_id; ?></td>
                    <td><?php echo $value->S_ipo; ?></td>
                    <td><?php echo $value->D_seguroparapaquetes; ?></td>
                    <td><a href="?vista=DetallePlanMbe&idPlanMbe=<?php echo $value->I_idPlanMbe; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>