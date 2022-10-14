<?php
 
    require_once 'conexion.php';
    $sesion=session_start();
 
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $passwordHash = sha1($contraseña);  

    echo $passwordHash;  
 
    $correo = $connection -> real_escape_string($correo);
    $sql = "SELECT * FROM tbl_profesores WHERE correo = '$correo' and contraseña = '$passwordHash'";

    $resultados = mysqli_query($connection,$sql);
    $num=mysqli_num_rows($resultados);
   

    if ($num==1){
        session_start();
        $sesion['conexion']=$user;
        header("Location: ./vista.php");
    }else{
        session_start();
        $sesion['error']='error';
        echo "<script>window. alert('El correo o la contraseña son incorrectos')</script>";
        header("Location: ../index.html");
        
    }
 
?>