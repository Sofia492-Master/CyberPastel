<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Gestión de Proveedores</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Estilos locales -->
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
        
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold text-dark-pink"><i class="fa-solid fa-truck-field me-2"></i>Gestión de Proveedores de Insumos</h2>
                <p class="text-muted mb-0">Directorio de aliados comerciales encargados de proveer materias primas para la pastelería.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-sweet shadow-sm" data-bs-toggle="modal" data-bs-target="#modalProveedor">
                    <i class="fa-solid fa-plus me-2"></i>Nuevo Proveedor
                </button>
            </div>
        </div>

        <!-- Tabla de Proveedores -->
        <div class="card card-custom p-4 bg-white shadow-sm">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-address-book me-2 text-pink"></i>Proveedores Registrados</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Empresa / Proveedor</th>
                            <th>Insumo Principal</th>
                            <th>Contacto / Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">Molinos del Norte S.A.</td>
                            <td>Harina de Trigo / Cacao</td>
                            <td>311 234 5678</td>
                            <td>ventas@molinosdelnorte.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Editar"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Lácteos & Mantequillas Sabor</td>
                            <td>Mantequilla y Crema de Leche</td>
                            <td>320 987 6543</td>
                            <td>pedidos@lacteossabor.com</td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Editar"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal Nuevo Proveedor -->
    <div class="modal fade" id="modalProveedor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card-custom">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-dark-pink"><i class="fa-solid fa-truck-field me-2"></i>Registrar Nuevo Proveedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Nombre de la Empresa / Proveedor</label>
                            <input type="text" class="form-control" placeholder="Ej. Distribuidora de Azúcar Bogotá" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Insumo Principal que Provee</label>
                            <input type="text" class="form-control" placeholder="Ej. Azúcar Glass y Morena" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Teléfono de Contacto</label>
                            <input type="text" class="form-control" placeholder="Ej. 300 000 0000" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="contacto@proveedor.com" required>
                        </div>
                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sweet">Guardar Proveedor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/admin.js"></script>
</body>
</html>