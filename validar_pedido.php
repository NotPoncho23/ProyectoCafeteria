<?php include("ProyectoIntegrador_GuijosaSalvador_Conexion.php"); ?>
<?php

$Aperitivos = $_POST['Aperitivos'];
$cAperitivos = $_POST['cAperitivos'];
$Bebidas = $_POST['Bebidas'];
$cBebidas = $_POST['cBebidas'];
$comentarios = $_POST['Comentarios'];

?>
<?php                       
$cons = insert('pedidos',"NULL,  '$Aperitivos', '$cAperitivos', '$Bebidas', '$cBebidas', '$comentarios' ");
if($cons){
    ?>
    <h3>Pedido realizado con exito.</h3>
    <h3>Redicreccionando a la pagina de pedidos...</h3>
    <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_GuijosaSalvador_Pedido.php" >
    <?php
}else{
    ?>
    <h3>Ocurrio un error al intentar realizar el pedido</h3>
    <h3>Redireccionando a la pagina de pedidos...</h3>
    <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_GuijosaSalvador_Pedido.php" >
    <?php
}
?>
