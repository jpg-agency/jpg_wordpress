<div class="row">
<h1>Projets</h1></div>



<?php $loop = new WP_Query((array('post_type' => 'Projets','order'=>'ASC'))); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="card" style="width: 18rem;">
  <div class="card-img-top"> 
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>
</div>
  <div class="card-body">
    <p class="card-text"><h1><?php the_title(); ?></h1></p>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>
