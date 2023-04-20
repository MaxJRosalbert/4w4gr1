(function(){
    console.log('début carrousel')
    let bouton = document.querySelector('.carrousel__ouvrir');
    /* ---------------------- Variable du carrousel ------------------------ */
    let carrousel = document.querySelector('.carrousel');
    let carrousel__x = document.querySelector('.carrousel__x');
    let carrousel__figure = document.querySelector('.carrousel__figure')
    let carrousel__form = document.querySelector('.carrousel__form')
    console.log(carrousel__form.tagName);
    /**---------------------- Variable de la galerie ------------------------ */
    let galerie = document.querySelector(".galerie");
    let galerie__img = galerie.querySelectorAll("img")
    console.log(galerie__img.length);
    //console.log(carrousel.tagName);
    /*---------------------- Positionnement de la class active --------------------- */
    let index = 0;
    let ancien_index = -1 ;
    let position = 0 // Permet d'indexer les images de galerie et

/************************** OUVRIR LA BOITE MODALE *********************/
    bouton.addEventListener('mousedown',function(){
        console.log('ouvrir la boite');
        carrousel.classList.add('carrousel--active')


        ajouter_img_dans_carrousel()
        
        console.log(galerie__img.length);
        console.log(carrousel__figure.length);
        console.log(carrousel__form.length);
        console.log(galerie.length);
    

        
    /* https://developer.mozilla.org/en-US/docs/Web/API/Element/classList 
    
    propriété clasList.contain('carrousel--activer') permet de vérifier si  le carrousel est ouvert
    */


    })

    

/************************** FERMER LA BOITE MODALE *********************/
    carrousel__x.addEventListener('mousedown',function(){
        console.log('fermer la boite');
        carrousel.classList.remove('carrousel--active')

    })
    
// propriété classList.contain(carrousel--activer)

/**
 * ajouter_img_dans_carrousel
 * Ajouter l'ensemble des images de la galerie dans la boite modale carrousel 
 */
 function ajouter_img_dans_carrousel()
 {

    for (const elm of galerie__img)
    {
      elm.dataset.index = position
      elm.addEventListener('mousedown',function(){
        index = this.dataset.index
        afficher_image(index)
        console.log(index)
      })
  
      creation_img_carrousel(elm)
      creation_radio_carrousel()
    }
 }

 function creation_img_carrousel(elm){
        // console.log(elm.getAttribute('src'))
        let img = document.createElement('img')
        img.src = elm.src
        img.classList.add("carrousel__img")
        // img.setAttribute('src', elm.getAttribute('src'))
        // console.log(img.getAttribute('src'));
        carrousel__figure.appendChild(img)
 }
/**
 * Création d'un radio-bouton
 */
 function creation_radio_carrousel(){
    let rad = document.createElement('input')
    rad.setAttribute('type', 'radio')
    rad.setAttribute('name', 'carrousel__rad')
    rad.classList.add('carrousel__rad')
    rad.dataset.index = position
    // position = position + 1 incrémentation de 1
    position++
    carrousel__form.appendChild(rad)
    rad.addEventListener('mousedown', function(){
        console.log(this.dataset.index);
        index = this.dataset.index
        afficher_image(index)
    })
 }

 function afficher_image(index){
    
    if (ancien_index != -1){
        // carrousel__figure.children[ancien_index].style.opacity = 0  
        carrousel__figure.children[ancien_index].classList.remove('carrousel__img--activer')
        // form.children[ancien_index].checked
       }
       // carrousel__figure.children[index].style.opacity = 1
       carrousel__figure.children[index].classList.add('carrousel__img--activer')
       ancien_index = index
 }

 /**
  * 
  */

})()