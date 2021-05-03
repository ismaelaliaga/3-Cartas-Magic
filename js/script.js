const thumbnails = document.querySelectorAll(".thumbnail");
const cartas = document.querySelectorAll(".carta");
const magics = document.querySelectorAll(".magic");
const magics2 = document.getElementsByClassName("magic");
const ordnomasc = document.getElementById("nombrasc");
let contnombre = 0;
let nombres = [];
let elemento2;

thumbnails.forEach(function (thumbnail) {
    thumbnail.addEventListener('click', function () {
        removeActivaClase();
        this.parentNode.children[1].classList.add('activa');
    })
})

cartas.forEach(function (carta) {
    carta.addEventListener('click', function () {
        removeActivaClase();
    })
})

//FUNCIONES FLECHA
function removeActivaClase() {
    cartas.forEach(carta => {
        carta.classList.remove("activa");
    });
}

magics.forEach(function (magic) {
    arnombres = document.querySelectorAll(".magic")[contnombre].dataset.nombre;
    nombres.push(arnombres);
    contnombre++;
})

ordnomasc.addEventListener('click', function () {
    nombres.sort();
    añadirstyleordernombreasc();

})

function añadirstyleordernombreasc() {
    
    nombres.forEach(function (elemento, indice, nombres) {
        contnombre = 0;
        magics.forEach(function (magic) {
            if (elemento == document.querySelectorAll(".magic")[contnombre].dataset.nombre) {
                document.querySelectorAll(".magic")[contnombre].style.order = indice;
            }
            contnombre++;
        })
    })
}