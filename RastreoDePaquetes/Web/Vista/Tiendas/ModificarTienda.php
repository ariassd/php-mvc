<?php
$g_tituloPagina = 'Modificar Tienda';
    $g_formAction = "Tiendas.php?vista=ModificarTiendaConf";
    ob_start();
?>
<center>
<br/>
<br/>
<div>
    <div>
            <table class="Lista" border="1">
                <th>Código</th>
                <th> Tienda </th>
                <?php foreach ($o_Tiendas as $value) { ?>
                    <tr>
                        <td><center><text><?php echo $value->getI_codigotienda();?><text/></center></td>
                        <td><center><text><?php echo $value->getS_descripcion();?><text/></center></td>
                        <td>
                            <center><a href="?clienteE=1">Seleccionar</a></center>
                        </td>
                   <tr/>
                 <?php } ?>
            </table>
        </div>
</div>
<br/>
<br/>
<div>
     <table>
        <tr>
            <td><h3>Descripcion: </h3></td>
            <td><input type="text" name="tf_DescripcionTienda"/></td>
        </tr>
        <tr>
            <td><h3>Codigo de Tienda: </h3></td>
            <td><input type="text" name="tf_CodTienda"/></td>
        </tr>
        <tr>
            <td><h3>Pais: </h3></td>
            <td><input type="text" name="tf_Pais" class="validate[required]"/></td>
        </tr>
        <tr>
           <td><h3>Dirección: </h3></td>
           <td><input type="text" name="tf_DireccionTienda" size="25"</td>
        </tr>
        <tr>
            <td><h3>Telefono: </h3></td>
            <td><input type="text" name="tf_TelefonoTienda"</td>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td><input type="text" name="tf_EmailTienda"</td>
        </tr>
        <tr>
            <td><h3>Estado: </h3></td>
            <td><input type="radio" name="r_Estado" value="1">Activo</input>
            <input type="radio" name="r_Estado" value="0">Inactivo</input></td>
        </tr>
    </table>
    <input type="submit" name="b_GuardarCambiosTienda" value="Guardar Cambios"/>
</div>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>