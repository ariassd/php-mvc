<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
$g_tituloPagina = 'Eliminar Empleado';
$g_formAction = "";
ob_start();
?>
<script language="JavaScript">

function pregunta(){
    if (confirm('¿Estas seguro que desea guardar los items seleccionados?')){
        alert('Empledo Eliminado con exito');
        <?php
        $g_formAction = "Empleados.php?vista=BuscarEmpleado";
        ?>
    
        
     }
    else{
    <?php
        $g_formAction = "Empleados.php?vista=CargaBusquedaEmpleados";
    ?>  
    }
}
</script>
<center>
   <br/>
   <h1>Detalle Empleados a Eliminar:</h1>
    <table border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" bgcolor="gray">
        <tr>
        <td colspan='13' align="center"><text>EMPLEADOS MBE-ESCAZU</text></td>
		</tr>
        <tr align='center'>
            <td><text>N</text></td>
            <td><text>ID</text></td>
            <td><text>NOMBRE</text></td>
            <td><text>NOM. USUARIO</text></td>
            <td><text>CLAVE</text></td>
            <td><text>TIPO USUARIO</text></td>
            <td><text>ESTADO</text></td>
            
        </tr> 
        
        <?php
        for($i=1; $i < 2; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>Zambrana Gutierrez Armando - '.$i.'</td>';
                echo '<td>Usuario-1'.$i.'</td>';
                echo '<td>7325363jhfjdf-23'.$i.'</td>';
                echo '<td>E.T</td>';
                echo '<td>Activo</td>';
            echo '</tr>';
        }?>
    <tr>
        <td colspan='13'><text>TOTAL EMPLEADOS PARA COSTA MBE-ESCAZU</text></td>
        
    </tr>    
  </table>
    <br/>
    <br/>
    <input type="submit" name="b_RegCLMan" onclick="pregunta()" value="Eliminar Empleado"/>
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>