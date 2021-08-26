<?php get_header(); ?>


<<<<<<< HEAD

<div class="container">

    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



                <?php the_content(); ?>


        <?php endwhile;
        endif; ?>
    </div>



</div>
<?php include 'footer.php'; ?>
=======
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
>>>>>>> williams
