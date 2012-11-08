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
   <table class="Lista">
        <tr>
            <td colspan='13' class="nombreTabla">Datos del Empleado</td>
	</tr>
        <tr align='center'>
            <th>Nº</th>
            <th>IDENTIFICACION</th>
            <th>NOMBRE</td>
            <th>PRIMER APELLIDO</th>
            <th>SEGUNDO APELLIDO</th>
            <th>USUARIO</th>
            <th>CLAVE</th>
            <th>TIPO USUARIO</th>
            <th>ESTADO ACTUAL</th>
        </tr> 
        
        <?php
        for($i=1; $i < 2; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>Armando - '.$i.'</td>';
                echo '<td>Zambrana - '.$i.'</td>';
                echo '<td>Gutierrez - '.$i.'</td>';
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