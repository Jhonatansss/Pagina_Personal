<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Página personal - Carrito de compras</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h2 class="menu-title">Menú</h2>
        <nav>
            <ul>
                <li><a href='index.html'>Inicio</a></li>
                <li><a href='autobiografia.html'>¿Quién soy?</a></li>
                <li><a href='galeria.html'>Galería</a></li>
                <li><a href='contacto.html'>Contacto</a></li>
                <li><a href="actividades.html">Actividades</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Carrito de compras</h1>
    <table>
        <tr>
            <td>Descripción</td>
            <td>Cantidad</td>
            <td>Agregar</td>
            <td>Eliminar</td>
        </tr>
        <tr>
            <td>Silla</td>
            <td><?php echo $_SESSION['silla'] ?? 0; ?></td>
            <td><a href="php/compra.php?producto=silla"><img src="carrito.jpg" width="41" height="35" /></a></td>
            <td><a href="php/baja.php?producto=silla"><img src="tache.jpg" width="41" height="35" /></a></td>
        </tr>
        <tr>
            <td>Mesa</td>
            <td><?php echo $_SESSION['mesa'] ?? 0; ?></td>
            <td><a href="php/compra.php?producto=mesa"><img src="carrito.jpg" width="41" height="35" /></a></td>
            <td><a href="php/baja.php?producto=mesa"><img src="tache.jpg" width="41" height="35" /></a></td>
        </tr>
        <tr>
            <td>Escritorio</td>
            <td><?php echo $_SESSION['escritorio'] ?? 0; ?></td>
            <td><a href="php/compra.php?producto=escritorio"><img src="carrito.jpg" width="41" height="35" /></a></td>
            <td><a href="php/baja.php?producto=escritorio"><img src="tache.jpg" width="41" height="35" /></a></td>
        </tr>
        <tr>
            <td>Caramelos</td>
            <td><?php echo $_SESSION['caramelos'] ?? 0; ?></td>
            <td><a href="php/compra.php?producto=caramelos"><img src="carrito.jpg" width="41" height="35" /></a></td>
            <td><a href="php/baja.php?producto=caramelos"><img src="tache.jpg" width="41" height="35" /></a></td>
        </tr>
    </table>
    
    <footer>
        Tizimín, Yucatán, Agosto, 2024.
    </footer>
</body>
</html>
