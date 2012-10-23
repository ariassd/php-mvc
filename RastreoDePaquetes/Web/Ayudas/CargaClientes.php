<?php

$ayuda = isset($_GET["ayuda"]);

if ($ayuda == "Carga") {
    echo 'Seleccione el arhivo que desea cargar con extension TXT';
} else {
    echo 'Carga de Clientes';
}

?>
