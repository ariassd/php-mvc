<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */

    $g_tituloPagina = 'Consulta de Paquetes';
    $g_formAction = "Paquetes.php?vista=ListarPaquetes";
    ob_start();
?>
<center>
    <h1>Consulta de paquetes</h1>
    <br/>
    <br/>
    <br/>
    <div>
        <table>
            <tr>
                <td><h3>Lista de Paquetes</h3></td>
                <td><input type="radio" name="r_tipoLista" value="1"/> En Transito <input type="radio" name="r_tipoLista" value="0"/>Archivados</td>
            </tr>
            <tr>
                <td><h3>Desde</h3></td>
                <td><input type="text" name="txtDate" value="mm/dd/yyyy" size="15" maxlength="10"> <input type="button" name="cmdCal" value="..." onClick='javascript:window.open("Vista/Paquetes/Calendar.php?form=frmMain&field=txtDate","","top=50,left=400,width=175,height=140,menubar=no,toolbar=no,scrollbars=no,resizable=no,status=no"); return false;'> </td>
            </tr>
            <tr>
                <td><h3>Hasta</h3></td>
                <td><input type="text" name="txtDate" value="mm/dd/yyyy" size="15" maxlength="10"> <input type="button" name="cmdCal" value="..." onClick='javascript:window.open("Vista/Paquetes/Calendar.php?form=frmMain&field=txtDate","","top=50,left=400,width=175,height=140,menubar=no,toolbar=no,scrollbars=no,resizable=no,status=no"); return false;'> </td>
            </tr>
        </table>
        <input type="submit" name="b_BuscarPaquetes" value="Mostrar"/>
    </div>
    
</center>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>