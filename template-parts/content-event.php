<?php
  $params = array(
    'post_type' => 'page',
    'p' => 83
  );
  $about = new WP_Query($params);
?>

<section id="event" class="event">
   <div class="container">
      <?php /* Start the Loop */ ?>
      <?php if ( $about->have_posts() ) while ( $about->have_posts() ) : $about->the_post(); ?>
      
      <div class="eventFlex borderOne">
      <h2 class="eventTitle"><?php the_title(); ?></h2>
         <div class="aboutEvent">
            <?php the_content(); ?>
         </div>
      </div>

      <div class="eventImg">
         <?php the_post_thumbnail(); ?>   
      </div>
    <?php endwhile; /* End About Loop */ ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>

         <!-- <div class="moreEventInfo"> -->
               <!-- $my_id = 153;
               $post_id_153 = get_post($my_id);
               $content = $post_id_153->post_content;
               $content = apply_filters('the_content', $content);
               $content = str_replace(']]>', ']]>', $content);
               echo $content; -->