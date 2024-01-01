<?php include("ProyectoIntegrador_Conexion.php"); ?>
<?php

$nombre = $_POST['nombre'];
$numero_control = $_POST['control'];
$correo = $_POST['correo'];
$tel = $_POST['num_tel'];
$genero = $_POST['genero'];
$contrasena = $_POST['contraseña'];

?>
<?php                       
$cons = insert('usuarios',"NULL,  '$nombre', '$numero_control', '$correo', '$tel',  '$genero', '$contrasena' ");
if ($cons) {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrado</title>
</head>

<body>
<h3>Se logro con exito el registro</h3>
<meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_Login.php" >
</body>

</html>
<?php
} else {
    ?>
    <h3>Ocurrio un error</h3>
    <h3>Redireccionando a la pagina de registro...</h3>
    <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_Registrar.php" >
    <?php
}
?>
