const input = document.querySelector("#buscador");
const listaArticulos = document.querySelector("#listaArticulos");
let opcionesFiltradas = [];

function filtrarArticulos() {
  const busqueda = input.value.trim().toLowerCase();

  if (busqueda === "") {
    listaArticulos.style.display = "none";
    return;
  }

  listaArticulos.style.display = "block";

  opcionesFiltradas = [];

  document.querySelectorAll(".articulo").forEach(articulo => {
    const textoArticulo = articulo.textContent.trim().toLowerCase();
    const coincide = textoArticulo.includes(busqueda);

    if (coincide) {
      articulo.classList.remove("filtro");
      opcionesFiltradas.push(articulo);
    } else {
      articulo.classList.add("filtro");
    }
  });
}

input.addEventListener("input", filtrarArticulos);

let opcionSeleccionada = -1;

input.addEventListener("keydown", e => {
  if (e.key === "ArrowDown" || e.key === "ArrowUp") {
    e.preventDefault();
    if (listaArticulos.style.display === "none") {
      filtrarArticulos();
    }

    if (e.key === "ArrowDown" && opcionSeleccionada < opcionesFiltradas.length - 1) {
      opcionSeleccionada++;
    } else if (e.key === "ArrowUp" && opcionSeleccionada > 0) {
      opcionSeleccionada--;
    }

    opcionesFiltradas.forEach(opcion => opcion.classList.remove("seleccionada"));

    if (opcionSeleccionada > -1) {
      opcionesFiltradas[opcionSeleccionada].classList.add("seleccionada");
      input.value = opcionesFiltradas[opcionSeleccionada].textContent.trim();
    } else {
      input.value = busqueda;
    }
  } else if (e.key === "Enter") {
    e.preventDefault();
    if (opcionSeleccionada > -1) {
      opcionesFiltradas[opcionSeleccionada].querySelector("a").click();
    } else {
      filtrarArticulos();
    }
  }
});


