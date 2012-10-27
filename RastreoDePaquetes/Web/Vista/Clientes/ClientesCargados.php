<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
$g_tituloPagina = 'Lista de Clientes Cargados';
$g_formAction = "Clientes.php?vista=ClientesGuardadoDetalle";
ob_start();
?>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro que desea guardar los items seleccionados?')){
             
    }
}
</script> 

<center>
    <table class="Lista">
        <tr>
            <td colspan='12' class="nombreTabla">CLIENTES MBE-ESCAZU</td>
	</tr>
        <tr align='center'>
            <th>NUM</th>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>COD. PAIS</th>
            <th>NUMERO CASILLERO</th>
            <th>TIENDA</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>PLAN CONTRATADO</th>
            <th>ESTADO</th>
            <th rowspan="2"><input name="todos" type="checkbox" value="" /></th>
        </tr> 
        <tr>
        
        <?php
        for($i=1; $i < 10; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>ZAMBRANA-'.$i.' '.'GUTIERREZ-'.$i.' '.'ARMANDO'.$i.'</td>';
                echo '<td>SJO</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>61</td>';
                echo '<td>DIR-'.$i.'</td>';
                echo '<td><input name="todos" type="text" size="10" value=""/></td>';
                echo '<td>2552-120'.$i.'</td>';
                echo '<td>A</td>';
                echo '<td>ACTIVO</td>';
                echo '<td><input name="todos" type="checkbox" value=""/></td>';
            echo '</tr>';
        }?>
    <tr align="center">
        <td colspan='12'>TOTALE DE CLIENTES = 9, COSTA MBE-ESCAZU</td>
        
    </tr>  
        <tr>
            <td class="lineaFin" colspan="12">
                
            </td>
        </tr>
    </table>

    <br/>
    <br/>
    <input type="submit" name="b_RegCLMan" onclick="pregunta()" value="Guardar Seleccionados"/>   
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>

