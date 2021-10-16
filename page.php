<?php get_header(); ?>
<div class="container mt-3">
        <div class="row align-items-start">
            <?php the_content();?>
        </div>
        <?php
        if(comments_open()):
            comments_template();
        endif
        ?>
</div>
<?php get_footer();