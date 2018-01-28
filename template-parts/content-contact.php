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

            <!-- <form action="https://formspree.io/your@email.com"
      method="POST">
    <input type="text" name="name">
    <input type="email" name="_replyto">
    <input type="submit" value="Send">
</form> -->

            <div class="contactSection">
               <form action="https://formspree.io/danieljanke@northwestel.net" method="POST" class="contactForm" name="contactForm">
                  <div class="formFlex">
                     <div class="inputTitlesDiv">
                        <h5 class="inputTitles">Name</h5>
                        <input type="text" name="name">
                     </div>
                     <div class="inputTitlesDiv">
                        <h5 class="inputTitles">Email</h5>
                        <input type="email" name="_replyto">
                     </div>
                  </div>
                  <div class="inputTitlesDiv">
                     <h5 class="inputTitles">Write message here</h5>
                  </div>
                  <textarea name="message" id="userInfo" cols="35" rows="10"></textarea>
                  <div class="submitDiv">
                     <input class="submit" type="submit" value="Send">
                  </div>
               </form>
            </div>
         </div>
      <?php endwhile; /* End About Loop */ ?>
      <?php wp_reset_postdata(); ?>
   </div>
   
</section>