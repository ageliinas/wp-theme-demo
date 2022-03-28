<?php

/*
*
* Template Name: Entrevues
* Page gabarit qui liste les entrevues du blogue
*/ 

?>

<?php get_header(); ?>

<!-- Afficher le titre et description de la page -->
<h2><?php echo get_the_title(); ?></h2>
<p><?php echo get_the_content(); ?></p>

<!-- Boutons filtres de types -->
<button onclick='showEntrevueType("all", this)' class='btn-all'>Tous</button>
<button onclick='showEntrevueType("video", this)' class='btn-video'>Vidéo</button>
<button onclick='showEntrevueType("audio", this)' class='btn-audio'>Audio</button>
<button onclick='showEntrevueType("text", this)' class='btn-text'>Texte</button>

<br>
<br>

<div class='flex'>
    <?php 
        //paramètres pour la requête
        $args = array(
            'post_type' => 'entrevue',
            'orderby' => 'date' ,
            'order' => 'DESC'
        );

        //Exécution de la requête
        $query = new WP_Query($args);

        //Boucle sur les résultats de la requête
        if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); 

            // Créer des variables pour les types
            $video = get_field('video');
            $audio = get_field('audio');
            $texte = get_field('contenu');  

            // On veut garder le type en cours
            $type = ($video) ? 'video' : (($audio) ? 'audio' : 'text');
        ?>

            <!-- Afficher les images (icones dans le dossier image) + titre de l'article pour chaque types comme lien cliquable -->
            <a class='flex entrevue' href="<?php echo get_the_permalink() ?>" data-type='<?php echo $type ?>'>
                <div>
                    <?php if($video): ?>

                    <img src="<?php echo get_template_directory_uri() ?>/images/video_camera.png" alt="">
                    <?php elseif($audio): ?>

                    <img src="<?php echo get_template_directory_uri() ?>/images/microphone.jpg" alt="">
                    <?php else: ?>

                    <img src="<?php echo get_template_directory_uri() ?>/images/text.jpg" alt="">
                    <?php endif; ?>
                </div>

                <div>
                    <h3><?php echo get_field('titre') ?></h3>
                </div>   
            </a>
        <?php
        endwhile;
        endif;

        //réinitialiser le poste global
        wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>