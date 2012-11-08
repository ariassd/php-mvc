<?php
$g_tituloPagina = 'Registro de Prealertas';
$g_formAction = "PreAlertas.php?vista=RegistroPreAlerta";
ob_start();
?>
<center>
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">
            Datos de la Pre-Alerta
            </th>
        </tr>

        <tr>
            <td>Descripcion:</td>
            <td><textarea name="direccion" resize:none cols="30" rows="2" wrap="physical"></textarea></td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td><input type="text" name="tf_valor" size="12"/></td>
        </tr>
        <tr>
            <td>Fecha Ingreso:</td>
            <td><input class="datepicker" type="text" name="tf_fechaIngreso" size="12"/></td>
        </tr>
        <tr>
            <td>Imagen Archivo:</td>
            <td><input type="file" name="imagen" size="30"/></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
    <br/>
    <br/>
    <input type="submit" onclick="return confCambioEstado()" name="b_preAlerta" value="Registrar Pre-Alerta"/>
    <input type="reset" name="b_preAlertaClean" value="Cancelar"/> 
</center>
<script>
    $(function() {
        $( ".datepicker" ).datepicker();
    });
    
    function confCambioEstado(){
        return confirm('¿Seguro que desa Guardar los Cambios?');
    }
</script>
<?php

$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>