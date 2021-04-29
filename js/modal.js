const thumbnails=document.querySelectorAll(".thumbnail");
const cartas=document.querySelectorAll(".carta");

thumbnails.forEach(function(thumbnail){
    thumbnail.addEventListener('click', function(){
        removeActivaClase();
        this.parentNode.children[1].classList.add('activa');
        
    })
})

cartas.forEach(function(carta){
    carta.addEventListener('click', function(){
        removeActivaClase();
    })
})

//FUNCIONES FLECHA
 function removeActivaClase(){
     cartas.forEach(carta => {
         carta.classList.remove("activa");
     });
 }
