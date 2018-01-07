<?php
  $params = array(
    'post_type' => 'page',
    'p' => 80
  );
  $about = new WP_Query($params);
?>

<section id="hero-image-about" class="hero-image-about">
   <?php /* Start the Loop */ ?>
   <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="container">
         <h1><?php the_title(); ?></h1>
         <div class="arrowDiv">
            <a class="arrowLink" href="#aboutProb"><i class="fas fa-angle-down fa-3x"></i></a>
         </div>
         <div id="aboutProb"></div>
         <div class="flexProb">
            <div class="aboutProb borderOne">
               <?php the_content(); ?>
            </div>
         </div> 
      </div>
   <?php endwhile; /* End About Loop */ ?>
   <?php wp_reset_postdata(); ?>
</section>