<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Seguimiento de Pedido</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Estilos locales -->
    <link rel="stylesheet" href="stely.css">
</head>
<body class="bg-light">

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-pink" href="catalogo.php">
                <i class="fa-solid fa-arrow-left me-2"></i>Volver al Catálogo
            </a>
            <span class="text-muted small">Módulo de Clientes</span>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card card-custom bg-white border-0 shadow-sm p-4 mb-4 text-center">
                    <div class="mb-3">
                        <i class="fa-solid fa-magnifying-glass-chart fa-3x text-pink bg-light-pink p-3 rounded-circle"></i>
                    </div>
                    <h3 class="fw-bold text-dark mb-2">Consulta el Estado de tu Torta</h3>
                    <p class="text-muted small mb-4">Ingresa el código de tu pedido para ver el avance en tiempo real.</p>
                    
                    <div class="input-group mb-3">
                        <input type="text" id="inputCodigo" class="form-control" placeholder="Ej. PED-2026-001">
                        <button class="btn btn-sweet px-4 fw-bold" type="button">Consultar</button>
                    </div>
                </div>

                <div class="card card-custom bg-white border-0 shadow-sm p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
                        <div>
                            <span class="text-muted small">Pedido:</span>
                            <h5 class="fw-bold text-dark mb-0">#PED-2026-042</h5>
                        </div>
                        <span class="badge bg-warning text-dark px-3 py-2">En Producción 🧑‍🍳</span>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-dark mb-1">Torta de Chocolate Fudge</h6>
                        <small class="text-muted">Fecha estimada: 15 de Octubre, 3:00 PM</small>
                    </div>

                    <div class="timeline px-2">
                        <div class="d-flex mb-3">
                            <div class="me-3 text-success fs-5"><i class="fa-solid fa-circle-check"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">1. Pedido Registrado & Abono Recibido</h6>
                                <small class="text-muted">Abono del 50% confirmado.</small>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3 text-pink fs-5"><i class="fa-solid fa-spinner fa-spin"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark-pink">2. En Preparación en el Obrador</h6>
                                <small class="text-muted">Horneando y decorando tu pastel.</small>
                            </div>
                        </div>

                        <div class="d-flex text-muted">
                            <div class="me-3 fs-5"><i class="fa-regular fa-circle"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">3. Listo para Retirar / En Ruta</h6>
                                <small class="text-muted">Pendiente de despacho final.</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/admin.js"></script>
</body>
</html>