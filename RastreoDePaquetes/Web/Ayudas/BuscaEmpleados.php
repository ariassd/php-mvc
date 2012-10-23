<?php

$ayuda = isset($_GET["ayuda"]);

if ($ayuda == "Carga") {
    
    echo "Opcion 'Buscar Todos'   = Cargara todos los empleados.";
    echo '<br>';
    echo "Opcion 'Identificacion' = Carga empleado el empledo con esa identificacion.";
    echo '<br>';
    echo "Opcion 'Apellido'       = Cargara todos los empleados con ese apellidos.";
    echo '<br>';
    echo "Opcion 'Nombre'         = Cargara todos los empleados con ese nombre.";
    
} else {
    echo 'Busca Empleados';
}

?>