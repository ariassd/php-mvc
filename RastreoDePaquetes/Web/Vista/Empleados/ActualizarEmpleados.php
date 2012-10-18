<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Actualizar Empleados</h1>
    <form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Identificacion:</text></td>
            <td><input type="text" name="identificacion" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Nombres:</label></td>
            <td><input type="text" name="nombres" size="25"/>
            <label>Apellidos:</label>
            <input type="text" name="apellidos" size="40"/>
            </td>
        </tr>
        
        <tr>
            <td align="right"><label>Email: </label></td>
            <td><input type="text" name="email" size="25"/></td>
        </tr>
		
		 <tr>
            <td align="right"><label>Direccion: </label></td>
            <td><textarea name="direccion" resize:none cols="30" rows="3" wrap="physical">Direccion exacta...</textarea></td>
        </tr>
		
		 <tr>
            <td align="right"><label>Telefono: </label></td>
            <td><input type="text" name="telefono" size="25"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Nombre Usuario: </label></td>
            <td><input type="text" name="usuario" size="15"/></td>
        </tr>
               
        <tr>
            <td align="right"><label>Password: </label></td>
            <td><input type="password" name="pass" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Confirmar Password: </label></td>
            <td><input type="password" name="confirmar" size="15"/></td>
        </tr>
		
        <tr>
            <td align="right"><label>Tipo Empleado: </label></td>
            <td><select name="tipoempleado">
              <option value="2">Empleado</option>
              <option value="1">Administrador</option>
            </select>
            
            <label>Estado:</label>
            <select name="estado">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
            </td>
        
    </table>
    <br>
    <br>
    <input type="submit" value="Actualizar"/>
    </form>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>