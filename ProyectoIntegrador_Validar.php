<?php include("ProyectoIntegrador_GuijosaSalvador_Conexion.php"); ?>
<?php
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

// $cons = mysqli_query($connection, "SELECT * FROM `usuarios` WHERE correo = '$correo' AND contraseña = '$contrasena'");

$db_host = 'localhost';	  // Servidor donde está alojada la base de datos
$db_user = 'root';		  // Usuario de la base de datos
$db_password = '';		  // Contraseña de la base de datos
$db_name = 'proyectointegrador';	      // Nombre de la base de datos
$db_port = '3306';
$conexion =mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);

    $cons = "SELECT * FROM usuarios where correo='$correo' and contrasena='$contrasena'";
    
    $cons=mysqli_query($conexion, $cons);
    $filas=mysqli_num_rows($cons);
            if($filas){
            ?>
            <h3>Los datos se comprobaron correctamente :)</h3>
            <?php
             header("location:ProyectoIntegrador_GuijosaSalvador_Pedido.php");
             }else{
              include("ProyectoIntegrador_GuijosaSalvador_Login.php");  
                 ?>
                <h3>Los datos son incorrectos...</h3>
                <?php
                  
        }
        mysqli_free_result($cons);
?>
