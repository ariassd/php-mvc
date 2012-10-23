<?php

$g_tituloPagina = 'Detalle Pago Impuestos';
$g_formAction = "Clientes.php?vista=CalculadoraImpuestos";
ob_start();
    
?>
<center>
    
    <br>
    <br>
    <h1>Detalle Pago Impuestos</h1>
    <table width="400" border="1" cellpadding="1" bordercolor="#000000" bgcolor="gray">
        
        <tr align="center">
            <td><text>CONCEPTO</text></td>
            <td><text>COSTO</text></td>
        </tr>
        <tr bgcolor="black">
            <td><text>VALOR CIF</text></td>
            <td><text>$10,000.00</text></td>
        </tr>
        
        <tr bgcolor="black">
            <td><text>BODEGAJE</text></td>
            <td><text>$10,000,00</text></td>
            
        </tr>
        <tr bgcolor="black">
            <td><text>DESALMACENAJE</text></td>
            <td><text>$10,000,00</text></td>
        </tr>
        
        <tr bgcolor="black">
            <td><text>IMPUESTO DE IMPORTACION</text></td>
            <td><text>$5,250.00</text></td>
        </tr>
        
        <tr>
            <td><text>TOTAL A PAGAR: </text></td>
            <td><text>$35,250.00</text></td>
        </tr>
        
        
  </table>
    <br>
    <br>
    <input type="submit" value="Nuevo Calculo"/> 
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>