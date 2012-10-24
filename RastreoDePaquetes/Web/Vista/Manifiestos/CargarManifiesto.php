<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Cargar Manifiesto';
    $g_formAction = "Manifiestos.php?vista=ManifiestoCargado";
    ob_start();
    
?>
<script type="text/javascript">
$(document).ready(function(){
   $(".campofecha").calendarioDW();
})
</script> 

<center>
    <div id="TituloRegClMan">
    <br/>
    <br/>
        <h1>Carga de Manifiestos por Archivo DBF</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        <form name="fr_RegClArchivo" method="POST" onsubmit="">
            <table>
                
                <tr>
                    <td><text>Archivo DBF: </text></td>
                    <td><input type="file" id="archivo" name="archivo" size="40"/>
                    <?php HtmlControles::UserHelpInformation('hlpInfo', "Ayuda", "CargaManifiestos.php?ayuda=Carga") ?>
                    </td>
                    
                </tr> 
                
                <tr>
                    <td><text>Fecha: </text></td>
                    <td><input type="text" id="archivo" name="archivo" class="campofecha" size="12"/></td>
                </tr> 
                
           
                
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" onclick="cargaarchivo()" value="Cargar Manifiesto"/>
        </form>
    </div>
    
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>