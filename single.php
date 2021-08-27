

    <?php get_header(); ?>

<div class="container_projets">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
  <div class="titre"><h2><?php the_title(); ?></h2></div>


  <div class="content"><?php the_content(); ?></div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>