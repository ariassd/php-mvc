<?php

$g_tituloPagina = 'Detalle Pago Impuestos';
$g_formAction = "Clientes.php?vista=CalculadoraImpuestos";
ob_start();
    
?>
<center>
   <table class="Lista">
        <tr>
            <td colspan='13' class="nombreTabla">Detalle Pago Impuestos</td>
	</tr>
       <tr>
            <th>CONCEPTO</th>
            <th>COSTO</th>
       </tr>
        <tr>
            <td>VALOR CIF</td>
            <td>$10,000.00</td>
        </tr>
        
        <tr>
            <td>BODEGAJE</td>
            <td>$10,000,00</td>
            
        </tr>
        <tr>
            <td>DESALMACENAJE</td>
            <td>$10,000,00</td>
        </tr>
        
        <tr>
            <td>IMPUESTO DE IMPORTACION</td>
            <td>$5,250.00</td>
        </tr>
        
        <tr>
            <td>TOTAL A PAGAR:</td>
            <td>$35,250.00</td>
        </tr>  
         <tr><td class="lineaFin" colspan="2"></td></tr>
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