
document.addEventListener("DOMContentLoaded", () => {

    //Valider si on est sur l'accueil
    const home = document.querySelector('.home');

    //Afficher le slider juste sur le home
    if (home) {
      new Splide( '.splide' ).mount();  
    } 
    
    // Activer le js pluggin interactif de la gallerie
    new SimpleLightbox({elements: '.imageGallery1 a'});   
});

