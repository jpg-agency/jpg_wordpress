<?php include 'header.php'; ?>


Landing Page

<div class="container_fluid">

    <div class="row"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>



        <?php endwhile;
                        endif; ?>
    </div>
    <div class="row"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <p>
                    <?php the_content(); ?>
                </p>
        <?php endwhile;
                        endif; ?>
    </div>
    <div class="row">projet</div>
    <div class="row"></div>

</div>





<?php include 'footer.php'; ?>