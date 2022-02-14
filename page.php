<?php get_header(); ?>

<div class="flex">

    <section class="trois-quart">

        <!--Envoyer le template generique -->
        <?php get_template_part('templates/generique-loop');?>

    </section>


    <section class="quart sidebar">

        <!--Sidebar -->
        <?php get_sidebar(); ?>
    </section>
</div>

<?php get_footer(); ?>