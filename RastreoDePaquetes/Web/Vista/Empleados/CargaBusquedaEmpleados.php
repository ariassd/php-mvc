<?php

/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
$g_tituloPagina = 'Busqueda Empleados';
$g_formAction = "Empleados.php?vista=BuscarEmpleados";
ob_start();
?>
<center>
   <table class="Lista">
        <tr>
            <td colspan='12' class="nombreTabla">DETALLE DE BUSQUEDA</td>
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
            <th colspan="3">OPERACIONES</th>
        </tr> 
        
        <?php
        for($i=1; $i < 5; $i++){
            echo "<tr align='center' bgcolor='black'>";    
                echo '<td align=center>'.$i.'</td>';
                echo '<td>000'.$i.'</td>';
                echo '<td>Jorge - '.$i.'</td>';
                echo '<td>Zamora - '.$i.'</td>';
                echo '<td>Ulate - '.$i.'</td>';
                echo '<td>Usuario-1'.$i.'</td>';
                echo '<td>7325363jhfjdf-23'.$i.'</td>';
                echo '<td>E.T</td>';
                echo '<td>Activo</td>';
                echo '<td><a href="Empleados.php?vista=VerDetalleEmpleados">Ver</a></td>';
                echo '<td><a href="Empleados.php?vista=ActualizarEmpleado">Editar</a></td>';
                echo '<td><a href="Empleados.php?vista=EliminarEmpleado">Eliminar</a></td>';
            echo '</tr>';
        }?>
    <tr>
        <td colspan='13'><text>TOTAL EMPLEADOS PARA COSTA MBE-ESCAZU</text></td>
        
    </tr>    
  </table>
    <br/>
    <br/>
    <input type="submit" name="b_nuevaBusqueda" onclick="pregunta()" value="Nueva Busqueda"/>   
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>