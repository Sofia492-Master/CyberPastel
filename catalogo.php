<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberPastel - Tienda Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stely.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-navbar shadow-sm sticky-top">
        <div class="container">
            <!-- ESPACIO PARA TU LOGO -->
            <a class="navbar-brand fw-bold fs-4 cyber-logo-text d-flex align-items-center gap-2" href="../index.php">
                 <img src="/img/logo.png" alt="Logo" class="custom-logo-img">
                <div><i class="fa-solid fa-cake-candles text-pink me-1"></i><span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span></div>
            </a>
            <div class="d-flex align-items-center gap-3">
                <a href="carrito.php" class="btn btn-outline-danger position-relative border-0 bg-light-pink text-pink rounded-pill px-3">
                    <i class="fa-solid fa-cart-shopping me-1"></i> Carrito
                    <span id="contadorCarritoBadge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-pink">0</span>
                </a>
                <a href="../index.php" class="btn btn-outline-secondary btn-sm rounded-pill px-3 border-0 bg-light">
                    <i class="fa-solid fa-house me-1"></i> Inicio
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido del Catálogo -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark display-5 cyber-logo-text">Vitrina de <span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span></h1>
            <p class="text-muted fs-5">Selecciona tus pasteles artesanales favoritos y personaliza tu encargo.</p>
        </div>

        <!-- Cuadrícula de 10 Productos con sus respectivas imágenes -->
        <div class="row g-4">
            
            <?php 
            $productos = [
                ["Pastel Artesanal Cacao", 65000, "Bizcocho esponjoso con capas de crema.", "../img/cacao.jpg"],
                ["Torta Neón Red Velvet", 72000, "Red velvet con glaseado brillante.", "../img/red-velvet.jpg"],
                ["Cheesecake de Frutos Rojos", 68000, "Base crujiente y crema de queso suave.", "../img/cheesecake.jpg"],
                ["Galletas Cyber Choco-Chip", 35000, "Pack de 6 galletas con chispas.", "../img/galletas.jpg"],
                ["Pastel Vainilla y Fresa", 60000, "Bizcocho de vainilla con fresas naturales.", "../img/vainilla-fresa.jpg"],
                ["Rollo de Canela Glaseado", 28000, "Esponjoso rollo bañado en glaseado.", "../img/rollo-canela.jpg"],
                ["Cupcakes Holográficos", 45000, "Caja de 4 cupcakes decorados.", "../img/cupcakes.jpg"],
                ["Pastel de Limón y Merengue", 62000, "Crema agridulce y merengue tostado.", "../img/limon-merengue.jpg"],
                ["Donas Glaseadas Sweet", 32000, "Pack de 4 donas artesanales.", "../img/donas.jpg"],
                ["Pastel Tres Leches Cyber", 70000, "Bizcocho empapado con chantilly.", "../img/tres-leches.jpg"]
            ];

            foreach ($productos as $index => $prod) {
            ?>
            <div class="col-md-4">
                <div class="card card-custom h-100 p-3">
                    <!-- IMAGEN DEL PRODUCTO -->
                    <img src="<?= $prod[3] ?>" class="card-img-top rounded-3 mb-3 shadow-sm" alt="<?= $prod[0] ?>" style="height: 220px; object-fit: cover;">

                    <div class="card-body p-0 d-flex flex-column">
                        <h5 class="fw-bold text-dark"><?= $prod[0] ?></h5>
                        <p class="text-muted small"><?= $prod[2] ?></p>
                        <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top border-light">
                            <span class="fs-5 fw-bold text-pink">$<?= number_format($prod[1], 0, ',', '.') ?></span>
                            <button class="btn btn-sweet btn-sm btn-agregar" data-nombre="<?= $prod[0] ?>" data-precio="<?= $prod[1] ?>">
                                <i class="fa-solid fa-plus me-1"></i> Encargar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="cliente.js"></script>
</body>
</html>
<?php
// 1. Llamamos al archivo de conexión
require_once 'conexion.php'; 

try {
    // 2. Consultamos los productos directamente de la base de datos
    $stmt = $conexion->prepare("SELECT nombre, precio, descripcion, imagen FROM productos");
    $stmt->execute();
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error al cargar los productos: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo - CyberPastel</title>
</head>
<body>
    <h1>Nuestros Productos</h1>
    <ul>
        <?php foreach ($productos as $prod): ?>
            <li>
                <strong><?= htmlspecialchars($prod['nombre']) ?></strong> - 
                $<?= number_format($prod['precio'], 0, ',', '.') ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>