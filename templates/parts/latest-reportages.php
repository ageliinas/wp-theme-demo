<!-- Affiche les derniers reportages en ordre de date -->

<?php 
    //paramètres pour la requête
    $args = array(
        'category_name' => 'reportage',
        'order' => 'DESC',
        'orderby' => 'date'
    );
    
    //Exécution de la requête
    $query = new WP_Query($args);

?>

<div class="splide">
  <div class="splide__track">
		<ul class="splide__list">

<?php  
    
    //Boucle sur les résultats de la requête
    if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>

    <li class="splide__slide">Reportage</li>

    <?php
    endwhile;
    endif;
    
    //réinitialiser le poste global
    wp_reset_postdata();
    
?>

			
		</ul>
  </div>
</div>