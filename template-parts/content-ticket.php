<?php
  $params = array(
    'post_type' => 'page',
    'p' => 87
  );
  $about = new WP_Query($params);
?>

<section id="tickets" class="ticket">
   <div class="container">
      <?php /* Start the Loop */ ?>
      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="ticketFlex">
         <div class="ticketText">
            <h2><?php the_title(); ?></h2>
            <div class="underline"></div>
            <?php the_content(); ?>
         </div>
         <div class="ticketImg"> 
            <?php the_post_thumbnail(); ?>
         </div>
      </div>
      <?php endwhile; /* End About Loop */ ?>
      <?php wp_reset_postdata(); ?>
   </div>
</section>