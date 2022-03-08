<?php get_header(); ?>
<div class="container my-3">
    <div class="row">
    <div class="noticias mt-5">
            <div class="noticias-titulo">
                <h2><?php the_archive_title(); ?> </h2>
            </div>
            <hr class="fade-2">
            <?php 
            if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <div class="blog-post">
                    <div class="blog-post__img">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('post-thumbnails');
                        }
                        ?>
                        <!--<img src="img/13-09-2016-magneto.jpg" alt="" /> -->
                    </div>
                    <div class="blog-post__info">
                        <div class="blog-post__date">
                            <span>Fecha: <?php the_time('F j, Y'); ?></span>
                            <span>Categorías: <?php the_category(' / ');?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>"><h1 class="blog-post__title"><?php the_title(); ?></h1></a>
                            <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="blog-post__cta">Leer más..</a>
                    </div>
                </div>
                <br>
             <?php endwhile; 
            endif; 
              //get_template_part( 'template-parts/content','post'); 
            ?>
          <div class="row paginacion">
              <div class="col-md-12">
                <?php
                  get_template_part('template-parts/content', 'paginacion'); ?>
              </div>
          </div>
</div>
    </div>
</div>

<?php get_footer(); ?>