<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
    $g_tituloPagina = 'Registro de Clientes por Carga de Archivo txt';
    $g_formAction = "Clientes.php?vista=ClientesCargados";
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
                    <td>Archivo .txt:</td>
                    <td><input type="file" name="tf_archivotxt" size="40"/>
                    <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "CargaClientes.php?ayuda=Carga") ?>
                    </td>
                </tr> 
                <tr>
            <th class="lineaFin" colspan="2">
                
            </th>
        </tr>
            </table>
             <br/>
             <br/>
            <input type="submit" name="b_RegCLMan" value="Cargar Clientes"/>
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>