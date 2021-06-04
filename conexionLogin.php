<?php
$servername = "localhost";
$database = "apple";
$username = "root";
$password = "";
session_start();
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$correo= $_POST['correo'];
$contraseña= $_POST['con'];
//$correo = mysqli_real_escape_string($conn,$_POST['correo']);
//$contraseña = mysqli_real_escape_string($conn,$_POST['con']); 

      
    $sql = "SELECT *FROM usuarios WHERE correo='$correo' ";
    $result= mysqli_query($conn,$sql)or die (mysqli_error());
    $row = mysqli_num_rows($result);
    if ($row>0) {

        $sql2 = "SELECT *FROM usuarios WHERE correo='$correo' ";
        $resultad= mysqli_query($conn,$sql2) or die ("Problemas al conectar".mysqli_error($conn2));
        $row2 = mysqli_num_rows($resultad);
        if($row2>0){
            session_start();
            $datos = "SELECT * FROM usuarios WHERE correo='$correo'";
            $resulta= mysqli_query($conn,$datos);
            $fila= mysqli_fetch_array($resulta);
            $usuario= $fila['nombre'];
            $_SESSION["usuario"]= $usuario;
            header("location: indexLogin.php" );
        }
       
        
    } else {
        header("location: errorLogin.php" );
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
mysqli_free_result($result);
mysqli_close($conn);
mysqli_close($conn2);
?>