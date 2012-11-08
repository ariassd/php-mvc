<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */

    $g_tituloPagina = 'Desactivar Estados';
    $g_formAction = "";
    ob_start();
    ?>
<center>
    <?php if (isset($mensage)) { ?>
    Confirmacion: <br/>
    <div style="color:red;font-size: 18px"><?php echo $mensage; ?></div>
    <br/>
    <?php } ?>
    
    <table class="vistaDetalle">
        <tr>
            <th class="nombreFormulario" colspan="2">Nuevo estado</th>
        </tr>
        <tr>
            <td>Nuevo Estado</td>
            <td><input type="text" name="tf_EstadoNuevo"/></td>
        </tr>
        <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
    </table>
      <br/>
      <?php if (isset($mensage)) { ?>
        <a href="Manifiestos.php?vista=MantenimientoDeEstados" >Terminar</a>
      <?php } else { ?>
        <input type="submit" name="b_AgragarEstado" value="Agregar Estado" onclick="return confCambioEstado()"/>
      <?php } ?>
      
</center>
 <script>
        function confCambioEstado(){
            return confirm('¿Seguro que desa Agregar este estado?')
        }
    </script>
    <?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>