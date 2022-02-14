<?php get_header(); ?>

<main>

    <h2>Résultats de recherche</h2>

    <?php if(have_posts(  )) : ?>

        <?php while(have_posts(  )) : the_post(  ); ?>

        <article class="flex post">

            <!--Afficher seulement le titre + extrait et lien -->
            <div class="texte-article">
                <h2><?php the_title( ); ?></h2>
                <p><?php the_excerpt( ); ?> <a href="<?php the_permalink(  );?>">En savoir plus...</a> </p>
            </div>
        </article>

    <?php endwhile; ?>

    <?php else : ?>

        <!--Si aucun résultats de recherche -->
        <p>Aucun résultat pour cette requête...</p>

    <?php endif;?>       
</main>

<?php get_footer(); ?>