const thumbnails=document.querySelectorAll(".thumbnail");
const modales=document.querySelectorAll(".modal");
let id;

thumbnails.forEach(function(thumbnail){
    thumbnail.addEventListener('click', function(){
        removeActivaClase();
        id = thumbnail.id;
        window.alert(id);
    })
})

modales.forEach(function(modal){
    modal.addEventListener('click', function(){
        removeActivaClase();
        modal.classList.add('activa');
    })
})

//FUNCIONES FLECHA
 function removeActivaClase(){
     modales.forEach(modal => {
         modal.classList.remove("activa");
     });
 }
