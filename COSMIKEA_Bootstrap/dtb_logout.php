<?php
session_start();

if (isset($_SESSION["OnlyName"])) {
    unset($_SESSION["OnlyName"]);
    
    header("Location: ./cosm_login.php");
    exit(); 
}

?>