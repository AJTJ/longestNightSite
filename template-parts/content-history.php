<?php
  $params = array(
    'post_type' => 'page',
    'p' => 89
  );
  $about = new WP_Query($params);
?>

<section id="history" class="history">
   <div class="container">
      <?php /* Start the Loop */ ?>
      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="historyText borderOne">
         <h2><?php the_title(); ?></h2>
         <?php the_content(); ?>
      </div>
      <?php endwhile; /* End About Loop */ ?>
      <?php wp_reset_postdata(); ?>
   </div>
</section>