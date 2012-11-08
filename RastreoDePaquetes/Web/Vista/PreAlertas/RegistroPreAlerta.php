<?php 

$g_tituloPagina = 'Detalle Pre-Alerta';
$g_formAction = "PreAlertas.php?vista=InsertarPreAlerta";
ob_start();
?>

 
<?php
    $name =  '';
    $type =  '';
    $size =  '';
    $temp =  '';
    $error = '';
    if (isset($_FILES["imagen"])) {
        $name =  $_FILES["imagen"]["name"];
        $type =  $_FILES["imagen"]["type"];
        $size =  $_FILES["imagen"]["size"];
        $temp =  $_FILES["imagen"]["tmp_name"];
        $error = $_FILES["imagen"]["error"];
    } else {
        $error = 1;
    }
       
    if($error > 0)
    {
        echo 'Error al cargar la imagen! codigo: '. $error; 
        
    }
    else
    {
        if($type == "image/png" or $type == "image/jpg" or $type == "image/gif" or $type == "image/jpeg"){
            move_uploaded_file($temp,"Vista/PreAlertas/uploaded/".$name);
           
           ?>
<center>
            <table class="vistaDetalle">
                <tr>
                    <th class="nombreFormulario" colspan="2">
                        Detalles de la Pre-Alerta
                    </th>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td><?php echo $_POST["direccion"];?></td>
                </tr>
                <tr>
                    <td>Valor:</td>
                    <td><?php echo $_POST["tf_valor"];?></td>
                </tr>
                <tr>
                    <td>Fecha Ingreso:</td>
                    <td><?php echo $_POST["tf_fechaIngreso"];?></td>
                </tr>
                <tr>
                    <td>Imagen Archivo:</td>
                    <td>
                        <?php 
                        
                        echo "<img src='Vista/PreAlertas/uploaded/$name'>"; 
                        
                        ?>
                    </td>
                </tr>
                <tr>
                    <th class="lineaFin" colspan="2">
                    </th>
                </tr>
            </table>
            <br/>
            <br/>
            <input type="submit" name="b_preAlertaNew" value="Nueva Pre-Alerta"/>    
 </center>
<?php            
           
           
        }
        else{
            echo 'Formato de imagen incorrecto...';
        }
    }
?>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>