<?php session_start(); ?>
<?php 
include("../../MbeFramework/MbeFramework.php"); 
import("MbeFramework.Html.HtmlControles.HtmlControles");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $g_tituloPagina; ?></title>
    </head>
    <body>
        Mmenu
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
        Footer
    </body>
</html>