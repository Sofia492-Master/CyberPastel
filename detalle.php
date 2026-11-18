<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Personalizar Producto</title>
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
            <span class="text-muted small">Personalización de Producto</span>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <div class="row g-5 align-items-center">
            
            <!-- Columna Izquierda: Vista previa visual -->
            <div class="col-md-6">
                <div class="card card-custom bg-white border-0 shadow-sm p-4 text-center">
                    <div class="bg-light-pink py-5 rounded-3 mb-3 position-relative">
                        <span class="position-absolute top-0 start-0 m-3 badge bg-pink">Personalizable</span>
                        <i class="fa-solid fa-cake-candles fa-6x text-pink py-4"></i>
                    </div>
                    <div class="text-start px-2">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-circle-info me-2 text-pink"></i>Ingredientes Principales</h5>
                        <p class="text-muted small mb-0">Harina de trigo premium, cacao orgánico, mantequilla artesanal, huevos frescos y fudge de chocolate semiamargo.</p>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Opciones de Personalización -->
            <div class="col-md-6">
                <div class="card card-custom bg-white border-0 shadow-sm p-4">
                    <span class="badge bg-light text-pink border border-pink-subtle w-fit mb-2">Torta Tradicional</span>
                    <h2 class="fw-bold text-dark mb-2">Torta de Chocolate Fudge</h2>
                    <p class="text-muted small mb-4">Diseña tu pastel ideal seleccionando tamaño, rellenos y mensajes personalizados.</p>
                    
                    <h3 class="text-dark-pink fw-bold mb-4" id="precioBase" data-precio="65000">$65,000 <span class="fs-6 text-muted fw-normal">Precio base</span></h3>

                    <form id="formPersonalizacion">
                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">1. Selecciona el Tamaño (Porciones)</label>
                            <select id="selectPorciones" class="form-select">
                                <option value="0" data-extra="0">8-10 Porciones (Estándar)</option>
                                <option value="15000" data-extra="15000">12 Porciones (+ $15,000)</option>
                                <option value="30000" data-extra="30000">16 Porciones / Familiar (+ $30,000)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">2. Elige tu Relleno Favorito</label>
                            <select id="selectRelleno" class="form-select">
                                <option value="Fudge">Fudge de Chocolate (Incluido)</option>
                                <option value="Arequipe">Arequipe Artesanal (+ $5,000)</option>
                                <option value="Avellanas">Crema de Avellanas (+ $10,000)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small text-muted">3. Mensaje en la Torta</label>
                            <input type="text" id="inputMensaje" class="form-control" placeholder="Ej. ¡Feliz Cumpleaños!">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small text-muted">4. Adiciones Opcionales</label>
                            <div class="form-check">
                                <input class="form-check-input aditivo" type="checkbox" value="5000" id="velaMagica">
                                <label class="form-check-label small text-muted" for="velaMagica">Vela volcánica / Mágica (+ $5,000)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input aditivo" type="checkbox" value="8000" id="empaqueRegalo">
                                <label class="form-check-label small text-muted" for="empaqueRegalo">Empaque de regalo con moño (+ $8,000)</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-3 mb-3">
                            <span class="fw-bold text-muted">Total Personalizado:</span>
                            <span id="precioTotal" class="fw-bold text-dark-pink fs-3">$65,000</span>
                        </div>

                        <button type="button" id="btnAgregarPersonalizado" class="btn btn-sweet w-100 py-3 fw-bold shadow-sm">
                            <i class="fa-solid fa-cart-plus me-2"></i>Agregar al Encargo
                        </button>
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