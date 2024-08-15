import { API_URL } from "./constants.js"

// Esta función realiza una solicitud GET a la API PHP utilizando Axios
function obtenerDatosDesdeAPI() {
  axios
    .get(`${API_URL}/productos`) // Ruta de la API
    .then((response) => {
      // Manipular los datos obtenidos
      const $gridProductos = document.querySelector("#contenedor-items")
      const $productosTabla = document.querySelector("#cuerpo-tabla-datos")
      $gridProductos.innerHTML = response.data
        .map((producto) => {
          return `
            <div class="item">
					<figure alt="${producto.description}">
						<img src="assets/img/muestrario/${producto.isbn}.png" alt="${producto.name} por ${producto.author}">
					</figure>
					<div>
                  <h3>${producto.name}</h3>
                  <span>${producto.author}. ${producto.year}</span>
                  <span>${producto.price}</span>
                  <button data-id="${producto.id}">Añadir al carrito</button>
					</div>
				</div>
            `
        })
        .join("")
      $productosTabla.innerHTML = response.data
        .map((producto) => {
          return `
            <tr>
			      <td>${producto.isbn}</td>
               <td>${producto.type}</td>
               <td>${producto.name}</td>
               <td>${producto.author}</td>
               <td>${producto.year}</td>
               <td>${producto.subtype}</td>
               <td>${producto.price}</td>
		      </tr>
            `
        })
        .join("")
    })
    .catch((error) => {
      // Manejar errores de la solicitud
      console.error("Error de la solicitud:", error)
    })
}

// Llamar a la función para obtener los datos cuando se cargue la página, por ejemplo
document.addEventListener("DOMContentLoaded", obtenerDatosDesdeAPI)
