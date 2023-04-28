const carrito=document.getElementById("carrito");
carrito.onclick=verCesta;

function verCesta() {
    window.location.href = "ver_carrito.php";
}

var carritoDeCompras = {
    articulos: [],
  
    agregarArticulo: function(articulo) {
      this.articulos.push(articulo);
      console.log("Artículo agregado al carrito de compras:", articulo);
    }
  };
  
  function añadirArticulo(codigo, descripcion, precio) {
    carritoDeCompras.agregarArticulo({
      codigo: codigo,
      descripcion: descripcion,
      precio: precio,
    });
  }



  function mostrarCarrito() {
    var mensaje = "Artículos en el carrito: \n\n";
    for (var i = 0; i < carritoDeCompras.articulos.length; i++) {
      mensaje += "- Código: " + carritoDeCompras.articulos[i].codigo + ", ";
      mensaje += "Descripción: " + carritoDeCompras.articulos[i].descripcion + ", ";
      mensaje += "Precio: " + carritoDeCompras.articulos[i].precio + " €\n";
    }}