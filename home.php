<div class="container_fluid">
    cucou
    <div class="row"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>



        <?php endwhile;
                        endif; ?>
    </div>