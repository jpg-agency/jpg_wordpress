<?php include 'header.php'; ?>



<div class="container_fluid">

    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>

                <section id="container">
                    <?php the_content(); ?>
                </section>

        <?php endwhile;
        endif; ?>
    </div>



</div>
<?php include 'footer.php'; ?>