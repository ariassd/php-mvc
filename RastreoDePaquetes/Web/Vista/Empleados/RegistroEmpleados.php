<?php
$g_tituloPagina = 'Registro de Empleados';
$g_formAction="Empleados.php?vista=RegistroEmpleadoConf";
ob_start();
?>

<center>
    
    <table class="vistaDetalle">
        <tr>
            <th colspan="2" class="nombreFormulario">Detalle empleado</th>
        </tr>
        <tr/>
            <td align="right"><h3>Nombre:</h3></td>
            <td><input type="text" name="tf_nombre" size="25"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Apellido1:</h3></td>
            <td><input type="text" name="tf_apellidosEmpleado1"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Apellido2:</h3></td>
            <td><input type="text" name="tf_apellidosEmpleado2"/></td>
        </tr>
        <tr>
            <td align="right"><h3>Nombre Usuario: </h3></td>
            <td><input type="text" name="tf_usuario" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><h3>Password:</h3></td>
            <td><input type="password" name="pf_clave" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><h3>Confirmar Password: </h3></td>
            <td><input type="password" name="pf_confirmar" size="15"/></td>
        </tr>

        <tr>
            <td align="right"><h3>Estado:</h3></td>
            <td><input name="rb_activo" type="radio" value="1"/>Activo
            <input name="rb_activo" type="radio" value="0"/>Inactivo
            </td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2"></th>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_ConfIngresoEmpleado" value="Ingresar" onclick="return Verificar()"/>
    
</center>
<script>
    function Verificar(){
        if(document.getElementsByName('pf_clave').value!=document.getElementsByName('pf_confirmar').value){
            alert('Contraseñas no coinciden');
            return confirm=false;
        }
    }
</script>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>