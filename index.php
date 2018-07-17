<?php
/**
 * The main template file
 */

get_header(); ?>
<!-- <div class="hero">
    <h1 class="text-center">Wynajem busów</h1>
</div> -->
<div class="main">
    <!-- <div class="background-first"></div>
    <div class="background-second"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
        </div>
    </div> -->
    <div class="hero-section">
        <div class="dobodowka container">
            <h1>WYNAJEM BUSÓW</h1>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt=""> -->
        </div>
    </div>
    <div class="post-section-background">
        <div class="container posts-section">
            <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
            
                <?php if ( $wpb_all_query->have_posts() ) : $postCount = 0; ?>
                <div class="posts-title"><h1>Aktualności</h1> <a href="">Zobacz wszystkie</a></div>
                <div class="posts row">
                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); $postCount++; ?>
                        
                            <div class="post <?php if ($postCount == 1) : echo 'newest'; endif ?> col-sm-4">
                                <span class="date"><?php echo get_the_date(); ?></span>
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="text-center img-thumbnail">
                                        <?php  the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                <?php } ?> 
                                <h5><?php the_title(); ?></h5>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">Zobacz więcej <span class="triangle"></span></a>
                            </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                
                </div>
            
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="about-us-background">
        <div class="container about-us-section">
                <div class="dummy-text text-center">
                    <h1>TROCHĘ O NAS</h1>
                    <p>Jesteśmy firmą z Oławy z dwuletnim stażem</p>
                </div>
        </div>
    </div>
    <div class="buses-section">
        <div class="container">
        <h1 class="text-center">Nasze busy</h1>
            <div class="row">
                <div class="dummy-img col-sm-6">
                    <h1>Bus #1</h1>
                </div>
                <div class="dummy-text col-sm-6">
                    <p>LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET</p>
                </div>
            </div>
        </div>
        <div class="buses-background">
            <div class="container">
                <div class="row">
                    <div class="dummy-text col-sm-6">
                        <p>LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET</p>
                    </div>
                    <div class="dummy-img col-sm-6">
                        <h1>Bus #2</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="dummy-img col-sm-6">
                    <h1>Bus #3</h1>
                </div>
                <div class="dummy-text col-sm-6">
                    <p>LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container pricing-section" style="height: 500px;">
        <h1 class="text-center">Ceny</h1>
    </div>
    <div class="google-map" style="height: 500px;">
        <iframe id="mapsource" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=17.292300760746006%2C50.94065843612187%2C17.295841276645664%2C50.94227078914687&amp;layer=mapnik&amp;marker=50.94146461962363%2C17.29407101869583" style="border: 1px solid black"></iframe>
    </div>
</div>
<?php get_footer(); ?>