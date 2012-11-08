<?php 

$g_tituloPagina = 'Detalle de la Publicidad';
$g_formAction = "Banners.php?vista=IngresarBanner";
ob_start();
?>

 
<?php
    $name =  $_FILES["tf_imagenPublicidad"]["name"];
    $type =  $_FILES["tf_imagenPublicidad"]["type"];
    $size =  $_FILES["tf_imagenPublicidad"]["size"];
    $temp =  $_FILES["tf_imagenPublicidad"]["tmp_name"];
    $error = $_FILES["tf_imagenPublicidad"]["error"];
       
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
                        Detalles de la Publicidad
                    </th>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td><?php echo $_POST["tf_descripcionBanners"];?></td>
                </tr>
                <tr>
                    <td>Fecha Inicio:</td>
                    <td><?php echo $_POST["tf_fechaInicioPublicacion"];?></td>
                </tr>
                <tr>
                    <td>Fecha Fin:</td>
                    <td><?php echo $_POST["tf_fechaFinPublicacion"];?></td>
                </tr>
                <tr>
                    <td>Texto Publicitario:</td>
                    <td><?php echo $_POST["tf_textoPublicitario"];?></td>
                </tr>
                <tr>
                    <td>Link Publicidad:</td>
                    <td><?php echo $_POST["tf_linkPublicidad"];?></td>
                </tr>
                
                <tr>
                    <td>Estado:</td>
                    <td><?php echo $_POST["activo"];?></td>
                </tr>
                <tr>
                    <td>Imagen Publicidad:</td>
                    <td>
                        <?php 
                        
                        echo "<img src='Vista/PreAlertas/uploaded/$name'>"; 
                        
                        ?>
                    </td>
                </tr>
                <tr><th class="lineaFin" colspan="2"></th></tr>
            </table>
            <br/>
            <br/>
            <input type="submit" name="b_preAlertaNew" value="Nueva Publicidad"/>    
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
