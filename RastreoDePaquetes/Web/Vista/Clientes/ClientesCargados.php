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
            <td colspan='13' class="nombreTabla">CLIENTES MBE-ESCAZU</td>
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
        
        <?php for($i=1; $i < 10; $i++){ ?>
            
        <tr>
            <td align=center><?php echo $i; ?></td>
            <td>000<?php echo $i; ?></td>
            <td>Cliente <?php echo $i; ?></td>
            <td>SJO</td>
            <td>000<?php echo $i; ?></td>
            <td>61</td>
            <td>DIR-<?php echo $i; ?></td>
            <td><input name="email<?php echo $i;?>" type="text" size="10" value="" class="validate[required,custom[email]]"/></td>
            <td>2552-120<?php echo $i; ?></td>
            <td>A</td>
            <td>ACTIVO</td>
            <td align="center"><input name="todos" type="checkbox" value=""/></td>
            
        </tr>
            
        <?php } ?>
        
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
    <br/>
    <a href="javascript:return(false)" onclick="jQuery('form').validationEngine('hide')">Cerrar Validaciones</a>
</center>

<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>

