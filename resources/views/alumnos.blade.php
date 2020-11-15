<!DOCTYPE html>
<?php
//require 'functions.php';
//Define queienes tienen permiso en este archivo
//$permisos = ['Administrador','Profesor'];
//permisos($permisos);

?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de calificaciones" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">
        <h1>Registro de calificaciones</h1>
        <h3>Usuario:  <?php //echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li><a href="paginainicial">Inicio</a> </li>
        <li class="active"><a href="alumnos">Registro de Alumnos</a> </li>
        <li><a href="listaralumnos">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de calificaciones</a> </li>
        <li><a href="listadonotas.view.php">Consulta de calificaciones</a> </li>
        <li class="right"><a href="index">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
            <h4>Registro de Alumnos</h4>

            @if(Session::has('mensaje'))
            {{ Session::get('mensaje') }}
        @endif
            <form method="post" class="form" action="alumnos">
                @csrf
                <label>Nombres</label><br>
                <input type="text" required name="nombres" maxlength="45">
                <br>
                <label>Apellidos</label><br>
                <input type="text" required name="apellidos" maxlength="45">
                <br><br>
                <label>No de Lista</label><br>
                <input type="number" min="1" class="number" name="numlista">
                <br><br>
                <label>Sexo</label><br><input required type="radio" name="genero" value="M"> Masculino
                <input type="radio" name="genero" required value="F"> Femenino
                              
                <br><br>
                <button type="submit" name="insertar">Guardar</button> <button type="reset">Limpiar</button> <a class="btn-link" href="listadoalumnos.view.php">Ver Listado</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                ?>

            </form>
        <?php
        if(isset($_GET['err']))
            echo '<span class="error">Error al guardar</span>';
        ?>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2020</p>
</footer>

</body>

</html>