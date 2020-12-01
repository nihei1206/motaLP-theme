<div class="sidebar">
    <p><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
    <nav>
    <?php 
    wp_nav_menu( array( 
      'theme_location' => 'sidebar-nav' 
    ) ); 
    ?>
    </nav>
    <div class="maru"><a href="https://twitter.com/<?php echo get_option( 'sns_tw' ); ?>"><i class="fab fa-twitter"></i></a></div>
    <div class="copy">&copy;2020 山形大学VR部</div>
</div>
<div class="wrapper">
<div class="side-space"></div>