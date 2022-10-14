<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // if(empty($sesion)){ 
    //     echo'<script>window.location.href = "../index.html" </script>';
    // }else{
    include 'conexion.php';
    
    $sql = "SELECT * FROM tbl_profesores";
    $listadodept = mysqli_query($connection, $sql); 
    echo '<table>';
    echo '<tr>';
    echo '<th>nombre</th>';
    echo '<th>apellidos/th>';
    echo '<th>correo</th>';   
    echo '<th>dni</th>';
    echo '<th>telefono</th>';  
    echo '</tr>';
    foreach ($listadodept as $tbl_profesores) {
        
        echo '<tr>';                    
        echo "<td>{$tbl_profesores['nombre']}</td>";
        echo "<td>{$tbl_profesores['apellidos']}</td>";
        echo "<td>{$tbl_profesores['correo']}</td>";        
        echo "<td>{$tbl_profesores['dni']}</td>";
        echo "<td>{$tbl_profesores['telefono']}</td>";          
    }
    echo '</table>';
    // }
    ?>
</body>
</html>
