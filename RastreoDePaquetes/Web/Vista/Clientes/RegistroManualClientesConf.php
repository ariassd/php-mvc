<?php
    $g_tituloPagina = 'Registro Manual de Clientes';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
?>
<?php
if($_POST["tf_CodPais"]!=null&&$_POST["tf_NumCasillero"]!=null&&$_POST["tf_CodTienda"]!=null&&$_POST["tf_IDCliente"]!=null&&$_POST["tf_NombreCliente"]!=null&&$_POST["tf_ApellidoCliente1"]!=null){
    $o_clienteTemp=new Cliente();
    $o_clienteTemp->setS_nombre($_POST["tf_NombreCliente"]);
    $o_clienteTemp->setS_apellidos($_POST["tf_ApellidoCliente1"]);
    $o_clienteTemp->setS_codigopais($_POST["tf_CodPais"]);
    $o_clienteTemp->setI_numcasillero($_POST["tf_NumCasillero"]);
    $o_clienteTemp->setO_codigotienda($_POST["tf_CodTienda"]);
    $o_clienteTemp->setS_direccion($_POST["tf_DireccionCliente"]);
    $o_clienteTemp->setS_telefono($_POST["tf_Telefono"]);
    $o_clienteTemp->setS_email($_POST["tf_EmailCliente"]);
    $o_clienteTemp->setS_plancontratado($_POST["r_PlanContratado"]);
    //ClientesBL::InsertarCliente_o($o_clienteTemp);?>
    <center>
            <table  class="vistaDetalle">
                <tr>
                    <th class="nombreFormulario" colspan="2">
                        Datos del cliente
                    </th>
                </tr>
                <tr>
                    <td>Nombre: </td><td> <?php echo$o_clienteTemp->S_apellidos?>, <?php echo $o_clienteTemp->S_nombre ?></td>
                </tr>
                <tr>
                    <td>Codigo de tienda:</td><td>  <?php echo $o_clienteTemp->O_codigotienda ?></td>
                </tr>
                <tr>
                    <td>Codigo de Pais: </td><td> <?php echo  $o_clienteTemp->S_codigopais?></td>
                </tr>
                <tr>
                    <td>Numero de Casillero: </td><td> <?php echo $o_clienteTemp->I_numcasillero?></td>
                </tr>
                <tr>
                    <td>Direccion:</td><td>  <?php echo $o_clienteTemp->S_direccion?></td>
                </tr>
                <tr>
                    <td>Telefono:</td><td>  <?php echo $o_clienteTemp->S_telefono?></td>
                </tr>
                <tr>
                    <td>Email: </td><td> <?php echo $o_clienteTemp->S_email?></td>
                 </tr>
                 <tr>
                    <td>Plan Contratado: </td><td> <?php echo $o_clienteTemp->S_plancontratado?></td>
               </tr>
               <tr>
                    <th class="lineaFin" colspan="2">

                    </th>
                </tr>
            </table>
        <br/>
        <input type="submit" name="b_ConfGuardarCliente" value="Confirmar" onclick="return confCambioEstado()"/>
        </center>
<?php }else{?>
    <center>Campos obligatorios vacios, Click <a href='Clientes.php?vista=RegistroClientesManual'>aqui</a> Para Volver</center>
<?php } ?>

<script>
    function confCambioEstado(){
        return confirm('�Seguro que desa Guardar los Cambios?');
    }
</script>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>