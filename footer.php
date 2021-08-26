<footer>
    <div class="container">


        <div class="row">
            <div class="col-sm-12 col-md-4">
                <?php $loop = new WP_Query((array('post_type' => 'adresse', 'order' => 'DSC', 'posts_per_page' => 1))); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class=banner_contact_text'>
                        <h5><?php the_title() ?></h5><br>
                        <?php the_content() ?>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
            <div class="col-sm-0 col-md-4">

            </div>

            <div class="col-sm-12 col-md-4">
                <label for="contactFormControlInput" class="form-label text-white">Nous contacter</label>
                <div class="row">

                    <div class="col-8">

                        <input type="email" class="form-control" id="contactFormControlInput" placeholder="name@example.com">
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <p class="link ">
        <a href=""><span>mention légale</span></a>
        <a href=""><span>instagram</span></a>
        <a href=""><span>linkedIn</span></a>
    </p>
</footer>

<?php wp_footer(); ?>

</body>

</html>
