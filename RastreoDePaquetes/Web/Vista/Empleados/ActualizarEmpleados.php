<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "";
ob_start();
    
?>
<center>
    <br>
    <br>
    <h1>Actualizar Empleado</h1>
    <br>
    <table>
       <tr>
            <td align="right"><label>Identificacion:</label></td>
            <td><input type="text" name="tf_identificacion" value="25869856" readonly="true" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Nombres:</label></td>
            <td><input type="text" name="tf_nombres" value="JORGE ALBERTO" size="25"/></td>
        </tr>
        <tr>
            <td align="right"><label>Apellidos:</label></td>
            <td><input type="text" name="tf_apellidos" value="ZAMBRANA GUTIERREZ" size="40"/></td>
        </tr>
        <tr>
            <td align="right"><label>Nombre Usuario: </label></td>
            <td><input type="text" name="tf_usuario" value="JORZAM" size="15"/></td>
        </tr>
               
        <tr>
            <td align="right"><label>Password:</label></td>
            <td><input type="password" name="pf_clave" value="12345" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Confirmar Password: </label></td>
            <td><input type="password" name="pf_confirmar" value="" size="15"/></td>
        </tr>
		
        <tr>
            <td align="right"><label>Tipo Empleado:</label></td>
            <td><input name="rb_tp" type="radio" value="2" checked/>Empleado
                <input name="rb_tp" type="radio" value="1"/>Administrador
            </td>
        </tr>
        <tr>
            <td align="right"><label>Estado:</label></td>
            <td><input name="rb_estado" type="radio" value="1" checked/>Activo
                <input name="rb_estado" type="radio" value="0"/>Inactivo
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" name="b_actualizar" onclick="pregunta()" value="Actualizar Empleado"/>   
</center>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Está seguro que desea actualizar el empleado?')){
        
     }
    else{
    
    }
}
</script>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>