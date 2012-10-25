
<?php

if (isset($_REQUEST["__7ygv8iji9olwsedfgtyho9iu__"])) {
    try {
        $fName = $_REQUEST["__7ygv8iji9olwsedfgtyho9iu__"];
        if (function_exists($fName)) {
            $fName();
        }
    } catch (Exception $e) {
        echo $e;
    }
}

/**
* HtmlControles
*
* Funciones utiles para facilitar la creacion de HTML
*
* @author Luis Diego Arias Segura
*
* @package MbeFramework.Html.HtmlControles
*/
Class HtmlControles {

    /**
    * Prepara la pagina para iniciar el control de eventos
    *
    * @access public
    */
    public static function Iniciar() {
        echo "<input type='hidden' id='__7ygv8iji9olwsedfgtyho9iu__' name='__7ygv8iji9olwsedfgtyho9iu__' value='' />
";
    }

    /**
     * Crea un boton de tipo submit que hace submit y ejecuta automaticamente 
     * una funcion en el codigo php
     *if (isset($_POST["__7ygv8iji9olwsedfgtyho9iu__"])) {
    try {

        $fName = $_POST["__7ygv8iji9olwsedfgtyho9iu__"];
        $fName();
    } catch (Exception $e) {
        echo $e;
    }
}
     * @access public
     * @param string $texto el texto del boton
     * @param string $phpFuncion la funcion que se va a ejecutar
     * @param string $javascriptFuncion la funcion de javascript que se ejecuta
     */
    public static function SubmitButton($idControl, $texto, $phpFuncion, $javascriptFuncion) {
        echo "<input type='submit' id='".$idControl."' value='" . $texto . "' onclick='document.getElementById(\"__7ygv8iji9olwsedfgtyho9iu__\").value=\"" . $phpFuncion . "\";return ".$javascriptFuncion."' />";
    }

    /**
     * Crea un boton para mostrar informacion al usuario
     * @param string $idControl el id del control
     * @param string $text el texto alternativo que se va a mostrar
     * @param string $filen el archivo html o php que tiene la informacion que se va a mostrar
     */
    public static function UserHelpInformation($idControl, $text, $file) {  
        $icon = "<img id='".$idControl."' alt='".$text."' class='btnHelp' style='width:25px;heigth:25px;' src='".path('Recursos/Imagenes/informacion.png')."' onclick='$(\"#UIAyudaAusuario\").load(\"".path("/Ayudas/".$file)."\");$(\"#UIAyudaAusuario\").dialog({modal:true})' /> ";        
        echo $icon;
    }

}
?>