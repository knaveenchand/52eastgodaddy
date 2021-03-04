<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">
		<div class="logoWrap">
		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<!--<p class="site-description"><?php echo $description; ?></p>-->
                <p class="site-description"><!--<span class="largeTag">STUDIO</span>--><span>Design it.</span>&nbsp;&nbsp;<span>Plan it.</span>&nbsp;&nbsp;<span>Live it.</span></p><?php endif; ?>
		</div><!-- .site-branding-text -->
        </div>

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
    
    <?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top" style="font-family:'Poppins',sans-serif;">
				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
