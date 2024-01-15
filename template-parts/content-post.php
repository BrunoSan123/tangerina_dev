<?php 
$args1=array(
    'post_type'=>'post',
    'posts_per_page'=>1,
    'order'=>'DESC'
 );

 $args2=array(
    'post_type'=>'post',
    'posts_per_page'=>4,
    'offset'=>1,
    'order'=>'DESC'
 );



 $ultimos_posts=new WP_Query($args2);
 $ultimo_post=new WP_Query($args1);
?>
<section class="ultimo_post_grid">

<div class="grid_child">
    <div class="grid_child_content">
    <?php 
        if($ultimo_post->have_posts()):
            while($ultimo_post->have_posts()):
                $ultimo_post->the_post();

            if(has_post_thumbnail()){
                the_post_thumbnail('medium');
            }
    ?>
    <div class="description">
        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <p><?php the_excerpt()?></p>
    </div>
    <?php 
        endwhile;
        wp_reset_postdata();
        else:
            echo 'Nehum post encontrado';
        endif

    ?>
    </div>
</div>
<div class="grid_child the_grid">
<?php

 if($ultimos_posts->have_posts()):
    while($ultimos_posts->have_posts()):
        $ultimos_posts->the_post();

?>
    <div class="grid_child_content"> 
    <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
        }
    ?>
        <div class="description">
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <p><?php  the_excerpt(); ?></p>
        </div>
    </div> 
    

<?php
endwhile;
wp_reset_postdata();
else:
    echo 'Nenhum Post encontrado';
endif
?>
</div>
</section>

<section class="populars">
    <?php get_template_part('template-parts/content','post-view')?>
</section>