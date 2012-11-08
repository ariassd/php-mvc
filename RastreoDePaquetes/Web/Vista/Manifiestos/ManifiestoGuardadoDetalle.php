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
    <table class="Lista">
        <tr>
            <td align="center" colspan='15' class="nombreTabla">
                Movimiento de Guias por Tiendas <br>
                Desde el 05/06/2012 hasta el 05/06/2012, Estados: Todos, Pais: Costa RIca, Tienda: MBE-EZCAZU
            </td>
	</tr>

        <tr align='center'>
            <th>Nº</th>
            <th>GUIA</th>
            <th>FECHA INGRESO</th>
            <th>ESTADO</td>
            <th>FECHA DEL ESTADO</th>
            <th>PIEZAS</th>
            <th>PESO(KG)</th>
            <th>TIPO DE ENVIO</th>
            <th>CODIGO TIENDA</th>
            <th>TIENDA</th>
            <th>CASILLERO</th>
            <th>DESCP.</th>
            <th>TIPO MERCANCIA</th>
            <th>Guardar<input name="todos" type="checkbox" value=""/>
            </th>
        </tr> 
        <?php
        
        for($i=1; $i < 10; $i++){
            echo '<tr aling="center">';    
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
                echo '<td colspan="2"><input name="todos" type="checkbox" value="" checked/></td>';
            echo '</tr>';
        }?>
    <tr>
        <td colspan='5'>TOTALES PARA COSTA MBE-ESCAZU</td>
        <td align='center'>56</td>
        <td align='center'>10,5 kg</td>
        <td colspan='5'><text></text></td>
    </tr>    
    </table>
    <br/>
    <br/><input type="submit" name="b_RegCLMan" value="Nueva Carga"/>   
</center>
<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
