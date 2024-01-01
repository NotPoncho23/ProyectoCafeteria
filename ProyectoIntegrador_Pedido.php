<!DOCTYPE html>
<html>
<head>
	<title>21_2075cProWebT3ExamenGuijosaSalvador</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<link rel="stylesheet" href="css/Estilos.css">
	<link rel="stylesheet" href="css/menu.css">
</head>

<body>
	<div id="container">
		<div id="header">
		<h1><img src="img/sistemas.png" height=50px>Cafeteria 1- Instituto Tecnologico Superior de Ciudad Hidalgo <img src="img/itsch.png" height=50px></h1>
			
			
			<ul class="topnav">
				<li><a href="ProyectoIntegrador_Inicio.php">MENU</a></li>
				<li><a href="ProyectoIntegrador_Pedido.php">PEDIR</a></li>
			</ul>
			
		</div>

		<div class="content">
			<form id="form5" name="form5" method="post" action="validar_pedido.php" onsubmit="return validarL(this);">
				<div class="menusp">
				
				<h2>Aperitivos</h2>

					<select name="Aperitivos" id="list1">
						<option value="0">Seleccionar...</option>
					   <option value="1">Torta de mole</option> 
					   <option value="2">Torta de jamon</option> 
					   <option value="3">Torta de queso de puerco</option>
					   <option value="4">Quesadilla de bisteck</option> 
					   <option value="5">Quesadilla de longaniza</option> 
					   <option value="6">Chillaquiles</option> 
					</select>
					<input type="text" name ="cAperitivos" id="cAperitivos" placeholder="Escribe la cantidad">

				</div>
				<div class="menusp">
					<h2>Bebidas</h2>
					<select name="Bebidas" id="list2">
					<option value="0">Seleccionar...</option>
					   <option value="1">Coca-cola</option> 
					   <option value="2">Fanta</option> 
					   <option value="3">Sprite</option>
					   <option value="4">Mirinda</option> 
					   <option value="5">7up</option> 
					   <option value="6">Pepsi</option> 
					</select>
					<input type="text" name ="cBebidas" id="cBebidas" placeholder="Escribe la cantidad">
				</div>

				<div class="menusp">
					<h2>Descripción de la orden</h2>
					<textarea name="Comentarios" id="Comentarios" cols="60" rows="5"></textarea>

					<p><button name="btn_pedir" id="btn_pedir">Pedir</button></p>
				</div>
				</form>


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