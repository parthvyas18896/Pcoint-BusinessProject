<!-- fetch header from wordpress -->
<?php get_header(); ?>
<!-- fetch best page from wordpress -->
<?php echo apply_filters('the_content', get_page_by_path('best')->post_content) ?>
<!-- fetch two-box page from wordpress -->
<?php echo apply_filters('the_content', get_page_by_path('two-box')->post_content) ?>
<!-- fetch testimonial page from wordpress -->
<?php echo apply_filters('the_content', get_page_by_path('testimonial')->post_content) ?>
<!-- fetch footer from wordpress -->
<?php get_footer(); ?>