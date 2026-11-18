<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Gestión de Recetas (BOM)</title>
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
        
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold text-dark-pink"><i class="fa-solid fa-book-open-reader me-2"></i>Módulo de Recetas & Escandallo (BOM)</h2>
                <p class="text-muted mb-0">Define los ingredientes y porciones requeridas para la elaboración de cada producto.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-sweet shadow-sm" data-bs-toggle="modal" data-bs-target="#modalReceta">
                    <i class="fa-solid fa-plus me-2"></i>Nueva Receta / Escandallo
                </button>
            </div>
        </div>

        <!-- Tabla de Recetas Registradas -->
        <div class="card card-custom p-4 bg-white shadow-sm">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-utensils me-2 text-pink"></i>Fichas Técnicas de Producción</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Producto Asociado</th>
                            <th>Insumos / Ingredientes Asignados</th>
                            <th>Costo Estimado Producción</th>
                            <th>Rendimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">Torta de Chocolate Fudge</td>
                            <td>
                                <span class="badge bg-light text-dark border me-1">Harina (400g)</span>
                                <span class="badge bg-light text-dark border me-1">Cacao (150g)</span>
                                <span class="badge bg-light text-dark border">Mantequilla (200g)</span>
                            </td>
                            <td class="fw-bold text-dark-pink">$22,500</td>
                            <td>1 Torta (10 Porciones)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Ver Detalle"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Cheesecake de Frutos Rojos</td>
                            <td>
                                <span class="badge bg-light text-dark border me-1">Queso Crema (500g)</span>
                                <span class="badge bg-light text-dark border me-1">Galletas (200g)</span>
                                <span class="badge bg-light text-dark border">Frutos Rojos (300g)</span>
                            </td>
                            <td class="fw-bold text-dark-pink">$28,000</td>
                            <td>1 Unid. (8 Porciones)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Ver Detalle"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal Nueva Receta -->
    <div class="modal fade" id="modalReceta" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content card-custom">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-dark-pink"><i class="fa-solid fa-receipt me-2"></i>Crear Ficha Técnica (Escandallo)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label text-muted">Seleccionar Producto del Catálogo</label>
                            <select class="form-select">
                                <option>Torta de Chocolate Fudge</option>
                                <option>Cheesecake de Frutos Rojos</option>
                                <option>Pastel Tres Leches</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted">Ingredientes necesarios y cantidades (BOM)</label>
                            <div class="row g-2 mb-2">
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option>Harina de Trigo (Gramos)</option>
                                        <option>Azúcar Glass (Gramos)</option>
                                        <option>Mantequilla (Gramos)</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Cantidad (ej. 500)">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-danger w-100"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-plus me-1"></i>Agregar otro ingrediente</button>
                        </div>
                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sweet">Guardar Receta</button>
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