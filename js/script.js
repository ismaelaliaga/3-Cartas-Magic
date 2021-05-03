const thumbnails = document.querySelectorAll(".thumbnail");
const cartas = document.querySelectorAll(".carta");
const magics = document.querySelectorAll(".magic");
const ultimoselementos = document.querySelectorAll(".ultimoselementos");
const ordennombreasc = document.getElementById("nombreasc");
const ordennombredesc = document.getElementById("nombredesc");
const ordentiposasc = document.getElementById("tipoasc");
const ordentiposdesc = document.getElementById("tipodesc");
let contador = 0;
let nombres = [];
let tipos = [];

//MOSTRAR LA CARTA QUE PERTENECE AL THUMBNAIL

thumbnails.forEach(function (thumbnail) {
    thumbnail.addEventListener('click', function () {
        removeActivaClase();
        this.parentNode.children[1].classList.add('activa');
    })
})

//DEJAR DE MOSTRAR LA CARTA EN LA PANTALLA AL HACER CLICK EN ELLA

cartas.forEach(function (carta) {
    carta.addEventListener('click', function () {
        removeActivaClase();
    })
})

//DEJAR DE MOSTRAR TODAS LAS CARTAS

function removeActivaClase() {
    cartas.forEach(carta => {
        carta.classList.remove("activa");
    });
}

//RECOGER DATOS DEL DATASET EN ARRAYS PARA ORDENAR

magics.forEach(function (magic) {
    arnombres = document.querySelectorAll(".magic")[contador].dataset.nombre;
    artipos = document.querySelectorAll(".magic")[contador].dataset.tipo;
    nombres.push(arnombres);
    tipos.push(artipos);
    contador++;
})


//SORT NOMBRE

function añadirstyleordernombre() {

    nombres.forEach(function (elemento, indice, nombres) {
        contador = 0;
        magics.forEach(function (magic) {
            if (elemento == document.querySelectorAll(".magic")[contador].dataset.nombre) {
                document.querySelectorAll(".magic")[contador].style.order = indice;
            }
            contador++;
        })
    })
    ordenultimoselementos();
}

ordennombreasc.addEventListener('click', function () {
    eliminarorder()
    nombres.sort();
    añadirstyleordernombre();
})

ordennombredesc.addEventListener('click', function () {
    eliminarorder()
    nombres.sort();
    nombres.reverse();
    añadirstyleordernombre();
})

//SORT TIPOS

function añadirstyleordertipo() {

    tipos.forEach(function (elemento, indice, tipos) {
        contador = 0;
        magics.forEach(function (magic) {
            if (elemento == document.querySelectorAll(".magic")[contador].dataset.tipo) {
                document.querySelectorAll(".magic")[contador].style.order = indice;
            }
            contador++;
        })
    })
    ordenultimoselementos();
}

ordentiposasc.addEventListener('click', function () {
    eliminarorder()
    tipos.sort();
    añadirstyleordertipo();
})

ordentiposdesc.addEventListener('click', function () {
    eliminarorder()
    tipos.sort();
    tipos.reverse();
    añadirstyleordertipo();
})

//SORT VALOR DEFAULT BD



//ELIMINAR SORTS

function eliminarorder() {
    magics.forEach(function (magic) {
        magic.style.order = "";
    })
}

//ESTABLECER ORDEN FINAL BOTONES DE ORDENADO

function ordenultimoselementos() {
    totalcartas = document.getElementsByClassName("magic").length;
    console.log(totalcartas);
    ultimoselementos.forEach(function (elemento) {
        elemento.style.order = totalcartas;
    })

}


