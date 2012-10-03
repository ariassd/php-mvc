<?php
    $g_tituloPagina = 'Lista de clientes';
    $g_formAction = "";
    ob_start();
?>
<?php echo _TITULO_; ?>
<h1>Esta es la lista de los clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>Id Cliente</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($o_clientes as $value) { ?>
                <tr>
                    <td><?php echo $value->I_idCliente; ?></td>
                    <td><?php echo $value->S_nombreCompleto; ?></td>
                    <td><?php echo $value->S_direccion; ?></td>
                    <td><?php echo $value->S_estado; ?></td>
                    <td>
                        <a href="?vista=DetalleCliente&idCliente=<?php echo $value->I_idCliente; ?>">Ver detalle</a>
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
