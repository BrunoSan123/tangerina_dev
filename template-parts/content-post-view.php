<?php

use ElementorPro\Modules\ThemeBuilder\Conditions\Author;

$args=array(
    'post_type'=>'post',
    'post_per_page'=>5,
    'meta_key'=>'post_views',
    'order_by'=>'meta_value_num',
    'order'=>'DESC',
);

$popular_posts= new WP_Query($args);
?>

<?php if($popular_posts->have_posts()):?>
    <h2>Posts mais lidos</h2>
    <ul class="popular_posts_slider">
        <?php while($popular_posts->have_posts()): $popular_posts->the_post()?>
            <li>
                <div class="popular_posts">
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }
             ?>
                <a href="<?php the_permalink()?>"><strong><?php the_title()?></strong><br><p>Leia mais</p></a>
                <div class="author"><?php echo get_the_author()?>-<?php echo the_date()?></div>
                </div>
            </li>
        <?php 
        endwhile;
         ?>
    </ul>
    <?php 
        wp_reset_postdata();
    endif;
    ?>

