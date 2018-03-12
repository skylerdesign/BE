<?php

add_action('wp_head', 'add_your_stuff');
function add_your_stuff() {
    ?>
    <!-- Custom Favicons -->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon-16x16.png" sizes="16x16" />
    <?php
}