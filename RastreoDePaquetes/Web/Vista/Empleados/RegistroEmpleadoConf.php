<?php
$g_tituloPagina = 'Registro de Empleados';
$g_formAction = "";
ob_start();
?>
<?php
if ($_POST["tf_nombre"] != null && $_POST["tf_apellidosEmpleado1"] != null && $_POST["tf_apellidosEmpleado2"] != null && $_POST["tf_usuario"] != null && $_POST["pf_clave"] != null && $_POST["pf_confirmar"] != null && $_POST["rb_activo"] != null) {
    $emptemp = new Empleado();
    $emptemp->setS_nombre($_POST["tf_nombre"]);
    $emptemp->setS_apellido1($_POST["tf_apellidosEmpleado1"]);
    $emptemp->setS_apellido2($_POST["tf_apellidosEmpleado2"]);
    $emptemp->setS_nombredeusuario($_POST["tf_usuario"]);
    $emptemp->setS_clave($_POST["pf_clave"]);
    ?>

    <input type="hidden" name="tf_nombre" value="<?php echo $_POST["tf_nombre"] ?>"/>
    <input type="hidden" name="tf_apellidosEmpleado1" value="<?php echo $_POST["tf_apellidosEmpleado1"]?>"/>
    <input type="hidden" name="tf_apellidosEmpleado2" value="<?php  echo $_POST["tf_apellidosEmpleado2"] ?>"/>
    <input type="hidden" name="tf_usuario" value="<?php echo $_POST["tf_usuario"] ?>"/>
    <input type="hidden" name="pf_clave" value="<?php echo $_POST["pf_clave"] ?>"/>
    <input type="hidden" name="pf_confirmar" value="<?php echo $_POST["pf_confirmar"] ?>"/>
    <input type="hidden" name="rb_activo" value="<?php echo $_POST["rb_activo"] ?>"/>
    <input type="hidden" name="hd_guardar" value="true"/>
    <center>
        <?php if (isset($mensaje)) { ?>
        Confirmacion: <br/>
        <div style="color:red;font-size: 18px"><?php echo $mensaje; ?></div>
        <br/>
        <?php } ?>
    
        <table class="vistaDetalle">
            <tr>
                <th colspan="2" class="nombreFormulario">Detalle empleado</th>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>
                    <?php echo $emptemp->getS_apellido1(), " ", $emptemp->getS_apellido2(), ",", $emptemp->getS_nombre() ?>
                </td>
            </tr>
            <tr>
                <td>Usuario: </td>
                <td><?php echo $emptemp->getS_nombredeusuario() ?></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><?php echo $emptemp->getS_clave() ?></td>
            </tr>
            <tr>
                <th colspan="2" class="lineaFin"></th>
            </tr>
        </table>
        <br/>
        <br/>
        <?php if (isset($mensaje)) { ?>
            <a href="Empleados.php?vista=InsertarEmpleado" >Terminar</a>
        <?php } else { ?>
            <input type="submit" name="b_ConfRegEmpleado" value="Confirmar" onclick="return confirmacion()"/></center>
        <?php } ?>
        

    <script>
        function confirmacion(){
            confirm('Seguro que desea agregar este Empleado?')
        }
    </script>
<?php } else { ?>
    <center><h3>Campos obligatorios vacios. Click <a href="Empleados.php?vista=RegistroEmpleados">Aqui</a> para volver</h3></center>
<?php } ?>

<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>