<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("../../MbeFramework/MbeFramework.php");
//import("RastreoDePaquetes.Negocio.BannersBL");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.MbeController");
/**
 * Controlador para la gestiion de idiomas
 * Esta es la clase controlador para las GUI's de Idiomas
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Idiomas
 */

function Index() {
    View();
}

function ListarIdiomas() {
    
    $archivos = array();
    $dir = 'Recursos/Idiomas';
    $directorio=opendir($dir); 
    
    while ($archivo = readdir($directorio)) { 
        if ($archivo != '.' && $archivo != '..' && $archivo != '')
            $archivos[] = $archivo;
    } 
    closedir($directorio); 
    
    
    View('', array('archivos'=>$archivos,'ubicacion'=>$dir));
}

function CargarIdioma() {
    
    $mensaje = '';
    $nombreArchivo = '';
    $subio = false; 
    
    if(isset($_GET['paso']) && $_GET['paso'] == '2') {
        if (is_uploaded_file($_FILES['archivo']['tmp_name'])) { 
            if($_FILES['archivo']['size'] < 85000) { 
                if($_FILES['archivo']['type']=="application/x-php") { 
                    //copy($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); 
                    $nombreArchivo = $_FILES['archivo']['name'];
                    $subio = true; 
                }
            } 
        } 

        if($subio) { 
           $mensaje = "El archivo subio con exito"; 
        } else { 
           $mensaje = "El archivo no cumple con las reglas establecidas"; 
        }
     } 
    View('',array('mensaje'=>$mensaje,'nombreArchivo'=>$nombreArchivo));
}

?>
