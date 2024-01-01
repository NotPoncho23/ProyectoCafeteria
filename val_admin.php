<?php
$usuario = "root";
$password = "admin";

$u_l = $_POST['usuario'];
$p_l = $_POST['contrasena'];

if($usuario == $u_l && $p_l == $password){
    header("location:ProyectoIntegrador_GuijosaSalvador_Administrar.php");
}else{
    ?>
    <h3>Solo usuarios permitidos pueden acceder...</h3>
    <h3></h3>
    <h3>Redireccionando a la pagina de administración...</h3>
    <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_GuijosaSalvador_Administrar.php" >
    <?php
}


?>