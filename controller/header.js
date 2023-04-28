const acceder=document.getElementById("acceder");
acceder.onclick=acc;

function acc() {
    window.location.href = "login.php";
}

const registro=document.getElementById("registro");
registro.onclick=reg;

function reg() {
    window.location.href = "signUp.php";
}