<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */
$g_tituloPagina = 'Modificacion de Estados';
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
            <th colspan="2" class="nombreFormulario">Detalle de manifiesto</th>
        </tr>
        <tr>
            <td>Estado a Modificar</td>
            <td><select id="s_Estados" onchange="document.getElementById('tf1').value = this.options[this.selectedIndex].text">
                    <option></option>
                    <?php foreach ($Estados as $value) { ?>
                        <option><?php echo $value ?></option>
                    <?php } ?>
                </select></td>
        </tr>
        <tr>
            <td>Nuevo Valor</td>
            <td><input type="text" name="tf_modificacion" id="tf1"/></td>
        </tr>
        <tr>
            <th colspan="2" class="lineaFin"></th>
        </tr>
    </table>
    <br/>

    <br/>
    <br/>
    <?php if (isset($mensage)) { ?>
        <a href="Manifiestos.php?vista=MantenimientoDeEstados" >Terminar</a>
    <?php } else { ?>
        <input type="submit" name="b_ModificarEstado" value="Guardar Cambios" onclick="return confCambioEstado()"/>
    <?php } ?>

</center>
<script>
    function confCambioEstado(){
        return confirm('¿Seguro que desa Guardar los Cambios?')
    }
</script>
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>