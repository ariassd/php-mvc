<?php
/**
 * Vista Carga de archivos de idiomas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Idiomas.CargarIdioma
 */

    $g_tituloPagina = 'Carga de archivo de idioma';
    $g_formAction = "";
    ob_start();
    
?>

<center>
    <?php if(!isset($_GET['paso']) || $_GET['paso'] == '') { ?>
        <text>Seleccione el archivo de idioma que desea cargar: </text>
        <br/>
        <input type="file" id="archivo" name="archivo" size="20" class="validate[required]"/>
        <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "Idiomas.php?ayuda=Carga") ?>
        
        <br/><br/>
        <?php $g_formAction = "Idiomas.php?vista=CargarIdioma&paso=2"; ?>
        <input type="submit" name="boton" value="Cargar Idioma"/>
    <?php } ?> 
    <?php if(isset($_GET['paso']) && $_GET['paso'] == '2') { ?>
        <?php if ( $nombreArchivo == '' ) { ?>
            
            <?php echo $mensaje; ?>
            <input type="button" value="Regresar" onclick="history.go(-1)"/>
        <?php } else { ?>
            <span style="font-weight: bold; font-size: 14px">
            El archivo de idioma que va a cargar es: <?php echo $nombreArchivo; ?>.
            </span>
            <br/>
            <span style="color: red; font-weight: bold; font-size: 14px">Esta seguro que desar cargarlo?</span>
            <br/>
            <?php $g_formAction = "Idiomas.php?vista=CargarIdioma&paso=3"; ?>
            <input type="submit" value="Cargar Idioma"/>
        <?php } ?>
    <?php } ?>
    <?php if(isset($_GET['paso']) && $_GET['paso'] == '3') { ?>
        Archivo cargado con exito.
        <?php $g_formAction = "?vista=ListarIdiomas"; ?>
        <input type="submit" value="Terminar"/>
    <?php } ?>
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Vista/Idiomas/Master.php";
?>