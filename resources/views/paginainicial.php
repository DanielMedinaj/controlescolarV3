<!DOCTYPE html>
<?php
//require 'functions.php';
//$permisos = ['Administrador','Profesor','Alumno'];
//permisos($permisos);

?>
<html>
<head>
<title>Inicio | Registro de calificaciones</title>
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
        <li class="active"><a href="paginainicial">Inicio</a> </li>
        <li><a href="alumnos">Registro de Alumnos</a> </li>
        <li><a href="listaralumnos">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de calificaciones</a> </li>
        <li><a href="listadonotas.view.php">Consulta de calificaciones</a> </li>
        <li class="right"><a href="index">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        
    </div>
</div>

<footer>

    
</footer>

</body>

</html>