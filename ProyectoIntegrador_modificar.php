<!DOCTYPE html>
<html>
<head>
    <title>21_2075cProWebT3Examen</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slider.css">
    
    <?php include("ProyectoIntegrador_Conexion.php"); ?>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1><img src="img/sistemas.png" height=50px>Cafeteria 1- Instituto Tecnologico Superior de Ciudad Hidalgo <img src="img/itsch.png" height=50px></h1>

            <ul class="topnav">
                <li><a href="ProyectoIntegrador_Inicio.php">MENU</a></li>
			        	<li><a href="ProyectoIntegrador_Login.php">PEDIR</a></li>
                <li><a href="ProyectoIntegrador_Administrar.php">ADMINISTRAR</a></li>
            </ul>     
         </div>

         <div class="content">    
          <h2 class="menu1">Datos de la cuenta</h2>
            <div class="sectionA">    
              
            <form action="ProyectoIntegrador_actualizar.php" name="formAct" method="post" onsubmit="return validarFormAct(this);">

            <table border=5>

            <?php 
                //invocar la funcion select y la tabla
              $result = select_id("usuarios", "id_usuarios", $_GET['id']);
            // Realizamos un bucle que muestre el resultado
            if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_object($result)) {
             ?>


<tr>
<td> <p><label for="id_usuario">ID</label><br></td>
<td> <?php echo $_GET['id']; ?> <input type="text" name="id" id="id" hidden onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->id_usuarios; ?>">
</p></td>
</tr>
<tr>
<td>
<p><label for="nombre">Nombre </label><br>
</td>
<td> <input type="text" name="nombre" id="nombre" 
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->nombre; ?>">
</p></td>
</tr>

  
<tr>
<td><p><label for="control">Numero de control </label><br></td>
<td><input type="text" name="control" id="control"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->n_control; ?>">
</p></td>
</tr>

<tr>
<td><p><label for="correo">Correo</label><br></td>
<td><input type="text" name="correo" id="correo"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->correo; ?>">
</p></td>
</tr>

<tr>
<td><p><label for="num_tel">Telefono</label><br></td>
<td><input type="text" name="num_tel" id="num_tel"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->telefono; ?>">
</p></td>
</tr>

   
</td>
<td>
<p><label for="M">Masculino</label>
<input type="radio" id="M" name="genero" value="M"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->genero; ?>"><!-- f -->
    </p>
    <p>
<label for="F">Femenino</label>
<input type="radio" id="F" name="genero" value="F"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->genero; ?>">
</p>
<br>

</td>
</tr>

<tr>
<td><p><label for="contraseña">Contraseña </label><br></td>
<td><input type="text" name="contraseña" id="contraseña"
onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->contrasena; ?>">
    </p></td>
    </tr>

    </table>
    <button name="btn_guardar" class="btn_muestrame">Actualizar</button><br></br><br>
            </form>


            </div>
          

            <?php 
               }
               
            } else {
                echo "no hay ningun registro";
              }
            
            ?>
            </div>
        <div id="footer">
            <h2>Instituto Tecnológico Superior de Ciudad Hidalgo</h2>
            <p><b>Semestre </b>Agosto diciembre 2021</p>
            <p><b>Materia </b>Programación Web</p>
            <p><b>Grupo </b>075c</p>
            <p><b>Profesor </b>Erik Augusto Ramirez Vargas</p>
			<p><b>Proyecto: </b>ComiTec</p>
            <p><b>Alumnos: </b></p>
			<ul>
				<li>Gildardo Tello Alvarez</li>
				<li>Salvador Guijosa Pérez</li>
				<li>Johán Alejandro Ontiveros Alfaro</li>
			</ul>
		</div>
    </div>
</body>
<script src="js/js_examen.js"></script>

</html>