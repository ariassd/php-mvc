<?php
/**
 * Vista detalle para la entidad de Clientes
 * GUI
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Web.Cliente.DetalleClientes
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
    $g_tituloPagina = 'Ingreso de clientes por carga de archivo txt';
    $g_formAction = "";
    ob_start();
    
?>


<center>
    <div id="TituloRegClMan">
    <br/>
    <br/>
        <h1>Registro de Clientes por carga de archivo txt</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    </div>
    <div id="bodyRegClMan">
        
            <table>
                
                <tr>
                    <td><text>Archivo txt: </text></td>
                    <td><input type="file" id="archivo" name="archivo" size="40"/></td>
                </tr> 
                
           
                
            </table>
             <br/>
                <br/>
            <input type="submit" name="b_RegCLMan" onclick="cargaarchivo()" value="Registrar Clientes"/>
        <?php
        // archivo txt
        $nombre_fichero = 'C:\armando.txt';
        if (file_exists($nombre_fichero)) {
            $f = @fopen($nombre_fichero,r);// or die("Error al abrir el archivo: $nombre");
            fclose($f);
            $v = file($nombre_fichero);
            $cantidad = count($v);
            for ($i=0; $i<$cantidad; $i++)
            {
                $datos = $v[$i];   
                echo '<br>'.$datos;
                echo '<br>'.$datos[2];
            }
        } else {
            echo '<script> alert("Pidale a Armando el archivo llamado: '.$nombre_fichero.'"); </script>';
        }
       ?>
        
        
    </div>
    
</center>

<?php
    $g_contenido = ob_get_contents();
    ob_end_clean();
    include "Master.php";
?>