<?php
/**
 * MbeFramework
 *
 * Inclusion de bibliotecas para manipulacion de paquetes
 *
 * @author Luis Diego Arias Segura
 *
 * @package MbeFramework.php
 */
if (!defined('_BASE_PATH_')) {
    define('_BASE_PATH_', dirname(__FILE__));
}
if (!class_exists('PackageException')) {
    include_once("Package.php");
}

if (!function_exists('path')) {
    function path($file) {
        $pageProtocol   = 'http';
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
            $pageProtocol .= 's';
        }
        return $pageProtocol.'://'.str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']).$file;
}}
include_once("MbeLangSupport.php");
?>