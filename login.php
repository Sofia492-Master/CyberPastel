<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberPastel - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/stely.css">
</head>
<body class="bg-login-custom d-flex align-items-center justify-content-center min-vh-100">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                
                <div class="card card-custom p-4 shadow-lg border-0">
                    <div class="text-center mb-4">
                        <!-- ESPACIO PARA TU LOGO EN EL LOGIN -->
                        <div class="mb-3">
                            <class src="docs/img/logo.png" alt="Logo" class="custom-logo-img mb-2"></class>
                            <i class="fa-solid fa-cake-candles fa-3x text-pink bg-light-pink p-3 rounded-circle shadow-sm"></i>
                        </div>
                        <h3 class="fw-bold cyber-logo-text mb-1">
                            <span class="text-cyber">Cyber</span><span class="text-pastel-name">Pastel</span>
                        </h3>
                        <p class="text-muted small mb-0">SweetManager • Acceso Administrativo</p>
                    </div>

                    <div id="alertaLogin" class="alert alert-danger d-none py-2 text-center" role="alert">
                        <small><i class="fa-solid fa-triangle-exclamation me-1"></i> Correo o contraseña incorrectos.</small>
                    </div>

                    <form id="formLogin">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Correo Electrónico</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-0"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" id="loginCorreo" class="form-control bg-light border-0" placeholder="valery@cyberpastel.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-0"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" id="loginPass" class="form-control bg-light border-0" placeholder="••••••••" required>
                                <button class="btn btn-outline-light text-muted border-0 bg-light" type="button" id="btnTogglePass">
                                    <i class="fa-solid fa-eye" id="iconoOjo"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="recordarme">
                                <label class="form-check-label text-muted small" for="recordarme">Recordarme</label>
                            </div>
                            <a href="#" class="text-pink small text-decoration-none fw-semibold">¿Olvidaste tu clave?</a>
                        </div>

                        <button type="submit" class="btn btn-sweet w-100 py-2 fw-bold shadow-sm">
                            <i class="fa-solid fa-right-to-bracket me-2"></i>Ingresar al Sistema
                        </button>
                    </form>

                    <div class="text-center mt-4 pt-2 border-top border-light">
                        <a href="index.php" class="text-muted small text-decoration-none">
                            <i class="fa-solid fa-arrow-left me-1"></i> Volver a la Portada
                        </a>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <small class="text-muted">Desarrollado por Valery Sofia &copy; ADSO-SENA</small>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btnTogglePass = document.getElementById("btnTogglePass");
            const loginPass = document.getElementById("loginPass");
            const iconoOjo = document.getElementById("iconoOjo");

            if (btnTogglePass && loginPass && iconoOjo) {
                btnTogglePass.addEventListener("click", () => {
                    const esPassword = loginPass.type === "password";
                    loginPass.type = esPassword ? "text" : "password";
                    iconoOjo.classList.toggle("fa-eye", !esPassword);
                    iconoOjo.classList.toggle("fa-eye-slash", esPassword);
                });
            }

            const formLogin = document.getElementById("formLogin");
            const alertaLogin = document.getElementById("alertaLogin");

            if (formLogin) {
                formLogin.addEventListener("submit", (e) => {
                    e.preventDefault();
                    let correo = document.getElementById("loginCorreo").value;
                    let pass = document.getElementById("loginPass").value;

                    if (correo.trim() !== "" && pass.trim() !== "") {
                        window.location.href = "admin/panel.php";
                    } else {
                        if (alertaLogin) alertaLogin.classList.remove("d-none");
                    }
                });
            }
        });
    </script>
</body>
</html>