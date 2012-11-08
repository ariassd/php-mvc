<?php
$g_tituloPagina = 'Agregar Nueva Tienda';
    $g_formAction = "Tiendas.php?vista=AgregarTiendaConf";
    ob_start();
?>
<center>
<table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos de la Tienda
            </th>
        </tr>
        <tr>
            <td>Codigo de Tienda:</td>
            <td><input type="text" name="tf_CodTienda" size="5"/></td>
        </tr>
        <tr>
            <td>Codigo Pais:</td>
            <td><input type="text" name="tf_Pais" size="5"/></td>
        </tr>
        <tr>
           <td>Dirección:</td>
           <td><input type="text" name="tf_DireccionTienda" size="30"/></td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="text" name="tf_TelefonoTienda" size="10"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="tf_EmailTienda"/></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td>
                <label for="r_EstadoActivo">Activo</label>
                <input id="r_EstadoActivo" type="radio" name="r_Estado" value="1"/>
                <label for="r_EstadoInActivo">Inactivo</label>
                <input id="r_EstadoInActivo" type="radio" name="r_Estado" value="0"/>
            </td>
        </tr>
        <tr><th class="lineaFin" colspan="2"></th></tr>
    </table>
    <input type="submit" name="b_AgregarTienda" value="Agregar Tienda"/>
</div>

</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
    
?>