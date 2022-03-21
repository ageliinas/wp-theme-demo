<?php  

/* 
*
* Template Name: Reporters
* Page qui liste les reporters du blog
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
    $args = array('category_name' => 'reporter',
        'order' => 'title',
        'orderby' => 'ASC'
    );
    
    //Exécution de la requête
    $query = new WP_Query($args);
    
    //Boucle sur les résultats de la requête
    if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); 
    ?>
        <a href="<?php echo get_the_permalink() ?>">
            <article>
                <!-- Récupérer les données des champs 'nom' et afficher -->
                <h3><?php echo get_field('prenom') ?>&nbsp;<?php echo get_field('nom') ?></h3>

                <!-- Récupérer la photo et l'afficher -->
                <?php if (get_field('photo')): ?>
                    <img src="<?php echo get_field('photo')['sizes']['thumbnail']?>" alt="">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/portrait.png" alt="" width='150' height='150'>
                <?php endif ?>
                
                <p>Années d'expériences : <?php echo get_field('annees_dexperience') ?></p>
            </article>
        </a>

    <?php
    endwhile;
    endif;
    
    //réinitialiser le poste global
    wp_reset_postdata();
     ?>
</div>

<?php get_footer(); ?>