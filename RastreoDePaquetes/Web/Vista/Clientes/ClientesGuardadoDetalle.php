
<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
$g_tituloPagina = 'Carga de Clientes';
$g_formAction = "Clientes.php?vista=IngresoClienteCargaArchivotxt";
ob_start();
?>
<center>
    <br/>
   
    <h1>Lista de Clientes Guardados</h1>
    <table border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="gray">

        <td colspan='12'><text>CLIENTES MBE-ESCAZU</text></td>
	</tr>
        <tr align='center'>
            <td><text>NUM</text></td>
            <td><text>ID</text></td>
            <td><text>NOMBRE</text></td>
            <td><text>COD. PAIS</text></td>
            <td><text>NUMERO CASILLERO</text></td>
            <td><text>TIENDA</text></td>
            <td><text>DIRECCION</text></td>
            <td><text>EMAIL</text></td>
            <td><text>TELEFONO</text></td>
            <td><text>PLAN CONTRATADO</text></td>
            <td><text>ESTADO</text></td>
            <td rowspan="2">Guardar<input name="todos" type="checkbox" value="" />
            </td>
        </tr> 
        <tr>
        
        <?php
        for($i=1; $i < 10; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>Zambrana'.$i.' '.'Gutierrez'.$i.' '.'Armando'.$i.'</td>';
                echo '<td>SJO</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>61</td>';
                echo '<td>Dir-'.$i.'</td>';
                echo '<td>armyrene'.$i.'@gmail.com'.'</td>';
                echo '<td>2552-120'.$i.'</td>';
                echo '<td>A</td>';
                echo '<td>Activo</td>';
                echo '<td><input name="todos" type="checkbox" value="" checked/></td>';
            echo '</tr>';
        }?>
    <tr align="center">
        <td colspan='12'><text>TOTALE DE CLIENTES = 9, COSTA MBE-ESCAZU</text></td>
        
    </tr>    
  </table>
    <br/>
    <br/>
    <input type="submit" name="b_RegCLMan" value="Cargar Nuevos Clientes"/>   
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
    
