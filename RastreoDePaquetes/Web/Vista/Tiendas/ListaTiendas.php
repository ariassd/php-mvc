<?php
    $g_tituloPagina = 'Lista de tiendas';
    $g_formAction = "";
    ob_start();
?>
<h1>Esta es la lista de las tiendas</h1>
        <table>
            <thead>
                <tr>
                    <th>Id Tienda</th>
                    <th>Descripion</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiendas_al as $value) { ?>
                <tr>
                    <td><?php echo $value->I_idTienda; ?></td>
                    <td><?php echo $value->S_descripcion; ?></td>
                    <td><?php echo $value->S_estado; ?></td>
                    <td>
                        <a href="?vista=DetalleTienda&idTienda=<?php echo $value->I_idCliente; ?>">Ver detalle</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php //HtmlControles::SubmitButton('BtnSaludar','Saludar','Saludar_click','saludar()') ?>
<?php HtmlControles::UserHelpInformation('BtnSaludar','ayuda','Ayudas/Ayuda01.html') ?>

<?php echo isset($saludo); ?>
<script>
    function saludar(){
        return confirm("Desea saludar!");
    }
</script>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
