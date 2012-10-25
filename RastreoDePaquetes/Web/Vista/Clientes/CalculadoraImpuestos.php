<?php

$g_tituloPagina = 'Calculadora Impuestos';
$g_formAction = "Clientes.php?vista=DetallePagoImpuestos";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Calculadora de Impuestos</h1>
    <input type="hidden" value="1" name="enviar" />
    <table>
        
        <tr>
            <td align="right"><text>Tipo de Articulo:</text></td>
            <td><select name="tipoarticulo">
              <option value="1">Computadora(13%)</option>
              <option value="2">Celular(10%)</option>
              <option value="3">Pantalla Led(15%)</option>
            </select></td>
            <td><?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "Calculadora.php?IdAyuda=tipoArticulo") ?>
        </td>
        </tr>
        <tr>
            <td align="right"><label>Valor Articulo en USD:</label></td>
            <td><input type="text" name="valor" size="25"/></td>
        </tr>
        
        <tr>
            <td align="right"><label>Peso Aproximado en Kg: </label></td>
            <td><input type="text" name="peso" size="25"/></td>
        </tr>
		
        <tr>
            <td align="right"><label>Plan Contratado: </label></td>
            <td><select name="tipoplan">
              <option value="1">Plan A</option>
              <option value="2">Plan B</option>
              <option value="3">Plan C</option>
              <option value="3">No Plan</option>
            </select></td>
            <td><?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "Calculadora.php?IdAyuda=planContratado") ?>
        </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" value="Calcular Impuestos"/>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>