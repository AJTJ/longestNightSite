<?php
  $params = array(
    'post_type' => 'page',
    'p' => 91
  );
  $about = new WP_Query($params);
?>

<section id="sponsors" class="sponsors">
   <div class="container">
      <?php /* Start the Loop */ ?>
      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="sponsorsBorder">
         <div class="sponsorsFlex">
            <div class="sponsorsWhite">
               <h2 class="sponsorsTitle"><?php the_title(); ?></h2>
               <div class="sponsorsBox">
                  <?php the_content(); ?>
               </div>
            </div>
         </div>
      </div>  

    <?php endwhile; /* End About Loop */ ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>