<?php get_header(); ?>
    <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <?php if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); ?> 
                        <article>
                        <!-- Post header-->
                        <header class="mb-4 bg-white">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php the_title()?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Publicado el <?php the_time('j F, Y');?> </div>
                            <!-- Post categories-->
                            <div class="badge bg-secondary text-decoration-none link-light"><a  href="#!"><?php the_category(' / '); ?></a></div>
                            
                        </header>
                        <!-- Preview image figure-->
                        <div class="img_destacada">
                            <?php
                            if(has_post_thumbnail()){
                            the_post_thumbnail('post-thumbnails');
                            }
                            ?>
                        </div>
                        
                        <!-- Post content-->
                        <section class="mb-5">
                            <?php the_content(); ?>
                        </section>
                    </article>
                    <div>
                        <?php get_template_part('template-parts/post', 'navigation') ?> 
                    </div>
                      
                </div>
                
                <?php endwhile; 
                    endif; 
                    ?>
                <div class="d-flex flex-column col-12 col-lg-4">
                    <?php get_sidebar(); ?>
                </div>   
                <!-- Side widgets-->
               <!-- <div class="col-lg-4">
                     Search widget-->
                
                <!--</div>-->
            </div>
    </div>
                
<?php get_footer(); ?>