<?php
  $params = array(
    'post_type' => 'page',
    'p' => 93
  );
  $about = new WP_Query($params);
?>

<section id="contact" class="contact">
   <div class="container">
      <?php /* Start the Loop */ ?>
      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="contactText">
         <div class="contactText2 borderOne">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
         </div>
      </div>

      <?php endwhile; /* End About Loop */ ?>
      <?php wp_reset_postdata(); ?>
   </div>
</section>