<!DOCTYPE html>
<html>

<head>
    <title>21_2075cProWebT3Examen</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="header">
        <h1><img src="img/sistemas.png" height=50px>Cafeteria 1- Instituto Tecnologico Superior de Ciudad Hidalgo <img src="img/itsch.png" height=50px></h1>
            <br>
        </div>

        <div id="content"   >
            <div id="section8">
                <h2>Registrate</h2>

                <div id="s6">
                    <form id="form1" name="form1" method="post" action="ProyectoIntegrador_register.php" onsubmit="return validarForm(this);">
                        <b>Ingresa tu nombre completo <br>
                        <input type="text" name="nombre" id="nombre"> <br> <br>
                        
                        Ingresa tu numero de control <br>
                        <input type="text" name="control" id="control"> <br> <br>
                        
                        Ingresa tu correo electrónico institucional(Solo letras minusculas) <br>
                        <input type="text" name="correo" id="correo"> <br> <br>
                       
                        Escribe tu numero de telefono <br>
                        <input type="text" name="num_tel" id="num_tel"> <br> <br>
                       
                        Marca tu genero <br> <br>
                            <input type="radio" name="genero" value="M"> Masculino
                            <input type="radio" name="genero" value="F"> Femenino <br> <br>
                        
                            Escribe tu contraseña <br>
                        <input type="text" name="contraseña" id="contraseña"> <br> <br>
                       
                        Confirma tu contraseña <br>
                        <input type="text" name="confirmar">

                        <p><button name="btn_registrar" id="btn_registrar">Registrar</button></p>

                        <p>Si ya te haz registrado ahora ingresa en la pagina con el siguiente <a href="ProyectoIntegrador_Login.php">Link</a></p>
                        </b>

                </form>
             </div>
            </div>
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