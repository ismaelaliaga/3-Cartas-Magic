const thumbnails=document.querySelectorAll(".thumbnail");
let id;
thumbnails.forEach(function(thumbnail){
    thumbnail.addEventListener('click', function(){
        removeActivaClase();
        id = thumbnail.id;
        window.alert(id);
        thumbnail.classList.add('activa');
    })
})

//FUNCIONES FLECHA
function removeActivaClase(){
    thumbnails.forEach(thumbnail => {
        thumbnail.classList.remove("activa");
    });
}
