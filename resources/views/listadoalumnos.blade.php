<?php
//require 'functions.php';

//$permisos = ['Administrador','Profesor'];
//permisos($permisos);
//consulta los alumnos para el listaddo de alumnos
//$alumnos = $conn->prepare("select a.id, a.num_lista, a.nombres, a.apellidos, a.genero from alumnos order by a.apellidos");
//$alumnos = $conn->prepare("select * from alumnos order by apellidos");

//$alumnos->execute();
//$alumnos = $alumnos->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
<title>Listado de Alumnos - Registro de calificaciones</title>
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
        <li><a href="alumnos">Registro de Alumnos</a> </li>
        <li class="active"><a href="listaralumnos">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de calificaciones</a> </li>
        <li><a href="listadonotas.view.php">Consulta de calificaciones</a> </li>
        <li class="right"><a href="index">Salir</a> </li>

    </ul>
</nav>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">num_lista</th>
        <th scope="col">nombres</th>
        <th scope="col">apellidos</th>
        <th scope="col">genero</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($alumnos as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->num_lista }}</td>
        <td>{{ $item->nombres }}</td>
        <td>{{ $item->apellidos }}</td>
        <td>{{ $item->genero }}</td>

        <td>@mdo</td>
      </tr>
      @endforeach
    </tbody>
  </table>


<!---------------------------------------------------------------------------------------------------->
<!--<div class="body">
    <div class="panel">
            <h4>Listado de Alumnos</h4>
            <table class="table" cellspacing="0" cellpadding="0">
                <tr>
                    <th>No de<br>lista</th><th>Apellidos</th><th>Nombres</th><th>Genero</th>
                    <th>Editar</th><th>Eliminar</th>
                </tr>
                <?php //foreach ($alumnos as $alumno) :?>
                <tr>
                    <td align="center"><?php //echo $alumno['num_lista'] ?></td><td><?php //echo $alumno['apellidos'] ?></td>
                    <td><?php //echo $alumno['nombres'] ?></td><td align="center"><?php //echo $alumno['genero'] ?></td>
                    
                    <td><a href="alumnoedit.view.php?id=<?php //echo $alumno['id'] ?>">Editar</a> </td>
                    <td><a href="alumnodelete.php?id=<?php //echo $alumno['id'] ?>">Eliminar</a> </td>
                </tr>
                <?php //endforeach;?>
            </table>
                <br><br>

                <a class="btn-link" href="alumnos.view.php">Agregar Alumno</a>
                <br><br>
                
                <?php /*
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                */?>


        </div>
</div> -->
<!-------------------------------------------------------------------------------------------------------->
<footer>
    <p>Derechos reservados &copy; 2020</p>
</footer>

</body>

</html>