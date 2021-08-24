<div class="text">
<?php $loop = new WP_Query((array('post_type' => 'Galerie','order'=>'ASC'))); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="text__slogan">
             <h1><?php the_title() ?></h1>
        </div>
        
        <div class="text__genese">
            <p class="text__genese_p"> <?php the_content() ?></p>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
