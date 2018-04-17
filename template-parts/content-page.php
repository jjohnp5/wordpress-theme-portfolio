<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */
$landing_image = get_field('landing_image');
?>
<section class="banner" style="background: url('<?php echo $landing_image['url'];?>') no-repeat; background-size: cover;">
<div class="quote">
        <h3 class="quote-text">
        Contact
        </h3>
    </div>
</section>
<section id="post-<?php the_ID(); ?>" class="contact-container">
	

	<?php portfolio_post_thumbnail(); ?>

	<div class="entry-content contact">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
			</section><!-- #post-<?php the_ID(); ?> -->
