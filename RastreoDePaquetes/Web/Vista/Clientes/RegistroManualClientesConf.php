<?php
    $g_tituloPagina = 'Registro Manual de Clientes';
    $g_formAction = "Clientes.php?vista=RegistroClientesManual";
    ob_start();
    
?>
<?php
if($_POST["tf_CodPais"]!=null&&$_POST["tf_NumCasillero"]!=null&&$_POST["tf_CodTienda"]!=null&&$_POST["tf_IDCliente"]!=null&&$_POST["tf_NombreCliente"]!=null&&$_POST["tf_ApellidoCliente"]!=null){
    $o_clienteTemp=new Cliente();
    $o_clienteTemp->setS_nombre($_POST["tf_NombreCliente"]);
    $o_clienteTemp->setS_apellidos($_POST["tf_ApellidoCliente"]);
    $o_clienteTemp->setS_codigopais($_POST["tf_CodPais"]);
    $o_clienteTemp->setI_numcasillero($_POST["tf_NumCasillero"]);
    $o_clienteTemp->setO_codigotienda($_POST["tf_CodTienda"]);
    $o_clienteTemp->setS_direccion($_POST["tf_DireccionCliente"]);
    $o_clienteTemp->setS_telefono($_POST["tf_Telefono"]);
    $o_clienteTemp->setS_email($_POST["tf_EmailCliente"]);
    $o_clienteTemp->setS_plancontratado($_POST["r_PlanContratado"]);
    //ClientesBL::InsertarCliente_o($o_clienteTemp);
    echo"<br/>
            <br/>
    <center>
            <table>
                <tr>
                    <td><h3>Nombre: </h3> $o_clienteTemp->S_nombre $o_clienteTemp->S_apellidos</td>
                </tr>
                <tr>
                    <td><h3>Codigo de tienda: </h3> $o_clienteTemp->O_codigotienda</td>
                </tr>
                <tr>
                    <td><h3>Codigo de Pais: </h3> $o_clienteTemp->S_codigopais</td>
                </tr>
                <tr>
                    <td><h3>Numero de Casillero: </h3> $o_clienteTemp->I_numcasillero</td>
                </tr>
                <tr>
                    <td><h3>Direccion: </h3> $o_clienteTemp->S_direccion</td>
                </tr>
                <tr>
                    <td><h3>Telefono: </h3> $o_clienteTemp->S_telefono</td>
                </tr>
                <tr>
                    <td><h3>Email: </h3> $o_clienteTemp->S_email</td>
                 </tr>
                 <tr>
                    <td><h3>Plan Contratado: </h3> $o_clienteTemp->S_plancontratado</td>
               </tr>
            <table>
       
        </center>";
}else{
    echo"<center><h3>Campos obligatorios vacios, Click <a href='http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Clientes.php?vista=BuscarClientes'>aqui</a> Para Volver</h3></center>";
}
?>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>