<?php

$g_tituloPagina = 'Lista de Busqueda de Publicidad';
$g_formAction = "";
ob_start();
?>
<center>
    <table class="Lista">
        <tr>
            <td colspan='12' class="nombreTabla">LISTA DE PUBLICIDAD</td>
        </tr>
        <tr align='center'>
            <th>ID</th>
            <th>DESCRIPCIÓN</th>
            <th>FECHA INCIO PUBLICIDAD</th>
            <th>FECHA FIN PUBLICIDAD</th>
            <th>TEXTO PUBLICITARIO</th>
            <th>LINK PUBLICIDAD</th>
            <th>IMAGEN</th>
            <th>ESTADO</th>
            <th colspan="3">OPERACIONES</th>
        </tr> 
        <?php

            for ($i = 1; $i < 10; $i++) {
                echo "<tr align='center'><td>".$i."</td>";
                echo "<td>Publicidad-".$i."</td>";
                echo "<td>12/12/2002</td>";
                echo "<td>20/12/2002</td>";
                echo "<td>Texto-".$i."</td>";
                echo "<td>Link-".$i."</td>";
                echo "<td>Imagen-".$i."</td>";
                echo "<td>Activo</td>";
                echo '<td><a href="Banners.php?vista=DetalleBannersSave">Ver</a></td>';
                echo '<td><a href="Banners.php?vista=ActualizarBanners">Editar</a></td>';
                echo '<td><a href="">Eliminar</a></td>';
                echo '</tr>';
            }
            ?>
        <tr align="center">
            <td colspan='12'>TOTALE DE CLIENTES = 9, COSTA MBE-ESCAZU</td>

        </tr>  
        <tr>
            <td class="lineaFin" colspan="12">

            </td>
        </tr>
    </table>

    <br/>
    <br/>
    <input type="submit" name="b_nuevaBusqueda" onclick="pregunta()" value="Nueva Busqueda"/>   
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