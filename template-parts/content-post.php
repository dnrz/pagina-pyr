<?php
            $args = array(
                'post_type' => 'post',
                'post_per_page' => 3, 
                'order'         => 'DESC',
                'orderby'       => 'date'
            );

            $noticias = new WP_Query($args);

            if($noticias->have_posts()){
                while($noticias->have_posts()){
                    $noticias->the_post();
                ?>

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
                <!--<hr class="noticias">-->
           <?php }
            }

            ?>