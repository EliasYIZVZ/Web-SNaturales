//Redirige al usuario a la página de inicio cuando hace click en el logo de la página.

let imagen =document.getElementById("logoBoton");


imagen.addEventListener("click", function() {
    location.href = "../index.html";
});