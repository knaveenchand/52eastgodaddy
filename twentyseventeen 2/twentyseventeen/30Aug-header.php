<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Amatic+SC%7CAnnie+Use+Your+Telescope%7CBangers%7CBarrio%7CBilbo+Swash+Caps%7CCabin+Sketch%7CChelsea+Market%7CCoda+Caption:800%7CDokdo%7CDomine%7CFontdiner+Swanky%7CFreckle+Face%7CFredericka+the+Great%7CGive+You+Glory%7CGloria+Hallelujah%7CHenny+Penny%7CKirang+Haerang%7CLakki+Reddy%7CLife+Savers%7CLovers+Quarrel%7CMilonga%7CMirza%7CMountains+of+Christmas%7CMystery+Quest%7CNixie+One%7CNothing+You+Could+Do%7CRoboto%7CRock+Salt%7CShadows+Into+Light+Two%7CSpecial+Elite%7CStardos+Stencil%7CTrade+Winds&display=swap+Lato&display=swap"rel="stylesheet">

<!--<link href="https://fonts.googleapis.com/css?family=Quicksand|Poppins&display=swap" rel="stylesheet">-->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Quicksand:300,400,500,600,700&display=swap" rel="stylesheet"> 

<?php wp_head(); ?>
<?php if(is_user_logged_in()){
	
	echo '<style>
			#menu-item-552 { display:none !important;}
	      </style>';	  
}else{
	
		  echo '<style>
			#menu-item-487 { display:none !important;}
	      </style>';
}?>
</head>



<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>



	<header id="masthead" class="site-header" role="banner">



		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>



		<?php // if ( has_nav_menu( 'top' ) ) : ?>

			<!--<div class="navigation-top">

				<div class="wrap">

					<?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

				</div>

			</div>--><!-- .navigation-top -->

		<?php //endif; ?>



	</header><!-- #masthead -->



	<?php



	/*

	 * If a regular post or page, and not the front page, show the featured image.

	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().

	 */

	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :

		echo '<div class="single-featured-image-header">';

		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );

		echo '</div><!-- .single-featured-image-header -->';

	endif;

	?>



	<div class="site-content-contain">

		<div id="content" class="site-content">

