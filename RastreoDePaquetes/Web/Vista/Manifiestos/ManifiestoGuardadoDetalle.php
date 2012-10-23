<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
$g_tituloPagina = 'Detalle Manifiestos';
$g_formAction = "Manifiestos.php?vista=CargarManifiesto";
ob_start();
?>
<center>
    <br/>
   
    <h1>Detalle de Manifiesto Guardado</h1>
    <h3>Movimiento de Guias por Tiendas</h3>
    <h4>Desde el 05/06/2012 hasta el 05/06/2012, Estados: Todos, Pais: Costa RIca, Tienda: MBE-EZCAZU</h4>    
    <table border="1" bgcolor="gray">

        <tr align='center'>
            <td><text>N</text></td>
            <td><text>GUIA</text></td>
            <td><text>FECHA INGRESO</text></td>
            <td><text>ESTADO</text></td>
            <td><text>FECHA DEL ESTADO</text></td>
            <td><text>PIEZAS</text></td>
            <td><text>PESO(KG)</text></td>
            <td><text>TIPO DE ENVIO</text></td>
            <td><text>CODIGO TIENDA</text></td>
            <td><text>TIENDA</text></td>
            <td><text>CASILLERO</text></td>
            <td><text>DESCP.</text></td>
            <td><text>TIPO MERCANCIA</text></td>
            <td rowspan="2">Guardar<input name="todos" type="checkbox" value="" />
            </td>
        </tr> 
        <tr>
        <td colspan='13'><text>MBE-ESCAZU</text></td>
		</tr>
        <?php
        for($i=1; $i < 10; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>0'.$i.'/06/2012</td>';
                echo '<td>UP</td>';
                echo '<td>05/06/2012</td>';
                echo '<td>'.$i.'</td>';
                echo '<td>1,'.$i.'</td>';
                echo '<td>MERCANCIA</td>';
                echo '<td>61</td>';
                echo '<td>MBE-ESCAZU</td>';
                echo '<td>SJ000'.$i.'</td>';
                echo '<td>TAPA-'.$i.'</td>';
                echo '<td>MBV</td>';
                echo '<td><input name="todos" type="checkbox" value="" checked/></td>';
            echo '</tr>';
        }?>
    <tr>
        <td colspan='5'><text>TOTALES PARA COSTA MBE-ESCAZU</text></td>
        <td align='center'><text>56</text></td>
        <td align='center'><text>10,5 kg</text></td>
        <td colspan='7'><text></text></td>
    </tr>    
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_RegCLMan" value="Cargar Manifiesto"/>   
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
