<?php get_header(); ?>

<!-- Récupérer les variables des types -->
<?php 
    $video = get_field('video');
    $audio = get_field('audio');
    $texte = get_field('contenu'); 
?>

<!-- Récupérer les champs field et les afficher pour chaque post -->
<div>
    <h2><?php echo get_field('titre') ?></h2>
    <h4><?php echo get_field('date') ?></h4>

    <?php if($video): ?>
    <?php echo $video ?>

    <?php elseif($audio): ?>
    <audio src="<?php echo $audio ?>" controls></audio>

    <?php else: ?>
    <p><?php echo $texte ?></p>
    
    <?php endif; ?>
    
    <!-- Retour à la page précédente des entrevues (regarder id de la page ex: 126) -->
    <a href="<?php echo get_page_link(126) ?>">Retour aux entrevues</a>
</div>

<?php get_footer(); ?>
