<?php
$g_tituloPagina = 'Registro de Empleados';
$g_formAction="Empleados.php?vista=ActualizarEmpleado";
ob_start();
?>
<?php
if($_POST["tf_nombre"]!=null&&$_POST["tf_apellido1"]!=null&&$_POST["tf_apellido2"]!=null&&$_POST["tf_usuario"]!=null&&$_POST["pf_clave"]!=null&&$_POST["pf_confirmar"]!=null&&$_POST["rb_estado"]!=null){
    $emptemp= new Empleado();
    $emptemp->setS_nombre($_POST["tf_nombre"]);
    $emptemp->setS_apellido1($_POST["tf_apellido1"]);
    $emptemp->setS_apellido2($_POST["tf_apellido2"]);
    $emptemp->setS_nombredeusuario($_POST["tf_usuario"]);
    $emptemp->setS_clave($_POST["pf_clave"]);
    $emptemp->setS_estado($_POST["rb_estado"])?>
<center>    
    <table class="Lista">
    <tr>
        <td><h3>Nombre:</h3> </td>
        <td><?php echo $emptemp->getS_apellido1()," " ,$emptemp->getS_apellido2(),"," ,$emptemp->getS_nombre() ?> </td>
    </tr>
    <tr>
        <td><h3>Usuario: </h3></td>
        <td><?php echo $emptemp->getS_nombredeusuario() ?></td>
    </tr>
    <tr>
        <td><h3>Contraseña:</h3> </td>
        <td><?php echo $emptemp->getS_clave() ?></td>
    </tr>
    <tr>
        <td><h3>Estado: </h3></td>
        <td><?php echo $emptemp->getS_estado() ?></td>
    </tr>
</table>
<br/>
<br/>
<input type="submit" name="b_ConfRegEmpleado" value="Confirmar" onclick="return confirmacion()"/>
</center>
<script>
function confirmacion(){
    confirm('Seguro que desea modificar este Empleado?')
}
</script>
<?php } ?>

<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>