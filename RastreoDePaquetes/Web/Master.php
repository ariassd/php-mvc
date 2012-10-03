<?php session_start(); ?>
<?php 
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Html.HtmlControles.HtmlControles");
import("MbeFramework.Configuracion.ConfigurationSettings");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $g_tituloPagina; ?></title>
        <link rel="stylesheet" href="Recursos/Estilos/base.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Recursos/Estilos/smoothness/jquery-ui-1.8.24.custom.css" type="text/css" media="all" />
        <script type="text/javascript" src="Recursos/Jslibs/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="Recursos/Jslibs/jquery-ui-1.8.24.custom.min.js"></script>
    </head>
    <body>
        <div class="BarraDeIdioma">
            <form method="post" action="" >
                <?php HtmlControles::Iniciar(); ?>
                <?php include_once 'Controles/Idiomas.php'; ?>
            </form>
        </div>
        <div id="UIAyudaAusuario" style="display: none" title="Ayuda">
        </div>
        <h1><?php echo ConfigurationSettings::GetApplicationSetting("NombreDelSistema"); ?></h1>
        <form method="post" action="<?php echo $g_formAction?>" id="ctl00">
            <?php HtmlControles::Iniciar(); ?>
            
            <div id="wrapper">
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
        
    </body>
</html> 