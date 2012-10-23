<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "";
ob_start();
    
?>
<center>
    <h1>Acceso por Modulos</h1>
    <br/>
    <br/>
    <table class="Lista" border="1">
        <th>Modulo</th>
        <th>Funcionalidad</th>
        <th>Dar Acceso</th>
        <tr>
            <td>Ingreso de Clientes</td>
            <td>
                <list>
                    <ul>Registro Manual de Clientes</ul>
                    <ul>Registro de Clientes por Archivo</ul>
            </td>
            <td><center><input type="checkbox" name="cb_SeleccionarIngCl"/></center></td>
        </tr>
        <tr>
            <td>Informacion de Clientes</td>
            <td>
                <list>
                    <ul>Busqueda de Clientes</ul>
                    <ul>Actualizacion de Datos</ul>
                    <ul>Listados de Clientes</ul>
                    <ul>Informacion detallada de Clientes</ul>
            </td>
            <td><center><input type="checkbox" name="cb_SeleccionarActCl"/></center></td>
        </tr>
        <tr>
            <td>Consulta Paquetes</td>
            <td>Consulta de Paquetes en transito y archivados</td>
            <td><center><input type="checkbox" name="cb_SeleccionarConsPaq"/></center></td>
        </tr>
        <tr>
            <td>Carga de Listado de Paquetes</td>
            <td>Carga diaria de los paq que ingresan a Miami</td>
            <td><center><input type="checkbox" name="cb_SeleccionarListPaq"/></center></td>
        </tr>
        <tr>
            <td>Manifiestos</td>
            <td>
                <list>
                    <ul>Registro de Manifiestos</ul>
                    <ul>Actualizacion de Estados de Manifiesto</ul>
                    <ul>Mantenimiento de Estados para Manifiestos</ul>
            </td>
             <td><center><input type="checkbox" name="cb_SeleccionarManif"/></center></td>
        </tr>
        <tr>
            <td>Idiomas</td>
            <td>
                <list>
                    <ul>Carga de Archivos de Idiomas</ul>
                    <ul>Descarga de Archivos de Idiomas</ul>
            </td>
            <td><center><input type="checkbox" name="cb_SeleccionarIdiomas"/></center></td>
        </tr>
        <tr>
            <td>Gestion de Banners</td>
            <td>Publicacion de imagenes y Publicidad</td>
            <td><center><input type="checkbox" name="cb_SeleccionarPublicidad"/></center></td>
        </tr>
        <tr>
            <td>Valores Arancelarios</td>
            <td>Modificacion de valores y Formulas para el calculo de aranceles</td>
            <td><center><input type="checkbox" name="cb_SeleccionarValAran"/></center></td>
        </tr>
        <tr>
            <td>Administracion de Usuarios</td>
            <td>
                <list>
                    <ul>Busqueda de Empleados</ul>
                    <ul>Listas de Empleados</ul>
                    <ul>Registro de nuevos empleados</ul>
                    <ul>Detalles de Empleados</ul>
                    <ul>Modificacione y elmininacion de empleados</ul>
                    <ul>Administracion de permisos</ul>
            </td>
            <td><center><input type="checkbox" name="cb_SeleccionarAdminEmp"/></center></td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <input type="submit" name="b_AsignarPermisos"/>
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>