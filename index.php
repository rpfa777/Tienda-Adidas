<?php
include("conexion.php");

$mensaje = "";

if (isset($_POST['comprar'])) {
    $producto = $_POST['producto'];
    $talla = $_POST['talla'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO pedidos (producto, talla, cantidad) VALUES ('$producto', '$talla', '$cantidad')";

    if (mysqli_query($conexion, $sql)) {
        $mensaje = "<p style='color: green; font-weight: bold;'>¡Pedido registrado con éxito en SQL!</p>";
    } else {
        $mensaje = "<p style='color: red;'>Error al procesar la compra: " . mysqli_error($conexion) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Oficial Adidas</title>
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

        table {
            margin: 0 auto;
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
        <img src="logo.png" alt="logo">
        <nav>
            <a href="index.php">Inicio / Tienda</a> | 
            <a href="login.php">Iniciar Sesión</a> | 
            <a href="registro.php">Registrarse</a>
        </nav>
    </div>

    <div class="contenido">
        <h1>Tienda Oficial Adidas</h1>
        
        <?php echo $mensaje; ?>

        <h2>Catálogo de Calzado y Ropa</h2>

        <table border="1" cellpadding="10">
            <tr>
                <td align="center">
                    <img src="TENIS.png" alt="bzrp" width="150" height="200"><br>
                    <strong>Tenis Adidas Forum Low x BZRP (Edición Especial)</strong><br>
                    Precio: $2,499 MXN
                </td>

                <td align="center">
                    <img src="Gorra.png" alt="gorra" width="250" height="200"><br>
                    <strong>La gorra original de BZRP Classic</strong><br>
                    Precio: $1,199 MXN
                </td>

                <td align="center">
                    <img src="bb.png" alt="badbunny" width="250" height="200"><br>
                    <strong>Adidas x Bad Bunny Tenis</strong><br>
                    Precio: $1,499 MXN
                </td>
            </tr>
        </table>

        <br><hr><br>

        <h2>Formulario de Compra</h2>

        <form action="index.php" method="POST">
            
            <label>Selecciona un Producto:</label><br>
            <select name="producto" required>
                <option value="">-- Selecciona una opción --</option>
                <option value="Tenis Adidas Forum Low x BZRP">Tenis Adidas Forum Low x BZRP (Edición Especial)</option>
                <option value="Gorra BZRP Classic">La gorra original de BZRP Classic</option>
                <option value="Adidas x Bad Bunny Tenis">Adidas x Bad Bunny Tenis</option>
            </select>
            <br><br>

            <label>Talla:</label><br>
            <select name="talla" required>
                <option value="S">Chica (S)</option>
                <option value="M">Mediana (M)</option>
                <option value="L">Grande (L)</option>
                <option value="26">26 MX</option>
                <option value="27">27 MX</option>
            </select>
            <br><br>

            <label>Cantidad:</label><br>
            <input type="number" name="cantidad" value="1" min="1" max="10" required>
            <br><br>

            <input type="submit" name="comprar" value="Enviar Pedido">

        </form>
    </div>

    <footer>
        <p>Ramos Flores Pedro Alexis<br>5-i</br></p>
    </footer>

</body>
</html>