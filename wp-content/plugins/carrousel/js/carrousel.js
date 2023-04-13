(function(){
    console.log('début carrousel')
    let bouton = document.querySelector('.carrousel__ouvrir');
/* ---------------------- Variable du carrousel ------------------------ */
    let carrousel = document.querySelector('.carrousel');
    let carrousel__x = document.querySelector('.carrousel__x');
    let carrousel__figure = document.querySelector('.carrousel__figure')
    let galerie = document.querySelector(".galerie");
    let galerie__img = galerie.querySelectorAll("img")
    // console.log(galerie__img.length);

/************************** OUVRIR LA BOITE MODALE *********************/
    bouton.addEventListener('mousedown',function(){
        console.log('ouvrir la boite');
        carrousel.classList.add('carrousel--active')
        ajouter_img_dans_carrousel()
    })

/************************** FERMER LA BOITE MODALE *********************/
    carrousel__x.addEventListener('mousedown',function(){
        console.log('fermer la boite');
        carrousel.classList.remove('carrousel--active')
    })

/**
 * ajouter_img_dans_carrousel
 * Ajouter l'ensemble des images de la galerie dans la boite modale carrousel 
 */
 function ajouter_img_dans_carrousel()
 {
    for(const elm of galerie__img){
        // console.log(elm.getAttribute('src'))
        let img = document.createElement('img')
        img.setAttribute('src', elm.getAttribute('src'))
        console.log(img.getAttribute('src'));
        carrousel__figure.appendChild(img)
    }
 }

})()