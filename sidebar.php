<article>
    <h3>Compléments</h3>

    <div class="widget-container">
        
        <!--Afficher le widget 1 -->
        <?php if(is_active_sidebar( 'widget-1 ')) : ?>
            
            <?php dynamic_sidebar( 'widget-1' );?>
        
        <?php endif; ?>
    </div>

    <div class="widget-container">
        
        <!--Afficher le widget 2 -->
        <?php if(is_active_sidebar( 'widget-2 ')) : ?>
            
            <?php dynamic_sidebar( 'widget-2' );?>
        
        <?php endif; ?>
    </div>
    
</article>