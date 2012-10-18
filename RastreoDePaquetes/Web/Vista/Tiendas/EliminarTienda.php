<?php
$g_tituloPagina = 'Eliminar Tienda';
    $g_formAction = "Tiendas.php?vista=EliminarTienda.php";
    ob_start();
?>
<center><h1>Modificar Tienda</h1>
<br/>
<br/>
<br/>
<br/>
<div>
    <div>
            <table border="2" bgcolor="black">
                <th>Código</th>
                <th> Tienda </th>
                <?php foreach ($o_Tiendas as $value) { ?>
                    <tr>
                        <td><text><?php echo $value->getI_codigotienda();?><text/></td>
                        <td><text><?php echo $value->getS_descripcion();?><text/></td>
                        <td>
                            <a href="?clienteE=1">Eliminar</a>
                        </td>
                   <tr/>
                 <?php } ?>
            </table>
        </div>
</div>


</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>