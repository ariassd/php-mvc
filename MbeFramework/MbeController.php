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

function redirectUndefinedPage($uri){
    $message = $uri;
    import("RastreoDePaquetes.Web.Recursos.PaginasDeError.PaginaNoEncontrada");
}

?> 