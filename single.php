<?php get_header(); ?>
<main>
<div class="container mt-3">
        <div class="row align-items-start">
<?php
if(have_posts()):
    while(have_posts()): the_post();
    
            if ( has_post_thumbnail() ):
                the_post_thumbnail( 'small_tumb', array('class' => 'img-fluid rounded'));
            else:
               ?> <img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/default.jpg" alt="<?php the_title(); ?>" sizes="(max-width: 378px) 100vw, 378px"/><?php
            endif; 
            echo "<hr class='mt-3'>"; 
        ?> <h3 class="mt-3"><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title();?></a></h3>
        <i><?= "Ditulis Oleh: ".get_the_author(). " - " . get_the_date(); ?></i>
            <p ><?php the_content( ); ?></p><?php
    endwhile;
else:
    echo "Tidak ada post";
endif;
?>
<?php
echo "<hr>";
echo "<b>Komentar: </b>";
if(comments_open()):
    comments_template();
endif
?>
        </div>
</div>

</main class="mb-3">
<?php get_footer();