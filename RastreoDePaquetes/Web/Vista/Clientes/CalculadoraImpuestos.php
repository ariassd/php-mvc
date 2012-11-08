<?php

$g_tituloPagina = 'Calculadora de Impuestos';
$g_formAction = "Clientes.php?vista=DetallePagoImpuestos";
ob_start();
    
?>
<center>
    <table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos para calcular Impuestos
            </th>
        </tr>
        
        <tr>
            <td>Tipo de Articulo:</td>
            <td><select name="tipoarticulo">
              <option value="1">Computadora(13%)</option>
              <option value="2">Celular(10%)</option>
              <option value="3">Pantalla Led(15%)</option>
            </select>
           
            </td>
            
        </tr>
        <tr>
            <td>Valor Articulo en USD:</td>
            <td><input type="text" name="valor" size="25"/></td>
        </tr>
        
        <tr>
            <td>Peso Aproximado en Kg:</td>
            <td><input type="text" name="peso" size="25"/></td>
        </tr>
		
        <tr>
            <td>Plan Contratado:</td>
            <td>
                <input name="planes" type="radio" value="PlanA"/>Plan A
                <input name="planes" type="radio" value="PlanB"/>Plan B
            
            </td>
            
        </tr>
        <tr><th class="lineaFin" colspan="2"></th></tr>
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