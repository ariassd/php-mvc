<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Registro de Prealertas';
    $g_formAction = "";
    ob_start();
?>
<center>
    <div id="TituloRegClMan">
    <br/>
    <br/>
        <h1>Registro de Pre-Alertas</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        <form name="fr_RegClMan" method="POST" onsubmit="">
            <table>
                <tr>
                    <td><text>Codigo prealerta: </text></td>
                    <td><input type="text" name="tf_CodPais" size="10"/></td>
                    
                </tr>
                
                <tr>
                    <td><text>Descripcion: </text></td>
                    <td><input type="text" name="tf_NumCasillero" size="30"/></td>
                </tr>

                <tr>
                    <td><text>Valor: </text></td>
                    <td><input type="text" name="tf_NombreCliente" size="15"/></td>
                </tr>
                <tr>
                    <td><text>Fecha Ingreso: </text></td>
                    <td><input type="text" name="tf_ApellidoCliente" size="15"/></td>
                </tr>
                <tr>
                    <td><text>Codigo Cliente: </text></td>
                    <td><input type="textarea" name="tf_DireccionCliente" size="15"/></td>
                </tr>
                <tr>
                    <td><text>Adjuntar Archivo: </text></td>
                    <td><input type="file" name="archivo" size="40"/></td>
                </tr>
                
                
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" value="Registrar Pre-Alerta"/>
        </form>
    </div>
    
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>