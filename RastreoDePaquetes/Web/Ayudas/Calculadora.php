<?php
$ayuda = ($_GET["IdAyuda"]);

if ($ayuda == 'tipoArticulo') {
    echo "Seleccione la categoria en donde el articulo que desa importar correcponde. <b>Por ejemplo</b> Lavadoras-> Linea Blanca, IPads->Tablets etc...";
} 

if ($ayuda == 'planContratado') {
    echo "Seleccione la opcion deacuerdo al plan que ha contratado. Si <b>no</b> ha contratado ningun plan seleccione la opcion correspondiente.";
} 

?>