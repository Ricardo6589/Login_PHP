<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Sítesis</title>
        <!-- Link al css -->
        <link rel="stylesheet" href="../css/login.css" />
        <!-- Link al javascript -->
        <script type="text/javascript" src="../js/valida.js"></script>
    </head>
<body>
    <?php  

        session_start();
        
        if(empty($_SESSION['correo'])){ 
            echo"<script>window.location.href = '../index.html' </script>";
        }else{

    ?> 
     

        <div class="parent clearfix">
            <div class="bg-illustration">;
                <img src="../img/logo-jesuites-educacio-b.svg" alt="logo" />
            </div>

            <div class="login">
                <div class="container">
                    <h1>Entraste dentro<br />de la página Web</h1>
                </div>
            </div>
            </div>';
        
         <?php
        }
        ?>

    
</body>
</html>
