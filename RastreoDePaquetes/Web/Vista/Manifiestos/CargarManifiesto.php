<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Carga de Manifiestos por Archivo DBF';
    $g_formAction = "Manifiestos.php?vista=ManifiestoCargado";
    ob_start();
    
?>
<center>
    <table class="vistaDetalle">
        
        <tr>
            <th class="nombreFormulario" colspan="2">
                Datos a cargar
            </th>
        </tr>
        <tr>
            <td>Archivo DBF:</td>
            <td><input type="file" id="archivo" name="archivo" size="40"/>
            <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "CargaManifiestos.php?ayuda=Carga") ?>
            </td>
            </tr> 
            <tr>
                <td>Fecha ingreso:</td>
                <td><input type="text" class="datepicker" name="tf_fechaIngreso" size="12"/></td>
            </tr> 
            <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>                   
            </table>
             <br/>
             <br/>
            <input type="submit" name="b_RegCLMan" onclick="cargaarchivo()" value="Cargar Manifiesto"/>    
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