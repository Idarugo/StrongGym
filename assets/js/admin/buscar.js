// Obtén los elementos <li> dentro del elemento con clase "navegacion"
const listaItems = document.querySelectorAll('.navegacion li');

// Obtén el campo de búsqueda
const inputBuscar = document.querySelector('.buscar');

// Agrega un evento de entrada al campo de búsqueda
inputBuscar.addEventListener('input', function() {
  // Obtén el valor del campo de búsqueda y conviértelo a minúsculas para una búsqueda sin distinción entre mayúsculas y minúsculas
  const busqueda = inputBuscar.value.toLowerCase();

  // Itera sobre los elementos <li> y muestra/oculta según coincidan con la búsqueda
  listaItems.forEach((item) => {
    // Obtén el texto dentro del elemento <li>
    const textoItem = item.textContent.toLowerCase();
    
    // Comprueba si el texto del elemento <li> contiene la búsqueda
    if (textoItem.includes(busqueda)) {
      // Si coincide, muestra el elemento
      item.style.display = 'block';
    } else {
      // Si no coincide, oculta el elemento
      item.style.display = 'none';
    }
  });
});
