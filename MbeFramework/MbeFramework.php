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
include_once("MbeLangSupport.php");
?>