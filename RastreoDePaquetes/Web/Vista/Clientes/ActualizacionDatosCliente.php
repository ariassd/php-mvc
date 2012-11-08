<?php

    $g_tituloPagina = 'Actualización de datos de clientes';
    $g_formAction = "Clientes.php?vista=ActualizacionDatosClienteConf";
    ob_start(); 
?>

<?php if ($actualizo) { ?>
    <script>
        alert('Cliente actualizado con exito');
    </script>
<?php } ?>

<center>
    <br/>
    <input type="submit" name="b_ActDatCl" value="Actualizar Cliente"/> <input type="submit" name="b_EliominarCl" value="Eliminar Cliente"/>
     <br/>
      <br/>
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos del cliente
            </th>
        </tr>
        <tr>
            <td>Codigo de Pais:</td>
            <td><input type="text" name="tf_CodPais" size="3" class="validate[required]" value="SJO"/>
                Número de Casillero: 
                <input type="text" name="tf_NumCasillero" size="4" class="validate[required]" value="123"/>
                Código de tienda: 
                <input type="text" name="tf_CodTienda" size="4" class="validate[required]" value="2"/></td>
        </tr>
        <tr>
            <td>Identificacion: </td>
            <td><input type="text" name="tf_IDCliente" size="15" class="validate[required]" value="1-2222-3333"/></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="tf_NombreCliente" size="15"  class="validate[required]" 
                       value="<?php if (isset($cl1E) != NULL) { echo $cl1E->getS_nombre();} ?>" value="Cliente x"/></td>
        </tr>
        <tr>
            <td>Apellido1:</td>
            <td><input type="text" name="tf_ApellidoCliente1" size="15" class="validate[required]" value="A1"/></td>
        </tr>
        <tr>
            <td>Apellido 2: </td>
            <td><input type="text" name="tf_ApellidoCliente2" size="15" class="validate[required]" value="A2"/></td>
        </tr>
        <tr>
            <td>Dirección: </td>
            <td><input type="textarea" name="tf_DireccionCliente" size="50" class="validate[required]" value="Lugar del mundo"/></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="tf_EmailCliente" class="validate[required,custom[email]]" value="Cliente@gmail.com"/></td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="text" name="tf_Telefono" class="validate[required]" value="8888-8888"/></td>
        </tr>
        <tr> 
            <td>Plan Contratado: </td>
            <td>
                <fieldset>
                    <?php foreach ($planes as $value) { ?>
                        <input type='radio' name="r_PlanContratado"id='<?php echo $value->I_id; ?>' value='<?php echo $value->S_tipo; ?>' class="validate[required] radio"/>
                        <?php echo $value->S_tipo; ?>
                    <?php } ?>
                </fieldset>
            </td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">

            </th>
        </tr>
    </table>
             <br/>
                <br/>
                <input type="submit" name="b_Guardar" value="Guardar Cambios"/>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>