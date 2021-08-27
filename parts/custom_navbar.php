<div id="container">
    <nav class="navbar" id='navbar'>
        <div class="navbar__title">
        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
    <?= get_custom_logo($blog_id)?>
        </div>
        <a  class="toggle-button" id="toggle__button">
            
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar__links" id="navbar__links">
            <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>  
            </ul>
        </div>
</nav>
    <div id="progress-container">
        <div class="progress-bar" id="progress-bar" style="width: 0px" ></div>
    </div>
</div>