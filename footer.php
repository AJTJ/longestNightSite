<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basicSassTheme
 */

?>

</div><!-- #content -->

   <footer id="colophon" class="site-footer">
      <div class="footerFlex">
         <div class="footerLinks">
            <a href="https://www.facebook.com/theproblematicorchestra/" class="facebookLink"><i class="fab fa-facebook-f"></i></a>
         </div>
         <div class="underline"></div>
         <div class="site-info">
            <a class="footerText" href="https://aaronjanke.com/">Site by Aaron Janke</a>
         </div><!-- .site-info -->
      </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">//JUST JQUERY</script>
<script>
   $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 200, function() {
          var $target = $(target);
          if ($target.is()) {
            return false;
          } else {
            $target.attr('tabindex','-1');
          };
        });
      }
    }
  });
</script>
</html>
