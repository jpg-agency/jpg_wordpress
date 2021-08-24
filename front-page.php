<?php get_header(); ?>


    <div class="text">
        <?php get_template_part ('parts/title' )?>
    </div>

    <div>
        <h2><?php /* get_template_part('home' ) */?></h2>

        <div class="gallery_img">
            <?php get_template_part('parts/projets' )?>
        </div>
    </div>

    <div>

        
        <div class="support"> 
        <?php get_template_part('parts/galerie' )?>
        </div>
    </div>
</div>

    <footer>
        <div>
            <p>
                <span class="bold">Adresse</span> <br><br>

                21c rue de général de Charle <br>
                21 000 <br>
                Dijon
            </p>

            
        </div>
        <p class="link">
            <a href=""><span>mention légale</span></a>
            <a href=""><span>instagram</span></a>
            <a href=""><span>linkedIn</span></a>
        </p>
    </footer>
    
<?php get_footer(); ?>