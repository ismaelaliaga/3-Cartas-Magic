const thumbnails = document.querySelectorAll(".thumbnail");
const cartas = document.querySelectorAll(".carta");
const magics = document.querySelectorAll(".magic");
const ultimoselementos = document.querySelectorAll(".ultimoselementos");
const ordennombreasc = document.getElementById("nombreasc");
const ordennombredesc = document.getElementById("nombredesc");
const ordentiposasc = document.getElementById("tipoasc");
const ordentiposdesc = document.getElementById("tipodesc");
const ordendefaultasc = document.getElementById("defaultasc");
const ordendefaultdesc = document.getElementById("defaultdesc");
const informacionh3 = document.getElementById("informacionh3");
const informacioncarta = document.querySelectorAll(".informacioncarta");
let contador = 0;
let nombres = [];
let tipos = [];
let pordefecto = [];

//MOSTRAR LA CARTA QUE PERTENECE AL THUMBNAIL

thumbnails.forEach(function (thumbnail) {
    thumbnail.addEventListener('click', function () {
        removeActivaClase();
        this.parentNode.children[1].classList.add('activa');
        this.parentNode.children[1].scrollIntoView({block: "end", behavior: "smooth"});
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
    ardefault = document.querySelectorAll(".magic")[contador].dataset.default;
    nombres.push(arnombres);
    tipos.push(artipos);
    pordefecto.push(ardefault);
    contador++;
})


//SORT NOMBRE

function a├▒adirstyleordernombre() {

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
    a├▒adirstyleordernombre();
})

ordennombredesc.addEventListener('click', function () {
    eliminarorder()
    nombres.sort();
    nombres.reverse();
    a├▒adirstyleordernombre();
})

//SORT TIPOS

function a├▒adirstyleordertipo() {

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
    a├▒adirstyleordertipo();
})

ordentiposdesc.addEventListener('click', function () {
    eliminarorder()
    tipos.sort();
    tipos.reverse();
    a├▒adirstyleordertipo();
})

//SORT VALOR DEFAULT BD

function a├▒adirstyleorderdefault() {

    pordefecto.forEach(function (elemento, indice, tipos) {
        contador = 0;
        magics.forEach(function (magic) {
            if (elemento == document.querySelectorAll(".magic")[contador].dataset.default) {
                document.querySelectorAll(".magic")[contador].style.order = indice;
            }
            contador++;
        })
    })
    ordenultimoselementos();
}

ordendefaultasc.addEventListener('click', function () {
    eliminarorder()
    pordefecto.sort((a,b)=>a-b);
    a├▒adirstyleorderdefault();
})

ordendefaultdesc.addEventListener('click', function () {
    eliminarorder()
    pordefecto.sort((a,b)=>b-a);
    a├▒adirstyleorderdefault();
})


//ELIMINAR SORTS

function eliminarorder() {
    magics.forEach(function (magic) {
        magic.style.order = "";
    })
}

//ESTABLECER ORDEN FINAL BOTONES DE ORDENADO

function ordenultimoselementos() {
    totalcartas = document.getElementsByClassName("magic").length;
    ultimoselementos.forEach(function (elemento) {
        elemento.style.order = totalcartas;
        ordendefaultdesc.scrollIntoView({block: "end"});
    })

}

//AL HACER CLICK EN LA INFORMACION APARECE

informacionh3.addEventListener('click', function () {
    if(informacioncarta[0].classList.contains("informacioncarta")){
        informacioncarta[0].classList.remove('informacioncarta');
        informacioncarta[0].scrollIntoView({block: "end", behavior: "smooth"});
    }
    else{
        informacioncarta[0].classList.add('informacioncarta');
        informacionh3.scrollIntoView({block: "end", behavior: "smooth"});
    }
})


