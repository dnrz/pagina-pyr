<?php get_header(); ?>
    <div class="container">      
          <div class="slider my-5">
            <?php echo do_shortcode('[smartslider3 slider="2"]');?>
          </div>          
            <div class="interes mt-5">
                <div class="interes-titutlo">
                    <h2>Links de Interes</h2>
                </div>
                <hr class="fade-2">
            <div class="row d-flex justify-content-around align-items-center">
              <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-star align-items-center">
                <div class="icon">
                  <img src="<?php echo get_theme_file_uri( 'img/calendar_today_black_24dp.svg' );?>" alt="" />
                </div>
                <div class="boton">
                  <a href="https://puebloyreforma.com.ar/2021/wp-content/uploads/2022/03/calendario.pdf" class="animated-button victoria-two" target="_blank"
                    >Calendario Academico</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-star align-items-center">
                <div class="icon">
                  <img
                    src="<?php echo get_theme_file_uri( 'img/iconfinder_icon-ios7-information-outline_211761.svg' );?>"
                    alt=""
                  />
                </div>
                <div class="boton">
                  <a href="<?php echo get_permalink(1302); ?>" class="animated-button victoria-two"
                    >Información Util</a
                  >
                </div>
              </div>
              <div class="col-sm-12 col-md-4 d-flex flex-column justify-content-star align-items-center">
                <div class="icon">
                  <img src="<?php echo get_theme_file_uri( 'img/iconfinder_announcement_2199113.svg' );?>" />
                </div>
                <div class="boton">
                  <a href="category/actividades/" class="animated-button victoria-two">Actividades</a>
                </div>
              </div>
            </div>
          </div>
        <!--<section> -->
        <div class="noticias mt-5">
            <div class="noticias-titulo">
                <h2>Últimas Noticias</h2>
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
<?php get_footer(); ?>