<?php
$g_tituloPagina = 'Agregar Nueva Tienda';
    $g_formAction = "Tiendas.php?vista=AgregarTienda";
    ob_start();
?>
<?php 
if($_POST["tf_CodTienda"]!=null&&$_POST["tf_DescripcionTienda"]!=null&&$_POST["tf_Pais"]!=null&&$_POST["tf_EmailTienda"]!=null&&$_POST["tf_DireccionTienda"]!=null&&$_POST["tf_TelefonoTienda"]!=null&&$_POST["r_Estado"]!=null){
    $nuevaTienda= new Tienda();
    $nuevaTienda->setS_direccion($_POST["tf_DescripcionTienda"]);
    $nuevaTienda->setI_codigotienda($_POST["tf_CodTienda"]);
    $nuevaTienda->setS_direccion($_POST["tf_DireccionTienda"]);
    $nuevaTienda->setS_email($_POST["tf_EmailTienda"]);
    $nuevaTienda->setS_telefono($_POST["tf_TelefonoTienda"]);
    $nuevaTienda->setS_pais($_POST["tf_Pais"]);
    $nuevaTienda->setB_estadoactivo($_POST["r_Estado"]);
    ?>
<center>
    <table class="vistaDetalle">
        <tr>
            <td><h3>Descripcion: </h3></td>
            <td><?php echo $nuevaTienda->getS_direccion() ?></td>
        </tr>
        <tr>
            <td><h3>Codigo de Tienda: </h3></td>
            <td><?php echo $nuevaTienda->getI_codigotienda() ?></td>
        </tr>
        <tr>
            <td><h3>Pais: </h3></td>
            <td><?php echo $nuevaTienda->getS_pais() ?></td>
        </tr>
        <tr>
            <td><h3>Direccion: </h3></td>
            <td><?php echo $nuevaTienda->getS_direccion() ?></td>
        </tr>
        <tr>
            <td><h3>Telefono: </h3></td>
            <td><?php echo $nuevaTienda->getS_telefono() ?></td>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td><?php echo $nuevaTienda->getS_email() ?></td>
        </tr>
        <tr>
            <td><h3>Estado: </h3></td>
            <td><?php echo $nuevaTienda->getB_estadoactivo() ?></td>
        </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_ConfAgregarTienda" value="Confirmar" onclick="return confirm('Seguro que desea agregar esta tienda?')"/>
</center>
<?php }else{?>
    <center><h3>Campos obligatorios vacios, Click <a href='Tiendas.php?vista=AgregarTienda'>aqui</a> Para Volver</h3></center>
    <?php }
?>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>