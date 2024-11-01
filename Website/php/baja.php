<?php
session_start();

if (isset($_GET['producto'])) {
    $producto = $_GET['producto'];

    
    if (isset($_SESSION[$producto]) && $_SESSION[$producto] > 0) {
        $_SESSION[$producto]--;

        
        if ($_SESSION[$producto] === 0) {
            unset($_SESSION[$producto]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Baja de productos</title>
</head>

<body>
    <?php if (isset($producto)): ?>
        <p>Se eliminó un(a) <?php echo htmlspecialchars($producto); ?> del carrito.</p>
        <p>Ahora hay <?php echo $_SESSION[$producto] ?? 0; ?> <?php echo htmlspecialchars($producto); ?>(s).</p>
    <?php else: ?>
        <p>No se ha especificado ningún producto para eliminar.</p>
    <?php endif; ?>

    <p><a href="compra.php?producto=silla&accion=agregar">Agregar silla</a></p>
    <p><a href="compra.php?producto=mesa&accion=agregar">Agregar mesa</a></p>
    <p><a href="compra.php?producto=escritorio&accion=agregar">Agregar escritorio</a></p>
    <p><a href="compra.php?producto=caramelos&accion=agregar">Agregar Caramelos</a></p>
    <p><a href="carrito.php">Ver carrito</a></p>
</body>
</html>
