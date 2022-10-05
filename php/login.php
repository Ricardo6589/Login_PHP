<?php
session_start();
$user=$_POST['usuario'];
$pwd=$_POST['contraseña'];
include 'connection.php';

// $pwdhash = password_hash($pwd, PASSWORD_BCRYPT);
$select1 = "SELECT * FROM tbl_profesores where $user = correo";
$sele1= mysqli_query($connection, $select1);
$seleL1 = mysqli_num_rows($sele1);

if ($seleL1 == 1) {
    $seleF1=mysqli_fetch_array($sele1);
} else {
    header('Location: ../index.php?exist=0');
}

if ($seleF1['correo'] == $user && $seleF1['contraseña'] == $pwd) {
    $_SESSION['usuario']=$user;  
      
}else {
    header('Location: ../index.html');
}