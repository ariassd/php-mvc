<?php

$ayuda = isset($_GET["ayuda"]);

if ($ayuda == "Carga") {
    echo 'Seleccione el arhivo que desea cargar';
} else {
    echo 'Carga de listado de paquetes';
}

?>

