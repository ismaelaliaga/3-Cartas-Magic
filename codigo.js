const figures=document.querySelectorAll(".contenedorFoto");
figures.forEach(function(figure){
    figure.addEventListener('click', function(){
        removeActivaClase();
        figure.classList.add('activa');
    })
})

// function removeActivaClase(){
//     figures.forEach(function(figure){
//         figure.classList.remove("activa");
//     })
// }

//FUNCIONES FLECHA
function removeActivaClase(){
    figures.forEach(figure => {
        figure.classList.remove("activa");
    });
}
