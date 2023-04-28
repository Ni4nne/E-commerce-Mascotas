const carrito=document.getElementById("carrito");
carrito.onclick=verCesta;

function verCesta() {
    window.location.href = "ver_carrito.php";
}

function añadirArticulo(codigo, descripcion) {
    let url = 'ver_carrito.php';
    let formData = new FormData();
    formData.append('codigo')
    formData.append




  }