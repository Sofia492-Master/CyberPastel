// ==========================================
// SWEETMANAGER - SCRIPT MÓDULO PÚBLICO Y CLIENTES
// ==========================================

document.addEventListener("DOMContentLoaded", () => {
    
    // Mostrar / Ocultar contraseña en el Login
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

    // Validación básica de formulario de Login
    const formLogin = document.getElementById("formLogin");
    const alertaLogin = document.getElementById("alertaLogin");

    if (formLogin) {
        formLogin.addEventListener("submit", (e) => {
            e.preventDefault();
            let correo = document.getElementById("loginCorreo").value;
            let pass = document.getElementById("loginPass").value;

            if (correo.trim() !== "" && pass.trim() !== "") {
                window.location.href = "../index.php"; // O index.php según la ruta
            } else {
                if (alertaLogin) alertaLogin.classList.remove("d-none");
            }
        });
    }

    // Simulación del contador de carrito en el catálogo
    let carrito = [];
    const botonesAgregar = document.querySelectorAll(".btn-agregar");
    const contadorCarrito = document.getElementById("contadorCarritoBadge");

    if (botonesAgregar.length > 0 && contadorCarrito) {
        botonesAgregar.forEach(btn => {
            btn.addEventListener("click", () => {
                let nombre = btn.getAttribute("data-nombre");
                carrito.push(nombre);
                contadorCarrito.textContent = carrito.length;
                alert(`¡"${nombre}" agregado a tu encargo!`);
            });
        });
    }

    console.log("SweetManager: Script Cliente cargado correctamente 🍰");
});
