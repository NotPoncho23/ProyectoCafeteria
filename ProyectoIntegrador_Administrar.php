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
            </ul>     
         </div>

         
         
         <div class="content">    
          <h2 class="menu1">Administrar cuentas registradas</h2>
            <div class="sectionA">    
                
            <?php $result = select("usuarios");?>

             <div style="overflow-x:auto;"><!-- añadiedo barra de navegacion horizontal -->
                <table border=5>
                    <thead><!-- encabezados -->
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Numero de control</td>
                        <td>correo</td>
                        <td>telefono</td>
                        <td>genero</td>
                        <td>Eliminar</td>
                        <td>Modificar</td>
                    </thead>


                    <?php
                     if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_object($result)) {
                     ?>

                    <tr>
                        <td><?php echo $row->id_usuarios; ?></td>
                        <td><?php echo $row->nombre; ?></td>
                        <td><?php echo $row->n_control; ?></td>
                        <td><?php echo $row->correo; ?></td>
                        <td><?php echo $row->telefono; ?></td>
                        <td><?php echo $row->genero; ?></td>
                        <td><a href="ProyectoIntegrador_modificar.php?id=<?php echo $row->id_usuarios; ?>
                            "class="buttonDeleteUpdate">Modificar </a></td>

                        <td><a href="ProyectoIntegrador_delete.php?id=<?php echo $row->id_usuarios; ?>
                        "onclick="return confirmation()" class="buttonDelete">Eliminar</a></td></tr>
                    <?php

                }
                    } else {
                     echo "no hay ningun registro";}
                ?>
                </table>

            </div>    <!-- div del contenedor del la tabla responsive -->

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