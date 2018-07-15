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
    <div class="about-us-background">
        <div class="container about-us-section">
                <div class="dummy-text text-center">
                    <h1>TROCHĘ O NAS</h1>
                    <p>Jesteśmy firmą z Oławy z dwuletnim stażem</p>
                </div>
        </div>
    </div>
    <div class="container our-vehicles-section" style="height: 500px;">
        <div class="dummy-img">

        </div>
        <div class="dummy-text">
            <p>LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET LOREM IPSUM DOLOR SIT AMET</p>
        </div>
    </div>
    <div class="container pricing-section" style="height: 500px;">
        PRICES
    </div>
    <div class="google-map" style="height: 500px;">
        GOOGLE MAP HERE
    </div>
</div>
<?php get_footer(); ?>