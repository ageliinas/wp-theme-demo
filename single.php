<?php get_header(); ?>

<?php 
    if (in_category('reporter')) {
        get_template_part('templates/parts/single', 'reporter');

    } else if (in_category('reportage')) {
        get_template_part('templates/parts/single', 'reportage');

    } else {
        //Afficher tout autre article avec un template part
        get_template_part('templates/parts/single', 'news');
    }
?>

<?php get_footer(); ?>
