<?php

$g_tituloPagina = 'Actualizar Empleados';
$g_formAction = "Empleados.php?vista=TablaAccesos";
ob_start();
    
?>
<center>
    <br/>
    <br/>
    <br/>
    <div>
        <table>
            <tr>
                <td><h3>Usuario de Empleado</h3></td>
                <td><input type="text" name="tf_UsuarioEmpleado"/></td>
                <td><input type="button" value="Buscar" onclick="loadXMLDoc()"/></td>
            </tr>
            <tr>
                <td> <h3>Tienda</h3></td>
                <td><select>
                        <option></option>
                        <option>Escazu</option>
                        <option>Santa Ana</option>
                        <option>San Pedro</option>
                    </select></td>
            </tr>
        </table>
    </div>
    <div id="d_Resultados">
        
    </div>
    <input type="submit" name="b_SelAsignarPermisos" value="Seleccionar"/>
</center>



<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("d_Resultados").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Ajax_info.php",true);
xmlhttp.send();
}
</script>
<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php"; 
?>