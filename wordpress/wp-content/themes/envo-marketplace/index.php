<?php get_header(); ?>
<!-- start content container -->
<div class="row">
    <div class="col-md-<?php envo_marketplace_main_content_width_columns(); ?>">
        <?php do_action('envo_marketplace_generate_the_content'); ?>
    </div>
    <?php get_sidebar('right'); ?>		
</div>
<!-- end content container -->
<?php 
get_footer();
