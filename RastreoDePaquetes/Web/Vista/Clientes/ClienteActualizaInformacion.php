<?php

$g_tituloPagina = 'Actualizar Informacion Cliente';
$g_formAction = "";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Actualizar Informacion Cliente</h1>
    <form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Identificacion:</text></td>
            <td><input type="text" name="identificacion" size="15"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Codigo Pais:</label></td>
            <td><input type="text" name="codigoPais" size="5"/>
            <label>Numero Casillero:</label>
            <input type="text" name="numerocasillero" size="5"/>
            </td>
        </tr>
        
         <tr>
            <td align="right"><label>Nombres:</label></td>
            <td><input type="text" name="nombres" size="30"/>
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
            <td><textarea name="direccion" resize:none cols="30" rows="2" wrap="physical">Direccion exacta...</textarea></td>
        </tr>
		
        <tr>
            <td align="right"><label>Telefono: </label></td>
            <td><input type="text" name="telefono" size="25"/></td>
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
            <td align="right"><label>Plan Contratado:</label></td>
            <td><select name="tipoplan">
              <option value="1">Plan A</option>
              <option value="2">Plan B</option>
              <option value="3">Plan C</option>
            </select>
            </td>
        </tr>
        <tr>
            <td align="right"><label>Estado:</label></td>
            <td><select name="estado">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>    
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" value="Registar Cliente"/>
    <input type="submit" value="Nuevo Cliente"/>
    </form>   
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>