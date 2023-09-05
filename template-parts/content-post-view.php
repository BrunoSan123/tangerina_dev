<?php

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
    <ul>
        <?php while($popular_posts->have_posts()): $popular_posts->the_post()?>
            <li>
                <div class="popular_posts">
            <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }
             ?>
                <a href="<?php the_permalink()?>"><?php the_title()?></a>
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

