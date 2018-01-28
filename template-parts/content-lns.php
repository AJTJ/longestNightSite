<?php
  $params = array(
    'post_type' => 'page',
    'p' => 66
  );
  $about = new WP_Query($params);
?>

<section id="lns" class="lns">
  <div class="container">
    <?php /* Start the Loop */ ?>
    <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      <div class="lnsFlex">
         <div class="lnsText">
            <h2 class="lnsTitle"><?php the_title(); ?></h2>
            <div class="underline"></div>
            <div class="aboutLns">
               <?php the_content(); ?>
            </div>
         </div>
         <div class="lnsImg"> 
            <div class="innerLNS"><?php the_post_thumbnail(); ?></div>
         </div>

      </div>   


    <?php endwhile; /* End About Loop */ ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>