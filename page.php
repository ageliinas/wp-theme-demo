<?php get_header(); ?>

<main>
    <?php if(have_posts(  )) : ?>

        <?php while(have_posts(  )) : the_post(  ); ?>

        <article class="flex post">

            <div class="texte-article">
                <h2><?php the_title( ); ?></h2>
                <p><?php the_content( ); ?></p>
            </div>
        </article>

    <?php endwhile; ?>

    <?php endif;?>       
</main>

<?php get_footer(); ?>