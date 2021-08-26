<?php get_header(); ?>


	
 <div class="container">
 <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
   <div class="row"></div>
 </div> 
		<article class="post">
			
            
        <div class="container">

  <div class="titre"><h2><?php the_title(); ?></h2></div>
  <div class="image"><?php the_post_thumbnail(); ?></div>
  <div class="texte"><?php the_content(); ?></div>

</div>	
              

		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>


