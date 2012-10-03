<?php
    $g_tituloPagina = 'Lista de clientes';
    $g_formAction = "";
    ob_start();
?>
<h2>Este es el detalle del cliente</h2>

<table class="FormularioDetalle">
    <tr>
        <td class="campo">Id Cliente:</td>
        <td><?php echo $cliente->I_idCliente; ?></td>
    </tr>
    <tr>
        <td class="campo">Nombre:</td>
        <td><?php echo $cliente->S_nombreCompleto; ?></td>
    </tr>
    <tr>
        <td class="campo">Direccion:</td>
        <td><?php echo $cliente->S_direccion; ?></td>
    </tr>
    <tr>
        <td class="campo">Estado:</td>
        <td><?php echo $cliente->S_estado; ?></td>
    </tr>
</table>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>
