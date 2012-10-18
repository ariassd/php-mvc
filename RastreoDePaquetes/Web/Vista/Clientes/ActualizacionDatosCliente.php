<?php

    $g_tituloPagina = 'Actualización de datos de clientes';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
?>
<center>
    <div id="busqActDatCl">
        <div id="paramBusquedaActDatCl">
            <table>
                <tr>
                    <td>Cod. Pais: </td>
                    <td><input type="text" name="tf_CodPais" size="3"/></td>
                </tr>
                 <tr>
                    <td>Num. Casillero: </td>
                    <td><input type="text" name="tf_NumCasillero" size="4"/></td>
                </tr>
            </table>
            </br>
            </br>
            </br>
            <input type="submit" name="b_BuscarClientes" onsubmit="" value="Buscar"/>
        </div>
        <div id="tablaResActDatCl">
            <table border="2" bgcolor="silver"  class="Lista">
                <th>SJO - ####</th>
                <th> Nombre </th>
                <th></th>
                <?php foreach ($Resultados as $value) { ?>
                    <tr>
                        <td><text><?php echo $value->getS_codigopais();echo "-"; echo $value->getI_numcasillero();?><text/></td>
                        <td><text><?php echo $value->getS_nombre();?><text/></td>
                        <td>
                            <a href="?clienteE=1">Seleccionar</a>
                        </td>
                   <tr/>
                 <?php } ?>
            </table>
        </div>
        <br/>
        
    </div>
 <div>
        
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
            <input type="submit" name="b_ActDatCl" value="Actualizar Cliente"/>
        
    </div>

</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>