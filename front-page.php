<?php include 'header.php'; ?>



<div class="container">

    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



                <?php the_content(); ?>


        <?php endwhile;
        endif; ?>
    </div>



</div>
<?php include 'footer.php'; ?>