<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Mi Carrito y Encargo</title>
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
                <i class="fa-solid fa-arrow-left me-2"></i>Seguir Comprando
            </a>
            <span class="navbar-text fw-bold text-dark-pink">🍰 Finalizar Encargo</span>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <div class="row g-5">
            
            <!-- Columna Izquierda -->
            <div class="col-lg-7">
                <div class="card card-custom bg-white border-0 shadow-sm p-4 mb-4">
                    <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-basket-shopping me-2 text-pink"></i>Productos Seleccionados</h4>
                    
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                    <th><i class="fa-solid fa-trash-can"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="fw-bold mb-0">Torta de Chocolate Fudge</h6>
                                        <small class="text-muted">Tamaño: 8 Porciones | Relleno: Fudge</small>
                                    </td>
                                    <td>$65,000</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 90px;">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" value="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </td>
                                    <td class="fw-bold">$65,000</td>
                                    <td><button class="btn btn-sm text-danger"><i class="fa-solid fa-xmark"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Datos de Envío -->
                <div class="card card-custom bg-white border-0 shadow-sm p-4">
                    <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-truck-fast me-2 text-pink"></i>Datos de Envío y Evento</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Nombre del Cliente</label>
                                <input type="text" class="form-control" placeholder="Valery Sofia Puerto">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Teléfono de Contacto</label>
                                <input type="text" class="form-control" placeholder="310 000 0000">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Dirección de Entrega (Bogotá)</label>
                            <input type="text" class="form-control" placeholder="Dirección exacta">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Fecha del Evento</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Hora Preferida</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Columna Derecha: Resumen de Pago -->
            <div class="col-lg-5">
                <div class="card card-custom bg-white border-0 shadow-sm p-4 sticky-top" style="top: 90px;">
                    <h4 class="fw-bold text-dark mb-4"><i class="fa-solid fa-receipt me-2 text-pink"></i>Resumen del Encargo</h4>
                    
                    <div class="d-flex justify-content-between mb-2 text-muted">
                        <span>Subtotal:</span>
                        <span class="fw-bold text-dark">$65,000</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 text-muted">
                        <span>Envío (Bogotá):</span>
                        <span class="fw-bold text-dark">$10,000</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold fs-5 text-dark">Total:</span>
                        <span class="fw-bold fs-4 text-dark-pink">$75,000</span>
                    </div>

                    <div class="alert alert-warning py-3 px-3 mb-4 rounded-3 border-0 bg-light-warning">
                        <div class="d-flex">
                            <i class="fa-solid fa-triangle-exclamation text-warning fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Política de Abono (50%)</h6>
                                <p class="small text-muted mb-0">Se requiere un abono inicial para iniciar la producción.</p>
                                <hr class="my-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-dark small">Abono requerido:</span>
                                    <span class="fw-bold text-danger fs-5">$37,500</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-sweet w-100 py-3 fw-bold shadow-sm mb-3" onclick="alert('¡Pedido registrado con éxito!')">
                        <i class="fa-solid fa-shield-heart me-2"></i>Confirmar y Pagar Abono
                    </button>
                    <a href="catalogo.php" class="btn btn-outline-secondary w-100 py-2 border-0">Seguir Explorando</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/admin.js"></script>
</body>
</html>