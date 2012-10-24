<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "Empleados.php?vista=TablaAccesos";
ob_start();
    
?>
<center>
    <br/>
    <br/>
    <br/>
    <div>
        <table>
            <tr>
                <td><h3>Usuario de Empleado</h3></td>
                <td><input type="text" name="tf_UsuarioEmpleado"/></td>
                <td><input type="button" value="Buscar" onclick="$('#d_Resultados').load('<?php echo path('Vista/Empleados/Ajax_info.php?params=hola');?>')"/></td>
            </tr>
            <tr>
                <td> <h3>Tienda</h3></td>
                <td><select>
                        <option></option>
                        <option>Escazu</option>
                        <option>Santa Ana</option>
                        <option>San Pedro</option>
                    </select></td>
            </tr>
        </table>
    </div>
    <div id="d_Resultados">
        
    </div>
    <input type="submit" name="b_SelAsignarPermisos" value="Seleccionar"/>
</center>



<script>
</script>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>