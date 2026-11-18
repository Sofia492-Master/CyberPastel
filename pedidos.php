<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Gestión de Pedidos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="../public/stely.css">
</head>
<body class="bg-light">

    <!-- Navbar Privado -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="../index.php"><i class="fa-solid fa-cake-candles me-2"></i>SweetManager Admin</a>
            <div class="d-flex align-items-center text-white">
                <a href="../index.php" class="text-white text-decoration-none small me-3"><i class="fa-solid fa-arrow-left me-1"></i> Volver al Panel</a>
                <span><i class="fa-solid fa-user-shield me-1"></i> Valery Sofia (ADSO)</span>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container my-4">
        
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold text-dark-pink"><i class="fa-solid fa-clipboard-list me-2"></i>Gestión y Seguimiento de Pedidos</h2>
                <p class="text-muted mb-0">Controla los encargos de los clientes, valida abonos del 50% y actualiza el estado de producción.</p>
            </div>
        </div>

        <!-- Tartabla de Pedidos -->
        <div class="card card-custom p-4 bg-white shadow-sm">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-clock-rotate-left me-2 text-pink"></i>Encargos Recientes</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Código</th>
                            <th>Cliente</th>
                            <th>Producto / Detalle</th>
                            <th>Total / Abono (50%)</th>
                            <th>Estado Actual</th>
                            <th>Acciones / Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-dark">#PED-042</td>
                            <td>
                                <span class="fw-semibold">Camila Torres</span><br>
                                <small class="text-muted">310 456 7890</small>
                            </td>
                            <td>
                                Torta Chocolate Fudge (8 Porciones)<br>
                                <small class="text-muted">Mensaje: "¡Feliz Cumpleaños Mamá!"</small>
                            </td>
                            <td>
                                $65,000 <br>
                                <span class="badge bg-success text-white">Abono: $32,500 (Ok)</span>
                            </td>
                            <td>
                                <span class="badge bg-warning text-dark px-3 py-2">En Producción 🧑‍🍳</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Cambiar Estado
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">1. Pendiente de Abono</a></li>
                                        <li><a class="dropdown-item" href="#">2. En Producción</a></li>
                                        <li><a class="dropdown-item" href="#">3. Listo para Retirar</a></li>
                                        <li><a class="dropdown-item" href="#">4. Entregado</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/admin.js"></script>
</body>
</html>