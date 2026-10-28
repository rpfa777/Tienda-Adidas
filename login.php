<?php
include("conexion.php");

$mensaje = "";

if (isset($_POST['ingresar'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $mensaje = "<p style='color: green; font-weight: bold;'>¡Bienvenido! Has iniciado sesión correctamente. <a href='index.php'>Ir a la tienda</a></p>";
    } else {
        $mensaje = "<p style='color: red;'>Correo o contraseña incorrectos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Adidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .barra-nav {
            background-color: #000;
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .barra-nav img {
            height: 50px;
            width: auto;
        }

        .barra-nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .contenido {
            padding: 20px;
        }

        form {
            display: inline-block;
            text-align: left;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }

        footer {
            background-color: #000;
            color: white;
            padding: 20px;
            margin-top: 40px;
            font-size: 14px;
        }

        footer a {
            color: #ccc;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <div class="barra-nav">
        <img src="logo.png" alt="Logo Adidas">
        <nav>
            <a href="index.php">Inicio / Tienda</a> | 
            <a href="login.php">Iniciar Sesión</a> | 
            <a href="registro.php">Registrarse</a>
        </nav>
    </div>

    <div class="contenido">
        <h1>Iniciar Sesión</h1>

        <?php echo $mensaje; ?>

        <form action="login.php" method="POST">
            
            <label>Correo Electrónico:</label><br>
            <input type="email" name="correo" placeholder="correo@ejemplo.com" required>
            <br><br>

            <label>Contraseña:</label><br>
            <input type="password" name="password" placeholder="Tu contraseña" required>
            <br><br>

            <input type="submit" name="ingresar" value="Entrar">

        </form>
    </div>

    <footer>
        <p>Ramos Flores Pedro Alexis<br>5-i</br></p>
    </footer>

</body>
</html>