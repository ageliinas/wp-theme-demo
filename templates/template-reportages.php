<?php  

/* 
*
* Template Name: Reportages
* Page qui liste les reportages
*
*/


?>

<?php get_header(); ?>

<!-- Afficher le titre et description de la page -->
<h2><?php echo get_the_title(); ?></h2>
<p><?php echo get_the_content(); ?></p>

<div class="flex">
    <?php 
    
    //paramètres pour la requête
    $args = array('category_name' => 'reportage',
        'order' => 'title',
        'order_by' => 'ASC'
    );
    
    //Exécution de la requête
    $query = new WP_Query($args);
    
    //Boucle sur les résultats de la requête
    if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); 
    ?>

        <article>
            <!-- Récupérer le titre du reportage et l'afficher -->
            <h3><?php echo get_field('titre') ?></h3>

            <!-- Récupérer la date du reportage et l'afficher -->
            <p><?php echo get_field('date') ?></p>

            <!-- Récupérer la photo et l'afficher -->
            <?php if (get_field('image')): ?>
                <img src="<?php echo get_field('image')['sizes']['large']?>" alt="">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/images/placeholder.png" alt="" width='150' height='150'>
            <?php endif ?>
            
            
        </article>

    <?php
    endwhile;
    endif;
    
    //réinitialiser le poste global
    wp_reset_postdata();
     ?>
</div>

<?php get_footer(); ?>