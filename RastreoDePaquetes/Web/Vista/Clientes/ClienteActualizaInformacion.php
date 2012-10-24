<?php

$g_tituloPagina = 'Actualizar Informacion Cliente';
$g_formAction = "";
ob_start();
    
?>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro que desea actualizar la informacion?')){
        alert('Informacion Actualizada con exito');
        <?php
        $g_formAction = "Empleados.php?vista=BuscarEmpleado";
        ?>
     }
    else{
    <?php
      $g_formAction = ""; 
      ?> 
    }
}
</script>
<center>
    
    <br>
    <br>
    <h1>Actualizar Informacion Cliente</h1>
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Identificacion:</text></td>
            <td><input type="text" name="identificacion" value="2-0233-0258" readonly="true"  size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Codigo Pais:</label></td>
            <td><input type="text" name="codigoPais" value="SJO" readonly="true" size="5"/>
            <label>Numero Casillero:</label>
            <input type="text" name="numerocasillero" value="0021" readonly="true" size="5"/>
            </td>
        </tr>
        
         <tr>
            <td align="right"><label>Nombres:</label></td>
            <td><input type="text" name="nombres" value="Armando" size="30"/>
            </td>
        </tr>
        
        <tr>
            <td align="right"><label>Apellidos:</label></td>
            <td><input type="text" name="apellidos" value="Zambrana Gutierrez" size="30"/></td>
        </tr>
            
        <tr>
            <td align="right"><label>Email: </label></td>
            <td><input type="text" name="email" value="armyrene@gmail.com" size="25"/></td>
        </tr>
		
        <tr>
            <td align="right"><label>Direccion: </label></td>
            <td><textarea name="direccion" resize:none cols="30" rows="2" wrap="physical">Heredia Centro.</textarea></td>
        </tr>
		
        <tr>
            <td align="right"><label>Telefono: </label></td>
            <td><input type="text" name="telefono" value="Casa = 2255-8829, Celular = 8858-1214, Otro = 8922-2255" size="40"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Password: </label></td>
            <td><input type="password" name="pass" value="12345" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Confirmar Password: </label></td>
            <td><input type="password" name="confirmar" value="12345" size="15"/></td>
        </tr>
		
        <tr>
            <td align="right"><label>Plan Contratado:</label></td>
            <td>
                <input name="" type="radio" disabled value="a"/>Plan A
                <input name="" type="radio" disabled value="b" checked/>Plan B
            </td>
        </tr>
        <tr>
            <td align="right"><label>Estado:</label></td>
            <td>
                <input name="" type="radio" disabled value="activo" checked/>Activo
                <input name="" type="radio" disabled value="activo"/>Activo
                  
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" onclick="pregunta()" value="Actualizar Informacion"/>  
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>