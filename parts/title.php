
<?php $loop = new WP_Query((array('post_type' => 'Landing','order'=>'ASC'))); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
    <div class="row"><div class="text__slogan">
             <h1 <?php echo do_shortcode( '[typed string0="Une agence, pas les meilleurs, mais des web designer exceptionnel" string1="Une agence, pas les meilleurs, mais les plus droles" string2=".JPG" string3="" typeSpeed="40" startDelay="0" backSpeed="40" backDelay="500" loop="1"]' ) ?></h1>
        </div></div>
        <div class="row"><div class="text__genese">
            <p class="text__genese_p"> <?php the_content() ?></p>
        </div></div>
        
        <?php endwhile; wp_reset_query(); ?>
   

