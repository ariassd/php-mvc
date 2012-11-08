<?php
$g_tituloPagina = 'Actualizar Informacion Cliente';
$g_formAction = "Clientes.php?vista=ClienteActualizaInformacionConf";
ob_start();
?>
<center>
    <input type="hidden" value="1" name="enviar" />
    
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos del cliente
            </th>
        </tr>
        <tr>
            <td>Codigo de Pais:</td>
            <td><input type="text" name="tf_CodPais" size="3" readonly="true" value="SJO"/>
                Número de Casillero: 
                <input type="text" name="tf_NumCasillero" size="4" readonly="true" value="1"/>
                Código de tienda: 
                <input type="text" name="tf_CodTienda" size="4" readonly="true" value="1"/></td>
        </tr>
        <tr>
            <td>Identificacion: </td>
            <td><input type="text" name="tf_IDCliente" size="15" readonly="true" value="1-2222-333333"/></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="tf_NombreCliente" size="15" readonly="true" 
                       value="<?php if (isset($cl1E) != NULL) { echo $cl1E->getS_nombre();} ?>" value="Cliente x"/></td>
        </tr>
        <tr>
            <td>Apellido1:</td>
            <td><input type="text" name="tf_ApellidoCliente1" size="15" readonly="true"  value="A1"/></td>
        </tr>
        <tr>
            <td>Apellido 2: </td>
            <td><input type="text" name="tf_ApellidoCliente2" size="15"  readonly="true"  value="A2"></td>
        </tr>
        <tr>
            <td>Dirección: </td>
            <td><input type="textarea" name="tf_DireccionCliente" size="50" class="validate[required]" value="Direccion del cliente"/></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="tf_EmailCliente" class="validate[required,custom[email]]" value="qq@busbus.com"/></td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="text" name="tf_Telefono" class="validate[required]" value="888-999"/></td>
        </tr>
        <tr> 
            <td>Plan Contratado: </td>
            <td>
                <fieldset>
                    <?php $i = 0; foreach ($planes as $value) { ?>
                        <input type='radio' name="r_PlanContratado" id='r_PlanContratado' value='<?php echo $value->S_tipo; ?>' disabled="true" checked="<?php if($i==0) {echo "true"; }else { echo "false"; } ?>"/>
                        <?php echo $value->S_tipo; ?>
                    <?php 
                    
                    $i++;
                    } ?>
                </fieldset>
            </td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">

            </th>
        </tr>
    </table>
    
    <br>
    <input type="submit" onclick="pregunta()" value="Actualizar Informacion"/>  
</center>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>