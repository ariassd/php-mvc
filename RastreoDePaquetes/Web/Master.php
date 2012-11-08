<?php 
if(!isset($_SESSION)){
session_start();
}
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.Configuracion.ConfigurationSettings");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $g_tituloPagina; ?></title>
        <link rel="stylesheet" href="<?php echo path('Recursos/Estilos/base.css');?>" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo path('Recursos/Estilos/smoothness/jquery-ui-1.8.24.custom.css');?>" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo path('Recursos/Estilos/jQueryValidationEngine/validationEngine.jquery.css');?>" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo path('Recursos/Estilos/jQueryValidationEngine/template.css');?>" type="text/css" media="all" />
        
        <script type="text/javascript" src="<?php echo path('Recursos/Jslibs/jquery-1.8.2.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo path('Recursos/Jslibs/jquery-ui-1.8.24.custom.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo path('Recursos/Jslibs/jQueryValidationEngine/jquery.validationEngine.js');?>"></script>
        <script type="text/javascript" src="<?php echo path('Recursos/Jslibs/jQueryValidationEngine/languages/jquery.validationEngine-es.js');?>"></script>
        <script type="text/javascript" src="<?php echo path('Recursos/Estilos/menu.js');?>"></script>
    </head>
    <body>
        <?php import("RastreoDePaquetes.Web.Controles.MenuHorizontal");?>
        <?php import("RastreoDePaquetes.Web.Controles.MapaDeSitio", array('g_tituloPagina'=> $g_tituloPagina));?>
        <?php if (isset($menuVertical)) import("RastreoDePaquetes.Web.Controles.MenuVertical", array('menuVertical'=>$menuVertical));?>
        
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#ctl00").validationEngine();
            });
	</script>
        <div class="BarraDeIdioma">
            <?php include_once 'Controles/Idiomas.php'; ?>
        </div>
        <table style="height:20px">
            <tr>
                <td>
                    <img src="<?php echo path('Recursos/Imagenes/mbelogoblack.png');?>" width="100px" alt='MBE' />
                </td>
                <td>
                    <span class="nombreSitioMBE"><?php echo ConfigurationSettings::GetApplicationSetting("NombreDeLaEmpresa"); ?></span>
                    <span class="nombreSitioSistema"><?php echo ConfigurationSettings::GetApplicationSetting("NombreDelSistema"); ?></span>
                </td>
            </tr>
        </table>
        <div id="UIAyudaAusuario" style="display: none" title="Ayuda"> </div>
        <form method="post" action="<?php echo $g_formAction?>" id="ctl00" enctype="multipart/form-data" >
            <?php HtmlControles::Iniciar(); ?>
            <div id="wrapper">
                <br/>
                <br/>
                <br/>
                <h1 style="text-align:center"><?php echo $g_tituloPagina; ?></h1>
                <br/>
                <div id="content">
                    <?php
                    if ($g_contenido != null) {
                        echo $g_contenido;
                    } else {
                        header("location:Index.php");
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php include_once 'Controles/PieDePagina.php'; ?>
    </body>
</html> 
