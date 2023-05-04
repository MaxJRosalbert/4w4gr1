(function(){
  console.log('début carrousel')
  let bouton = document.querySelector('.carrousel__ouvrir');
  /* ---------------------- Variable du carrousel ------------------------ */
  let carrousel = document.querySelector('.carrousel');
  let carrousel__x = document.querySelector('.carrousel__x');
  let carrousel__figure = document.querySelector('.carrousel__figure')
  let carrousel__form = document.querySelector('.carrousel__form')
  let carrousel__precedent = document.querySelector('.carrousel__precedent')
  let carrousel__suivant = document.querySelector('.carrousel__suivant')
  // console.log(carrousel__form.tagName);
  /**---------------------- Variable de la galerie ------------------------ */
  let galerie = document.querySelector(".galerie");
  let galerie__img = galerie.querySelectorAll("img")
  console.log(galerie__img.length);
  //console.log(carrousel.tagName);
  /*---------------------- Positionnement de la class active --------------------- */
  let index = 0; //permet d'identifier l'image courante du carrousel
  let ancien_index = -1 ; //permet d'identifier l'image précedente
  let position = 0 // Permet d'indexer les images de galerie et
/**
 * Permet de créer le carrousel en parcourrant la galerie d'image
 */
  ajouter_img_dans_carrousel()

/**
 * Navigation dans le carrousel avec le bouton précédent : carrousel__precedent
 */
carrousel__precedent.addEventListener('mousedown', function(){
  index--
  if (index == -1) {
    index = galerie__img.length -1
  }
  console.log(index);
  afficher_image(index)
})

/**
 * Navigation dans le carrousel avec le bouton suivant : carrousel__suivant
 */
 carrousel__suivant.addEventListener('mousedown', function(){
  index++
  if (index == galerie__img.length) {
    index = 0;
  }
  console.log(index);
  afficher_image(index)
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
        // img.setAttribute('src', elm.getAttribute('src'))
        /**retire les 12 derniers caractères « -150x150.jpg » */
         let longueur = elm.src.length-12
        // let extension = elm.src.substr(0, longueur)
        img.src = substr(0, longueur) + ".jpg"
        // img.src = elm.src
        img.classList.add("carrousel__img")
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
    carrousel__form.children[ancien_index].checked = false
  }
  // carrousel__figure.children[index].style.opacity = 1
  redimentionner_carrousel()
  carrousel__figure.children[index].classList.add('carrousel__img--activer')
  carrousel__form.children[index].checked = true
  ancien_index = index
  
  // console.log(carrousel.classList.contain('carrousel--activer'));
  
  
  
}

function redimentionner_carrousel(){
  /**récupérer les dimensions de l'image courante */
  const imageWidth = carrousel__figure.children[index].naturalWidth
  const imageHeight = carrousel__figure.children[index].naturalHeight
  const windowWidth = window.innerWidth
  const windowHeight = window.innerHeight

  let carrouselWidth = windowWidth
  if (windowWidth > 1000) {
    carrouselWidth = windowWidth - windowWidth/2
  }

  let carrouselHeight = carrouselWidth * imageHeight/imageWidth

  carrousel.style.width = `${carrouselWidth}px`
  carrousel.style.height = `${carrouselHeight}px`
  carrousel.style.top = `${(windowHeight-carrouselHeight)/2}px`
  carrousel.style.left = `${(windowWidth-carrouselWidth)/2}px`


  console.log(`
  imageWidth = : ${imageWidth} 
  imageHeight = : ${imageHeight}
  windowWidth = : ${windowWidth}
  windowHeight = : ${windowHeight}
  `);  
}


/*
permet de vérifier si la classe « carrousel--activer » 
  se trouve dans la liste des classe carrousel
    carrousel.classList.contain('carrousel--activer')
    mdn classList.contain()
  */

})()