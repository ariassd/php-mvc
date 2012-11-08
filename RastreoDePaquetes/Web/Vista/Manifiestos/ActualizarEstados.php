<?php
/**
 * Vista listado para la entidad de Manifiestos
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Manifiesto.ListarManifiestos
 */

    $g_tituloPagina = 'Actualizacion de Estados';
    $g_formAction = "Manifiestos.php?vista=ActualizarManifiestos";
    ob_start();
?>
<center>
    <h1>Actualizacion de Estados</h1>
    <br/>
    <br/>
    <table>
        <th>Manifiesto Seleccionado</th>
        <th>Estado A Asignar</th>
        <tr>
            <td><?php echo $_GET["idManifiesto"]?></td>
            <td><select>
                    <option></option>
                    <option>En Vuelo</option>
                    <option>En Aduanas</option>
                    <option>Inspeccion Fisica</option>
                    <option>En Camino a Tienda</option>
                    <option>En tienda</option>
                </select></td>
        </tr>
    </table>
    <input type="button" name="b_asignarEstadoMan" value="Guardar Cambios" onclick="confCambioEstado()"/>
    <script>
        function confCambioEstado(){
            if(confirm('¿Seguro que desa Guardar los Cambios?'))
            {
                alert('Estado Cambiado exitosamente');
                location.href="Manifiestos.php?vista=ActualizarManifiestos";
            }
            else{
               
            }
        }
    </script></center>


<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>