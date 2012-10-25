<?php
$g_tituloPagina = 'Registro de Empleados';
$g_formAction="";
ob_start();
?>

<center>
    <br>
    <br>
    <h1>Registrar Empleados</h1>
    <br>
   
    <table>
        <tr>
            <td align="right"><label>Identificacion:</label></td>
            <td><input type="text" name="tf_identificacion" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><label>Nombres:</label></td>
            <td><input type="text" name="tf_nombres" size="25"/></td>
        </tr>
        <tr>
            <td align="right"><label>Apellidos:</label></td>
            <td><input type="text" name="tf_apellidos" size="40"/></td>
        </tr>
        <tr>
            <td align="right"><label>Nombre Usuario: </label></td>
            <td><input type="text" name="tf_usuario" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><label>Password:</label></td>
            <td><input type="password" name="pf_clave" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><label>Confirmar Password: </label></td>
            <td><input type="password" name="pf_confirmar" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><label>Tipo Empleado:</label></td>
            <td><input name="rb_et" type="radio" value="2"/>Empleado
                <input name="rb_um" type="radio" value="1"/>Administrador
            </td>
        </tr>
        <tr>
            <td align="right"><label>Estado:</label></td>
            <td><input name="rb_activo" type="radio" value="1"/>Activo
            <input name="rb_inactivo" type="radio" value="0"/>Inactivo
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_registrarEmp" onclick="pregunta();" value="Registar"/>
    <input type="submit" name="b_nuevoEmp" value="Nuevo"/>
    <input type="submit" name="b_salir" onclick="salir();" value="Salir"/>
    
</center>
<script>
function pregunta(){
    if (confirm('¿Está seguro que desea ingresar el empleado?')){
        <?php
        $g_formAction = "Empleados.php?vista=RegistroEmpleados";
        ?>
     }
    else{
    
    }
}
function salir(){
    <?php
    $g_formAction = "Index.php";
    ?>
}
</script>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>