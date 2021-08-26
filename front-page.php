<?php get_header(); ?>


    <div class="text">
        <?php get_template_part ('parts/title' )?>
    </div>

    <div>
        <h2><?php /* get_template_part('home' ) */?></h2>

        <div class="gallery_img">
            <?php get_template_part('parts/projets' )?>
        </div>
    </div>

    <div>

        
        <div class="support"> 
        <?php get_template_part('parts/galerie' )?>
        </div>
    </div>
</div>

    
    
<?php get_footer(); ?>