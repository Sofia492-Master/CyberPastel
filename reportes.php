<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Reportes Financieros</title>
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
        
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold text-dark-pink"><i class="fa-solid fa-chart-line me-2"></i>Reportes Financieros y de Producción</h2>
                <p class="text-muted mb-0">Análisis general de ventas, abonos del 50% recaudados y costos estimados por escandallo.</p>
            </div>
        </div>

        <!-- Tarjetas de Resumen Financiero -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card card-custom p-3 border-start border-4 border-success bg-white shadow-sm">
                    <h6 class="text-muted mb-1">Total Ventas Registradas</h6>
                    <h3 class="fw-bold text-success mb-0">$340,000</h3>
                    <small class="text-muted">Mes actual</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-3 border-start border-4 border-warning bg-white shadow-sm">
                    <h6 class="text-muted mb-1">Abonos Recaudados (50%)</h6>
                    <h3 class="fw-bold text-dark mb-0">$170,000</h3>
                    <small class="text-muted">Pendiente de saldo final contra entrega</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom p-3 border-start border-4 border-pink bg-white shadow-sm">
                    <h6 class="text-muted mb-1">Costo Producción (BOM)</h6>
                    <h3 class="fw-bold text-dark-pink mb-0">$115,000</h3>
                    <small class="text-muted">Basado en recetas y escandallo</small>
                </div>
            </div>
        </div>

        <!-- Tabla Detallada de Movimientos / Reporte -->
        <div class="card card-custom p-4 bg-white shadow-sm">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-file-invoice-dollar me-2 text-pink"></i>Historial de Ingresos y Costos por Pedido</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Código Pedido</th>
                            <th>Cliente</th>
                            <th>Valor Total</th>
                            <th>Abono Ingresado (50%)</th>
                            <th>Costo Insumos (Escandallo)</th>
                            <th>Ganancia Estimada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">#PED-042</td>
                            <td>Camila Torres</td>
                            <td>$65,000</td>
                            <td class="text-success fw-bold">$32,500</td>
                            <td>$22,500</td>
                            <td class="fw-bold text-dark-pink">$42,500</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">#PED-043</td>
                            <td>Mateo Rojas</td>
                            <td>$55,000</td>
                            <td class="text-success fw-bold">$27,500</td>
                            <td>$18,000</td>
                            <td class="fw-bold text-dark-pink">$37,000</td>
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