<?php
$servername = "localhost";
$database = "apple";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$nombre= $_POST['nom'];
$tipo= $_POST['tip'];
$descripcion= $_POST['des'];
$precio=$_POST['pre'];
$nombreimg= $_FILES['img']['name'];
$archivo= $_FILES['img']['tmp_name'];
$ruta="img";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);
    $sql = "INSERT INTO productos (nombre,tipo,descripción,precio,imagen) VALUES ('$nombre','$tipo','$descripcion','$precio','$ruta')";
    if (mysqli_query($conn, $sql)) {
        header("location: bien.php" );
        
    } else {
        header("location: errorNombre.php" );
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

mysqli_close($conn);

?>