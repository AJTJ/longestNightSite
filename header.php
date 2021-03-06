<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme101
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="Longest Night Society, Problematic Orchestra, Daniel Janke, Yukon, Orchestra, Whitehorse">
   <meta name="description" content="The mandate of Longest Night Society is to support the development of Problematic Orchestra, a semi-professional contemporary chamber orchestra based in Whitehorse, Yukon.">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

   <!-- Cinzel+Decorative:400,700|Alegreya+Sans:400,700|Nixie+One|Arimo:400,700| -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme101' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-nav">
         <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) : ?>
               <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
            
               <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
               <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
         </div><!-- .site-branding -->
         <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'theme101' ); ?></button>
            
            <?php
               wp_nav_menu( array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
               ) );
            ?>
         </nav><!-- #site-navigation -->
      </div> <!-- topnav -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">