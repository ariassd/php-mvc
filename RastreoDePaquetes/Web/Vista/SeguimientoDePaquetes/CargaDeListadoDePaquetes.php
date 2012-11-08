<?php
/**
 * Vista detalle para la entidad de Tiendas
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Tienda.DetalleTiendas
 */
$g_tituloPagina = 'Carga Listado Paquetes';
$g_formAction = "";
ob_start();
?>
<center>
    <?php if (isset($s_pasoDelProceso) && $s_pasoDelProceso == '') { ?>
    <table class="vistaDetalle">
        <tr>
            <th colspan="2" class="nombreFormulario">Carga de listado de paquetes</th>
        </tr>
        <tr>
            <td>Seleccione el archivo que desea cargar:</td>
            <td>
                <input type="file" name="datafile" size="40" class="validate[required]">
                <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "SeguimientoDePaquetes.php?ayuda=Carga") ?>
            </td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2"></th>
        </tr>
    </table>
        
        <br/>
        <div class="navegacion">
            <?php $g_formAction = "?vista=CargaDeListadoDePaquetes&paso=lista"; ?>
            <input type="submit" value="Siguiente" />
            
        </div>

    <?php } ?>

    <?php if (isset($s_pasoDelProceso) && $s_pasoDelProceso == 'lista') { ?>
        <h3>
            Lista de paquetes que se van a cargar: <br/>
            Seleccione los paquetes que van a ser cargados al sistema
        </h3>
        <br/>
        <?php import("RastreoDePaquetes.Web.Vista.SeguimientoDePaquetes._ListaDePaquetes",array('Modo'=>'Edit'));?>
        <script type="text/javascript" language="javascript">
            $('#ch_todos').change(function(){
                estado = $('#ch_todos').attr('checked');
                if (estado=='checked')
                    $('input[type="checkbox"][id!="ch_todos"]').attr('checked',estado );
                else 
                    $('input[type="checkbox"][id!="ch_todos"]').removeAttr('checked');
            });
        </script>
        <div class="navegacion">
            
            <a href="?vista=CargaDeListadoDePaquetes&paso=">Regresar</a>
            <?php $g_formAction = "?vista=CargaDeListadoDePaquetes&paso=guardar"; ?>
            <input type="submit" value="Siguiente" />
        </div>
    <?php } ?>

    <?php if ($s_pasoDelProceso == 'guardar') { ?>
        Confirmacion:
        <div style="color:red;font-size: 18px">La lista de paquetes fue guardada con éxito</div>
        <br/>
        <?php import("RastreoDePaquetes.Web.Vista.SeguimientoDePaquetes._ListaDePaquetes",array('Modo'=>'View'));?>
        <div class="navegacion">
            <a href="index.php">Terminar</a>
        </div>
    <?php } ?>
</center>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>
