<?php

    $g_tituloPagina = 'Actualización de datos de clientes';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
?>

<center><h1>Actualizacion de Datos de Cliente</h1>
    <br/>
    <input type="submit" name="b_ActDatCl" value="Actualizar Cliente"/> <input type="submit" name="b_EliominarCl" value="Eliminar Cliente"/>
     <br/>
      <br/>
    <table>
        <tr>
            <td><text>Codigo de Pais: </text></td>
             <td><input type="text" name="tf_CodPais" size="3"/>
             <text>Número de Casillero: </text>
             <input type="text" name="tf_NumCasillero" size="4"/>
             <text>Código de tienda: </text>
            <input type="text" name="tf_CodTienda" size="4"/></td>
         </tr>
          <tr>
              <td><text>Identificacion: </text></td>
              <td><input type="text" name="tf_IDCliente" size="15"/></td>
                </tr>
                <tr>
                    <td><text>Nombre: </text></td>
                    <td><input type="text" name="tf_NombreCliente" size="15" value="<?php if(isset($cl1E) != NULL) {echo $cl1E->getS_nombre();}?>"/></td>
                </tr>
                <tr>
                    <td><text>Apellidos: </text></td>
                    <td><input type="text" name="tf_ApellidoCliente" size="30"/></td>
                </tr>
                <tr>
                    <td><text>Dirección: </text></td>
                    <td><input type="textarea" name="tf_DireccionCliente" size="50"/></td>
                </tr>
                <tr>
                    <td><text>Email: </text></td>
                    <td><input type="text" name="tf_EmailCliente"/></td>
                </tr>
                <tr>
                    <td><text>Telefono:</text></td>
                    <td><input type="text" name="tf_Telefono"/></td>
                </tr>
                <tr> 
                    <td><text>Plan Contratado: </text></td>
                    <td>
                    <?php foreach ($planes as $value) { ?>
                        <input type='radio' name="r_PlanContratado"id='<?php echo $value->I_id; ?>' value='<?php echo $value->S_tipo; ?>'/>
                        <?php echo $value->S_tipo; ?>
                    <?php } ?>
                        
                    </td>
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