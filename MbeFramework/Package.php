<?php

/**
 * PackageException
 *
 * Control de excepciones para inclusion de paquetes
 *
 * @author Luis Diego Arias Segura
 *
 * @package MbeFramework.Package.php
 */
class PackageException extends Exception {   }

/**
 * Inclusion de paquetes dentro del sistema
 *
 * @access public
 * @param string $class El paquete que se desea incluir
 */
function import($class, $dirs = null) {
    $path = str_replace('.', DIRECTORY_SEPARATOR, $class);
    //$pathArray = split('\.',$class); //menos de PHP 5
    $pathArray = explode('.', $class); //PHP 5

    if (count($pathArray) <= 1)
        throw new PackageException("No package found \"$path\"");
    if (end($pathArray) == "*") {
        array_pop($pathArray);
        $path = implode(DIRECTORY_SEPARATOR, $pathArray);
        $fullPath = dirname(_BASE_PATH_) . DIRECTORY_SEPARATOR . $path;
        $dirObj = new DirectoryIterator($fullPath);
        foreach ($dirObj as $nombrefichero) {
            if (is_file($fullPath . DIRECTORY_SEPARATOR . $nombrefichero)) {
                require_once($fullPath . DIRECTORY_SEPARATOR . $nombrefichero);
                //echo _BASE_PATH_;
            }
        }
    } else {
        
        if (class_exists($class, false)) {
            return;
        }
        
        $fullPath = "";
        $fullPath = dirname(_BASE_PATH_) . DIRECTORY_SEPARATOR . $path . '.php';
        
        require_once($fullPath);
    }
}

?> 