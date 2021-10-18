<?php get_header(); ?>
<main class="mt-3 ">   
    <div class="container">
        <div class="row align-items-start">
            <?php
            if(have_posts()):
              ?>
<div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $no=0;
      while(have_posts()): the_post();
      if ( has_post_thumbnail() ):
        if ($no===0):
    ?> 
          <div class="carousel-item active">
            <?php the_post_thumbnail( "small_tumb", array("class" => "card-img-top img-carousel img-thumbnail d-block w-100")) ?>
          </div>
    <?php
        else:
    ?>
          <div class="carousel-item">
            <?php the_post_thumbnail( "small_tumb", array("class" => "card-img-top img-carousel img-thumbnail d-block w-100")) ?>
          </div>
          <?php
        endif;
        $no++;
    else: 
      if($no===0):
    ?>
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/img/default.jpg" class="d-block w-100">
    </div>
    <?php
      else: ?>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory'); ?>/img/default.jpg" class="d-block w-100">
        </div>
        <?php
      endif;
      $no++;
    endif;
      endwhile;
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
              <?php
                while(have_posts()): the_post();
                    ?> 
                    <div class="col mb-2">
                        <div class="card" >
                            <?php 
                            if ( has_post_thumbnail() ): ?>
                            <?php
                            the_post_thumbnail( 'small_tumb', array('class' => 'card-img-top img-thumbnail')) 
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title();?></h5>
                                <p class="card-text"><?php echo get_the_excerpt( ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lanjut Baca..</a>
                            </div>
                            <?php
                        else:
                            ?><img class="card-img-top img-thumbnail" src="<?php bloginfo('template_directory'); ?>/img/default.jpg" alt="<?php the_title(); ?>" sizes="(max-width: 378px) 100vw, 378px" />
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title();?></h5>
                                <p class="card-text"><?php echo get_the_excerpt( ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lanjut Baca..</a>
                            </div>
                            <?php
                        endif;
                        ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
                </div>
                <nav aria-label="Page navigation example">
                <?php
                
                $links = paginate_links( array(
                  'prev_next'          => false,
                  'type'               => 'array'
                ) );

                if ( $links ) :

                    echo '<ul class="pagination">';

                    // get_previous_posts_link will return a string or void if no link is set.
                    if ( $prev_posts_link = get_previous_posts_link( __( 'Previous Page' ) ) ) :
                        echo '<li class="page-item">';
                        echo $prev_posts_link;
                        echo '</li>';
                    endif;

                    echo '<li class="page-item">';
                    echo join( '</li><li class="page-item">', $links );
                    echo '</li>';

                    // get_next_posts_link will return a string or void if no link is set.
                    if ( $next_posts_link = get_next_posts_link( __( 'Next Page' ) ) ) :
                        echo '<li class="page-item">';
                        echo $next_posts_link;
                        echo '</li>';
                    endif;
                    echo '</ul>';
                endif;
                
                ?>
                </nav>
                <?php
            else:
                echo "Tidak ada post";
                ?>
            </div>
                <?php
            endif;
            ?>
</div>
</main>
<?php get_footer();