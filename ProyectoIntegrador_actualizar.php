<?php include("ProyectoIntegrador_Conexion.php"); ?>
<?php
$ID = $_POST['id'];
$nombre = $_POST['nombre'];
$control = $_POST['control'];
$correo = $_POST['correo'];
$tel = $_POST['num_tel'];
$genero = $_POST['genero'];
$contrasena = $_POST['contraseña'];


$campos = "nombre = '$nombre'";
$campos .= ", n_control = '$control'";
$campos .= ", correo = '$correo'";
$campos .= ", telefono = '$tel'";
$campos .= ", genero = '$genero'";
$campos .= ", contrasena = '$contrasena'";


/* echo $campos; */
$where = "id_usuarios = $ID";

$cons = update('usuarios', $campos, $where);

if ($cons) {
    ?>
    <h3>Actualizado correctamente</h3>
    <h3>Redireccionando a la pagina de administración...</h3>
    <meta http-equiv="refresh" content="4; URL=ProyectoIntegrador_Administrar.php" >
    <?php
}else{
    ?>
    <h3>Ocurrio un error inesperado</h3>
    <h3>Redireccionando a la pagina de administración...</h3>
    <meta http-equiv="refresh" content="4; URL=ProyectoIntegrador_Administrar.php" >
    <?php
}

?>