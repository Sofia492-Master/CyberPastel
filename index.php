<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberPastel - Bienvenidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/stely.css">
</head>
<body class="d-flex flex-column min-vh-100 hero-bg-custom">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-navbar shadow-sm sticky-top">
        <div class="container">
            <!-- ESPACIO PARA TU LOGO: Reemplaza o añade tu etiqueta <img> aquí -->
            <a class="navbar-brand fw-bold fs-4 cyber-logo-text d-flex align-items-center gap-2" href="index.php">
                <img src="img/logo.png" alt="Logo" class="custom-logo-img mb-2">
                <div><i class="fa-solid fa-cake-candles text-pink me-1"></i><span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span></div>
            </a>
            <div class="d-flex align-items-center gap-2">
                <a href="public/catalogo.php" class="btn btn-outline-danger btn-sm rounded-pill px-3 border-0 bg-light-pink text-pink fw-semibold">
                    <i class="fa-solid fa-store me-1"></i> Ver Tienda
                </a>
                <a href="login.php" class="btn btn-sweet btn-sm">
                    <i class="fa-solid fa-user-lock me-1"></i> Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido Hero -->
    <div class="container my-auto py-5">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8">
                <div class="card card-custom p-5 border-0 shadow-lg">
                    <div class="mb-4">
                        <div class="icon-box mx-auto shadow-sm" style="width: 80px; height: 80px; font-size: 2.2rem;">
                            <i class="fa-solid fa-cake-candles text-pink"></i>
                        </div>
                    </div>
                    <h1 class="fw-bold display-5 mb-3 cyber-logo-text">
                        <span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span> 
                    </h1>
                    <p class="text-muted fs-5 mb-4">
                        Pastelería artesanal con un toque futurista y dulce. Diseña, encarga y disfruta de los mejores postres personalizados con gestión automatizada.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="public/catalogo.php" class="btn btn-sweet btn-lg px-4 shadow-sm">
                            <i class="fa-solid fa-store me-2"></i> Explorar Catálogo
                        </a>
                        <a href="login.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill border-0 bg-light shadow-sm text-dark">
                            <i class="fa-solid fa-user-gear me-2"></i> Panel Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 text-muted small bg-white border-top border-light">
        <p class="mb-0">Desarrollado por Valery Sofia Puerto Romero &copy; ADSO - SENA</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>