<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
    $g_tituloPagina = 'Ingreso de Clientes';
    $g_formAction = "Clientes.php?vista=ClientesCargados";
    ob_start();
    
?>


<center>
    <div id="TituloRegClMan">
    <br/>
    <br/>
        <h1>Registro de Clientes por Carga de Archivo TXT</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        
            <table>
                <tr>
                    <td><text>Archivo txt: </text></td>
                    <td><input type="file" id="archivo" name="archivo" size="40"/>
                    <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "CargaClientes.php?ayuda=Carga") ?>
                    </td>
                </tr>      
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" value="Cargar Clientes"/>   
    </div>
    
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>