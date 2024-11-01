<?php
session_start();

if (isset($_GET['producto'])) {
    $producto = $_GET['producto'];

    if (!isset($_SESSION[$producto])) {
        $_SESSION[$producto] = 1;
    } else {
        $_SESSION[$producto]++;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Compra producto</title>
</head>

<body>
    <?php if (isset($producto)): ?>
        <p>Se agregó un(a) <?php echo htmlspecialchars($producto); ?> al carrito.</p>
        <p>Ahora hay <?php echo $_SESSION[$producto]; ?> <?php echo htmlspecialchars($producto); ?>(s).</p>
    <?php else: ?>
        <p>No se ha especificado ningún producto.</p>
    <?php endif; ?>

    <p><a href="?producto=silla">Agregar silla</a></p>
    <p><a href="?producto=mesa">Agregar mesa</a></p>
    <p><a href="?producto=escritorio">Agregar escritorio</a></p>
    <p><a href="?producto=caramelos">Agregar Caramelos</a></p>
    <p><a href="carrito.php">Ver carrito</a></p>
</body>
</html>
