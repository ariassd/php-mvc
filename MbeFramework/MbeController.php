<?php

if (isset($_GET["vista"])) {
    try {
        $fName = $_GET["vista"];
        $fName();
    } catch (Exception $e) {
        echo $e;
    }
}

?> 