<?php 
if( ! is_active_sidebar('footer-widget')){

    return;
}

?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php dynamic_sidebar('footer-widget'); ?>
</aside>