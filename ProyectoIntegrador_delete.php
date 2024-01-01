<?php include("ProyectoIntegrador_conexion.php"); ?> 
<?php
          $result = select_id("usuarios", "id_usuarios", $_GET['id']);   
             $result = delete("usuarios", "id_usuarios", $_GET['id']);   
          if ($result) { ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="5">
        <h3>Listo, eliminado correctamente</h3>
        <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_Administrar.php" >
    </div>
</body>

</html>
<?php }else{
            ?>
            <h3>Ocurrio un error inesperado</h3>
            <meta http-equiv="refresh" content="3; URL=ProyectoIntegrador_Administrar.php" >
            <?php
            }
          ?>