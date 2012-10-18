<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Consulta de Paquetes';
    $g_formAction = "";
    ob_start();
?>
<center>
    <div id="TituloRegClMan">
    <br/>
    <br/>
        <h1>Consultar Paqutes</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        <form name="fr_RegClMan" method="POST" onsubmit="">
            <table>
                <tr>
                    <td><text>Cantidad Paquetes: </text></td>
                    <td><input type="text" name="tf_CodPais" size="3"/>
                    
                </tr>
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" value="Consultar Paquetes"/>
        </form>
    </div>
    
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>