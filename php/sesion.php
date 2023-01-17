<?php
error_reporting(0);
session_start();

$session_i = $_SESSION['cliente'];


//hace validacion si tiene o no tiene la sesion iniciada

if ($session_i == null || $session_i == "") {
    include("../Nav/nav.php");
}else{
    include("../Nav/nav_s.php");
}

?>