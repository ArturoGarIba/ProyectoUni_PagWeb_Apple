<?php
$servername = "localhost";
$database = "apple";
$username = "root";
$password = "root";
session_start();
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];
//$correo = mysqli_real_escape_string($conn,$_POST['correo']);
//$contraseña = mysqli_real_escape_string($conn,$_POST['con']); 

      
    $sql = "SELECT *FROM usuarios WHERE correo='$correo' ";
    $result= mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if ($row>0) {
        session_start();
        $datos = "SELECT * FROM usuarios WHERE correo='$correo'";
        $resulta= mysqli_query($conn,$datos);
        $fila= mysqli_fetch_array($resulta);
        $usuario= $fila['nombre'];
        $_SESSION["usuario"]= $usuario;
        header("location: indexLogin.php" );
        
    } else {
        header("location: errorLogin.php" );
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
mysqli_free_result($result);
mysqli_close($conn);

?>