// ==========================================
// SWEETMANAGER - SCRIPT MÓDULO ADMINISTRATIVO
// ==========================================

document.addEventListener("DOMContentLoaded", () => {
    
    // Buscador en tiempo real en la tabla de inventario
    const inputBuscador = document.getElementById("buscadorIngrediente");
    if (inputBuscador) {
        inputBuscador.addEventListener("keyup", function() {
            let filtro = this.value.toLowerCase();
            let filas = document.querySelectorAll("#tablaInventario tbody tr");

            filas.forEach(fila => {
                let textoFila = fila.textContent.toLowerCase();
                fila.style.display = textoFila.includes(filtro) ? "" : "none";
            });
        });
    }

    // Formulario dinámico para agregar nuevo ingrediente al stock
    const formIngrediente = document.getElementById("formNuevoIngrediente");
    if (formIngrediente) {
        formIngrediente.addEventListener("submit", function(e) {
            e.preventDefault();
            let nombre = document.getElementById("nombreIng").value;
            let unidad = document.getElementById("unidadIng").value;
            let actual = parseFloat(document.getElementById("stockActual").value);
            let minimo = parseFloat(document.getElementById("stockMinimo").value);
            let costo = parseFloat(document.getElementById("costoIng").value);

            let esCritico = actual <= minimo;
            let badgeClass = esCritico ? 'bg-danger' : 'bg-success';
            let estadoTexto = esCritico ? 'Stock Bajo (Alerta)' : 'Normal';

            let tbody = document.querySelector("#tablaInventario tbody");
            if (tbody) {
                let nuevaFila = document.createElement("tr");
                nuevaFila.innerHTML = `
                    <td class="fw-semibold">${nombre}</td>
                    <td>${unidad}</td>
                    <td>${actual.toFixed(2)}</td>
                    <td>${minimo.toFixed(2)}</td>
                    <td>$${costo.toFixed(2)}</td>
                    <td><span class="badge ${badgeClass} px-3 py-2">${estadoTexto}</span></td>
                `;
                tbody.appendChild(nuevaFila);
            }

            formIngrediente.reset();
            let modalElement = document.getElementById('modalIngrediente');
            if (modalElement) {
                let modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) modal.hide();
            }
        });
    }

    console.log("SweetManager: Script Admin cargado correctamente 🛠️");
});