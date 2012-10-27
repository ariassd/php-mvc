<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
$g_tituloPagina = 'Registro Manual de Clientes';
$g_formAction = "Clientes.php?vista=RegistroManualClientesConf";
ob_start();
?>


<center>


    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos del cliente
            </th>
        </tr>
        <tr>
            <td>Codigo de Pais: </td>
            <td><input type="text" name="tf_CodPais" size="3"/>
                Número de Casillero: 
                <input type="text" name="tf_NumCasillero" size="4"/>
                Código de tienda: 
                <input type="text" name="tf_CodTienda" size="4"/></td>
        </tr>
        <tr>
            <td>Identificacion: </td>
            <td><input type="text" name="tf_IDCliente" size="15"/></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="tf_NombreCliente" size="15"/></td>
        </tr>
        <tr>
            <td>Apellidos: </td>
            <td><input type="text" name="tf_ApellidoCliente" size="30"/></td>
        </tr>
        <tr>
            <td>Dirección: </td>
            <td><input type="textarea" name="tf_DireccionCliente" size="50"/></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="tf_EmailCliente"/></td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="text" name="tf_Telefono"/></td>
        </tr>
        <tr> 
            <td>Plan Contratado: </text></td>
            <td>
                <?php foreach ($planes as $value) { ?>
                    <input type='radio' name="r_PlanContratado"id='<?php echo $value->I_id; ?>' value='<?php echo $value->S_tipo; ?>'/>
                    <?php echo $value->S_tipo; ?>
                <?php } ?>

            </td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" name="b_RegCLMan" value="Registrar Cliente" onclick="return confCambioEstado()"/>


</center>
<script>
    function confCambioEstado(){
        return confirm('¿Seguro que desa Guardar los Cambios?');
    }
</script>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>