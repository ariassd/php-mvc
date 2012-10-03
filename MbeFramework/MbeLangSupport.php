<?php
if (isset($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

$language = isset($_SESSION['lang']);

if ($language == null || $language == "") {
	$language = "es";
}

$langFileName = "lang_".$language.".php";
if (!file_exists($langFileName)) {
	$langFileName = "lang_es.php";
}

include ('Recursos/Idiomas/'.$langFileName);

?>