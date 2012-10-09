<?php

$viewToVisit = $_GET["vista"];

if (isset($viewToVisit)) {
    try {
        if (function_exists($viewToVisit)) { 
            $fName = $viewToVisit;
            $fName();
        } else {
            redirectUndefinedPage($viewToVisit);
        }
        
    } catch (Exception $e) {
        redirectUndefinedPage($viewToVisit);
    }
} else {
    redirectUndefinedPage($viewToVisit);
}

//Redireccion por error 404, pagina no definida
function redirectUndefinedPage($uri){
    $message = $uri;
    import("RastreoDePaquetes.Web.Recursos.PaginasDeError.PaginaNoEncontrada");
}


/***
 * Esta funcion hace el llamado a la vista correspondiente al controlador
 */
function View($view = '', $params = array()) {
   
    foreach ($params as $key => $value) {
        //echo $key;
        global $$key;
        $$key = $value;
    }
    
    $current_view = basename($_SERVER['SCRIPT_NAME'], ".php"); /* supposing filetype .php*/
    $backtrace = debug_backtrace();
    $viewCaller = $backtrace[1]['function'];
    if ($view == NULL || $view == '') {
        if ($viewCaller != NULL) {
            include("Vista/".$current_view."/".$viewCaller.".php");
        }
    } else {
        include("Vista/".$current_view."/".$view.".php");
    }
    
}

?> 