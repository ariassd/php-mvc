<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Registro Manual de Clientes';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
?>


<center>
    <div id="TituloRegClMan">
    <h1>Registro Manual de Clientes</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        
            <table>
                <tr>
                    <td><text>Codigo de Pais: </text></td>
                    <td><input type="text" name="tf_CodPais" size="3"/>
                    <text>Número de Casillero: </text>
                    <input type="text" name="tf_NumCasillero" size="4"/></td>
                </tr>

                <tr>
                    <td><text>Nombre: </text></td>
                    <td><input type="text" name="tf_NombreCliente" size="15"/></td>
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
                    <?php foreach ($planes as $value) { ?>
                    <td>
                        <input type='radio' id='<?php echo $value->I_id; ?>' value='<?php echo $value->S_tipo; ?>'/>
                        <?php echo $value->S_tipo; ?>
                    </td>
 
                    <?php } ?>
                    </tr>
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" value="Registrar Cliente"/>
        
    </div>
    
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>