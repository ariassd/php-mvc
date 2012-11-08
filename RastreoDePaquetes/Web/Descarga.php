<?php
if (isset($_GET['tipo']) && isset($_GET['id'])){
    $tipoArchivo = $_GET['tipo'];
    if ($tipoArchivo == 'lang') {
        $rutaUbicacion = 'Recursos/Idiomas';
    }
    $archivo = $_GET['id'];
    $enlace = $rutaUbicacion."/".$archivo;
    header ("Content-Disposition: attachment; filename=".$archivo." "); 
    header ("Content-Type: application/octet-stream");
    header ("Content-Length: ".filesize($enlace));
    readfile($enlace);
}
?>
