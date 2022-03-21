<?php

/*

Template Name: Galerie

*/ 

?>

<?php get_header(); ?>

<!-- Afficher le titre et description de la page -->
<h2><?php echo get_the_title(); ?></h2>
<p><?php echo get_the_content(); ?></p>

<div class="flex">
    <?php 

    // Afficher le field de la gallerie
    $images = get_field('image');

    // Faire une boucle sur chaque image de la gallerie (image petite qui devient gros au click)
    if( $images ): ?>     
        <?php foreach( $images as $image ): ?>
            <div class="imageGallery1">
                <a href="<?php echo $image['full_image_url']?>"><img src="<?php echo $image['thumbnail_image_url']?>" alt="images de la gallerie"/></a>
            </div>
        <?php endforeach; ?>       
    <?php endif; ?>
</div>

<?php get_footer(); ?>