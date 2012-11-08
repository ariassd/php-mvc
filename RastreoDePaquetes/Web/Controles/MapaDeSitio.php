
<div id="mapadesitio-barrasuperior"></div>
<div id="mapadesitio">
    <a href="javascript: history.go(-1)">Regresar</a>||
    <?php
        if (function_exists('CurrentController')) {
    ?>
    <a href="javascript:return(false)"><?php echo CurrentController(); ?></a>
    <span>></span>
    <!--<a href="javascript:return(false)"><?php echo CurrentViewOfController(); ?></a>
    <span>></span>-->
    <a href="javascript:return(false)"><?php echo $g_tituloPagina; ?></a>
    <?php } ?>
</div>
