<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetManager - Gestión de Usuarios y Roles</title>
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
                <h2 class="fw-bold text-dark-pink"><i class="fa-solid fa-users-gear me-2"></i>Gestión de Usuarios y Roles</h2>
                <p class="text-muted mb-0">Controla los accesos, permisos y perfiles del personal administrativo y operativo.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button type="button" class="btn btn-sweet shadow-sm" data-bs-toggle="modal" data-bs-target="#modalUsuario">
                    <i class="fa-solid fa-user-plus me-2"></i>Nuevo Usuario
                </button>
            </div>
        </div>

        <!-- Tabla de Usuarios Registrados -->
        <div class="card card-custom p-4 bg-white shadow-sm">
            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-id-card-clip me-2 text-pink"></i>Personal Autorizado</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Correo Electrónico</th>
                            <th>Rol en el Sistema</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-semibold">Valery Sofia Puerto</td>
                            <td>valery.puerto@sweetmanager.com</td>
                            <td><span class="badge bg-danger px-3 py-2">Administrador 👑</span></td>
                            <td><span class="badge bg-success">Activo</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Editar"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold">Carlos Pérez</td>
                            <td>carlos.pastel@sweetmanager.com</td>
                            <td><span class="badge bg-primary px-3 py-2">Empleado / Obrador 🧑‍🍳</span></td>
                            <td><span class="badge bg-success">Activo</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" title="Editar"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal Nuevo Usuario -->
    <div class="modal fade" id="modalUsuario" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card-custom">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-dark-pink"><i class="fa-solid fa-user-plus me-2"></i>Registrar Nuevo Colaborador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Nombre Completo</label>
                            <input type="text" class="form-control" placeholder="Ej. Ana Gómez" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="correo@sweetmanager.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Contraseña Temporal</label>
                            <input type="password" class="form-control" placeholder="••••••••" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Rol y Permisos</label>
                            <select class="form-select">
                                <option value="admin">Administrador (Acceso Total)</option>
                                <option value="empleado">Empleado / Obrador (Recetas y Pedidos)</option>
                            </select>
                        </div>
                        <div class="text-end mt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sweet">Guardar Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/admin.js"></script>
</html>