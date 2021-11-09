<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="thumbnail"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
      <div class="titre">
        <h2><?php the_title(); ?></h2>
      </div>


      <div class="content"><?php the_content(); ?></div>
</div>
<?php endwhile;
  endif; ?>
<?php get_footer(); ?>