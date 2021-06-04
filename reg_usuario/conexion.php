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
$correo= $_POST['cor'];
$contraseña= $_POST['con'];
$contraseña2= $_POST['con2'];
$tipo= 'Cliente';
if($contraseña==$contraseña2){
    $sql = "INSERT INTO usuarios  VALUES ('$nombre','$correo','$contraseña','$tipo')";
    if (mysqli_query($conn, $sql)) {
        header("location: ../indexBien.php" );
    } else {
        header("location: errorCorreo.php" );
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
    echo "Debes poner las contraseñas igual";
    header("location: error.php" );
}

mysqli_close($conn);

?>