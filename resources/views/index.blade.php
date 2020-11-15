<?php
use App\Http\Controllers\LoginController;

//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Credenciales incorrectas",
    "2" => "No ha iniciado sesión"
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Registro de calificaciones</title>
    <meta name="description" content="Registro de calificaciones" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">

        <h1>Registro de calificaciones</h1>

</div>

<div class="body">
    
    <div class="panel-login">
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
    @if(Session::has('mensaje_error'))
    {{ Session::get('mensaje_error') }}
@endif
            <h4>Inicio de Sesion</h4>
            <form method="post" class="form" action="login">
            @csrf
            <label>Usuario</label><br>
                <input type="text" name="username">
                <br>
                <label>Contraseña</label><br>
                <input type="password" name="password">
                <br><br>
                <button type="submit">Ingresar</button>
            </form>
        <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2020</p>
</footer>
<script src="js/sha1.js"></script>
</body>

</html>