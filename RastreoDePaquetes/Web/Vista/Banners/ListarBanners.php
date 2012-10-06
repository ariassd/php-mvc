<?php
/**
 * Vista listado para la entidad de Banners
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Banner.ListarBanners
 */

    $g_tituloPagina = 'Lista de Banners';
    $g_formAction = "";
    ob_start();
?>

	<h1>Lista de Banners</h1>
        <table>
            <thead>
                <tr>
                    <th>i_id</th>
                    <th>s_descripcion</th>
                    <th>dt_fechaIngreso</th>
                    <th>dt_fechaInicioPublicacion</th>
                    <th>dt_fechaFinPublicacion</th>
                    <th>s_textoPublicitario</th>
                    <th>s_linkDeVisita</th>
                    <th>s_posicion</th>
                    <th>s_estadoDePublicacion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_Banners as $value) { ?>
                <tr>
                    <td><?php echo $value->I_id; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><?php echo $value->Dt_fechaingreso; ?></td>
                    <td><?php echo $value->Dt_fechainiciopublicacion; ?></td>
                    <td><?php echo $value->Dt_fechafinpublicacion; ?></td>
                    <td><?php echo $value->S_textopublicitario; ?></td>
                    <td><?php echo $value->S_linkdevisita; ?></td>
                    <td><?php echo $value->S_posicion; ?></td>
                    <td><?php echo $value->S_estadodepublicacion; ?></td>
                    <td><a href="?vista=DetalleBanner&idBanner=<?php echo $value->I_idBanner; ?>">Ver detalle</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
