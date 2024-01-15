<?php

/**
 *Template Name: Pagina inicial
 * @package tangerina_dev
 */

 get_header();
?>

<div class="front_banner">
    <img src="" alt="tangerine_banner">
</div>
<div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eb832b" fill-opacity="1" d="M0,64L34.3,85.3C68.6,107,137,149,206,192C274.3,235,343,277,411,288C480,299,549,277,617,234.7C685.7,192,754,128,823,133.3C891.4,139,960,213,1029,208C1097.1,203,1166,117,1234,96C1302.9,75,1371,117,1406,138.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
</div>

<div class="cards_section">
    <?php get_template_part('template-parts/content','cards')?>
</div>

<div class="cards_section">
    <?php get_template_part('template-parts/content','dual')?>
</div>