<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
$g_tituloPagina = 'Registro de Prealertas';
$g_formAction = "";
//PreAlertas.php?vista=InsertarPreAlerta
ob_start();
?>
<script language="JavaScript">
function pregunta(){
    if (confirm('¿Está seguro que desea ingresar la Pre-Alerta?')){
        <?php
        $g_formAction = "PreAlertas.php?vista=InsertarPreAlerta";
        ?>
     }
    else{
    <?php
      $g_formAction = ""; 
      ?> 
    }
}
</script>
<center>
        <br/>
        <h1>Registro de Pre-Alertas</h1>
        <br/><br/>
        <table>
            <tr>
                <td><text><div align="right">Codigo prealerta:</div></text></td>
                <td><input type="text" name="tf_CodPais" size="10"/></td>
            </tr>
            <tr>
                <td align="right"><text>Descripcion:</text></td>
                <td><input type="text" name="tf_NumCasillero" size="30"/></td>
            </tr>
            <tr>
                <td align="right"><text>Valor:</text></td>
                <td><input type="text" name="tf_NombreCliente" size="15"/></td>
            </tr>
            <tr>
                <td align="right"><text>Fecha Ingreso:</text></td>
                <td><input type="text" name="tf_ApellidoCliente" size="15"/></td>
            </tr>
            <tr>
                <td align="right"><text>Codigo Cliente:</text></td>
                <td><input type="textarea" name="tf_DireccionCliente" size="15"/></td>
            </tr>
            <tr>
                <td align="right"><text>Adjuntar Archivo:</text></td>
                <td><input type="file" name="image" size="40"/></td>
            </tr>
        </table>
        <br/><br/>
        <input type="submit" onclick="pregunta()" name="b_RegCLMan" value="Registrar Pre-Alerta"/>
    </center> 
<?php
$g_contenido = ob_get_contents();
ob_end_clean();
include "Master.php";
?>