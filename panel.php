<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberPastel - Panel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/stely.css">
</head>
<body>

    <!-- Navbar Admin -->
    <nav class="navbar navbar-expand-lg bg-navbar shadow-sm py-3 sticky-top">
        <div class="container-fluid">
            <!-- ESPACIO PARA TU LOGO EN EL PANEL -->
            <a class="navbar-brand fw-bold fs-4 cyber-logo-text d-flex align-items-center gap-2" href="panel.php">
                 <class src="docs/img/logo.png" alt="Logo" class="custom-logo-img mb-2"></class>
                <div><i class="fa-solid fa-cake-candles me-2 text-pink"></i><span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span> <span class="small text-muted fs-6">| Admin</span></div>
            </a>
            
            <div class="d-flex align-items-center gap-3">
                <a href="../index.php" class="btn btn-outline-danger btn-sm rounded-pill px-3 border-0 bg-light-pink text-pink fw-semibold">
                    <i class="fa-solid fa-store me-1"></i> Ver Tienda Pública
                </a>
                <div class="text-secondary small border-start ps-3 d-none d-md-block">
                    <i class="fa-solid fa-user-shield text-pink me-1"></i> <strong>Valery Sofia</strong> (ADSO)
                </div>
            </div>
        </div>
    </nav>

    <!-- Sub-barra de Navegación Admin -->
    <div class="bg-white border-bottom shadow-sm py-2 mb-4">
        <div class="container-fluid">
            <ul class="nav nav-pills gap-2">
                <li class="nav-item">
                    <a class="nav-link active btn-sweet text-white fw-semibold" href="panel.php"><i class="fa-solid fa-boxes-stacked me-1"></i> Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="pedidos.php"><i class="fa-solid fa-clipboard-list me-1"></i> Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="recetas.php"><i class="fa-solid fa-book-open me-1"></i> Recetas (BOM)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuarios.php"><i class="fa-solid fa-users-gear me-1"></i> Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="reportes.php"><i class="fa-solid fa-chart-line me-1"></i> Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="proveedores.php"><i class="fa-solid fa-truck-field me-1"></i> Proveedores</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="container-fluid px-4 my-4">
        
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold text-dark cyber-logo-text">Panel General de <span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span></h2>
                <p class="text-muted mb-0">Resumen operativo, control de inventario en tiempo real y alertas de stock bajo.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-sweet shadow-sm" data-bs-toggle="modal" data-bs-target="#modalIngrediente">
                    <i class="fa-solid fa-plus me-2"></i>Nuevo Ingrediente
                </button>
            </div>
        </div>

        <!-- Tarjetas de Estadísticas -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Ingredientes Registrados</h6>
                            <h3 class="fw-bold text-dark mb-0">4</h3>
                        </div>
                        <div class="icon-box"><i class="fa-solid fa-wheat-awn"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Productos en Catálogo</h6>
                            <h3 class="fw-bold text-dark mb-0">10</h3>
                        </div>
                        <div class="icon-box"><i class="fa-solid fa-cookie-bite"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-4 shadow-sm border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Pedidos Pendientes</h6>
                            <h3 class="fw-bold text-dark mb-0">3</h3>
                        </div>
                        <div class="icon-box"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Inventario -->
        <div class="card card-custom p-4 shadow-sm border-0">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-boxes-stacked me-2 text-pink"></i>Estado del Inventario de Ingredientes</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="tablaInventario">
                    <thead>
                        <tr>
                            <th>Ingrediente</th>
                            <th>Unidad</th>
                            <th>Stock Actual</th>
                            <th>Stock Mínimo</th>
                            <th>Costo Unitario</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">Harina de Trigo</td>
                            <td>Gramos</td>
                            <td>800.00</td>
                            <td>1,000.00</td>
                            <td>$0.01</td>
                            <td><span class="badge bg-danger px-3 py-2">Stock Bajo (Alerta)</span></td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Azúcar Glass</td>
                            <td>Gramos</td>
                            <td>3,000.00</td>
                            <td>800.00</td>
                            <td>$0.02</td>
                            <td><span class="badge bg-success px-3 py-2">Normal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/admin.js"></script>
</body>
</html>
