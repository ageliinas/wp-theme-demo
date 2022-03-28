
document.addEventListener("DOMContentLoaded", () => {

  //Valider si on est sur l'accueil
  const home = document.querySelector('.home');

  //Afficher le slider juste sur le home
  if (home) {
    new Splide( '.splide' ).mount();  
  } 
    
  // Activer le js pluggin interactif de la gallerie
  new SimpleLightbox({elements: '.imageGallery1 a'});
  
  const entrevue = document.querySelector(".page-template-template-entrevues");
  if (entrevue) {
    // Si nous sommes dans la page entrevues
    document.querySelector('.btn-all').disabled = true;
    
  };

});

function showEntrevueType(type, btn) {

  // Activer tous les boutons
  document.querySelectorAll('button').forEach((item) => {
    item.disabled = false;
  });

  const items = document.querySelectorAll('.entrevue');

  // Bouton cliqué désactivé
  btn.disabled = true;

  // Cacher tous les éléments
  items.forEach((item) => {
    if (type == 'all') {
      item.style.display = 'flex'; 
    } else {
      // Si le type demandé est celui de l'item
      if (type == item.dataset.type) {
        item.style.display = 'flex';
      } else {
        item.style.display = 'none';
      }
    }
  });

  /*items.forEach((item) => {  
    switch (type) {
      case 'video':
        if (item.dataset.type == 'video') {
            item.style.display = 'flex';
        };
        break;

      case 'audio':
        if (item.dataset.type == 'audio') {
            item.style.display = 'flex';
        };
        break;

      case 'text':
        if (item.dataset.type == 'text') {
            item.style.display = 'flex';
        };
        break;


      case 'all':
      default:
        item.style.display = 'flex';  
        break;
    }
  });
  */
};

