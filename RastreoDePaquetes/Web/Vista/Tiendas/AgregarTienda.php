<?php
$g_tituloPagina = 'Agregar Nueva Tienda';
    $g_formAction = "Tiendas.php?vista=AgregarTienda.php";
    ob_start();
?>
<center><h1>Agregar Tienda</h1>
<br/>
<br/>
<br/>
<br/>
<div>
    <table>
        <tr>
            <td><h3>Codigo de Tienda: </h3></td>
            <td><input type="text" name="tf_CodTienda"/></td>
        </tr>
        <tr>
            <td><h3>Pais: </h3></td>
            <td><input type="text" name="tf_Pais"/></td>
        </tr>
        <tr>
           <td><h3>Dirección: </h3></td>
           <td><input type="text" name="tf_DireccionTienda" size="25"</td>
        </tr>
        <tr>
            <td><h3>Telefono: </h3></td>
            <td><input type="text" name="tf_TelefonoTienda"</td>
        </tr>
        <tr>
            <td><h3>Estado: </h3></td>
            <td><input type="radio" name="r_Estado" value="1">Activo</input>
            <input type="radio" name="r_Estado" value="0">Inactivo</input></td>
        </tr>
    </table>
</div>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>