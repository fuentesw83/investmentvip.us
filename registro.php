<?php
session_start();
include('dbconfig.php');

if( isset($_POST['registrar_btn']) ) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $postData = [
        'nombre'=>$nombre,
        'telefono'=>$telefono,
        'email'=>$email,
        'clave'=>$clave
    ];

    $tabla_referencia = "registro";
    $postRef = $database->getReference($tabla_referencia)->push($postData);

    if($postRef) {
        $_SESSION['status'] = "Usuario Registrado Exitosamente";
        header('Locacion: prueba.php');
    } else {
        $_SESSION['status'] = "Usuario No Registrado";
        header('Locacion: prueba.php');
    }
} 

?>