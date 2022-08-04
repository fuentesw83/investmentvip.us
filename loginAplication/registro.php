<?php
session_start();
include('dbcon.php');

if( isset($_POST['registro_btn']) ) {
    $email = $_POST['email'];
    $clave = $_POST['clave'];
} else {
    $_SESSION - "No permitido";
    header('Locacion: login.php');
    exit();
}
?>