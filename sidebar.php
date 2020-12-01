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
    <div class="copy">&copy;<?php echo date('Y');?> <?php echo get_option( 'copy' ); ?></div>
</div>
<div class="wrapper">
<div class="side-space"></div>