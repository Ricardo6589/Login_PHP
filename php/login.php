<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

require_once 'conexion.php';
$consulta=mysqli_query("SELECT * FROM tbl_profesores where email=$email");


    if(!$consulta){

        // echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " .
        
        
        echo mysqli_error($mysqli);
        
        // si la consulta falla es bueno evitar que el código se siga ejecutando
        exit;
        
        
        }
    # code...


