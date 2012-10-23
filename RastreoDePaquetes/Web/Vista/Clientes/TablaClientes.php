<?php

    $g_tituloPagina = 'Buscar Clientes';
    $g_formAction = "";
    ob_start();
    
?>
<?php
    if($_POST["tf_NumCasillero"]!=null&&$_POST["tf_CodPais"]!=null){?>
        <center>
            <br/>
            <br/>
            <br/>
            <table class='Lista' border='1'>
                    <th>Codigo de pais</th>
                    <th>Numero de Casillero</th>
                    <th>Nombre</th>
                    
                    <?php foreach($Resultados as $valor){ ?>
                    <tr>
                        <td><?php echo $valor->s_codigoPais?></td>
                        <td><?php echo $valor->i_numCasillero?></td>
                        <td><?php echo $valor->s_apellidos?> , <?php echo $valor->s_nombre?> </td>
                        <td><a href="Clientes.php?vista=DetalleClientes">Ver Detalles</a></td>
                    </tr>
                   <?php }?>
              </table></center>
  <?php  }else{
        echo "<center><h3>Campos vacios, Click <a href='http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Clientes.php?vista=BuscarClientes'>aqui</a> Para Volver</h3></center>";
    }
?>





<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>