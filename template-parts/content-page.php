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
<section id="contact-land" class="contact-banner row" style="background: url('<?php echo $landing_image['url'];?>') no-repeat; background-size: cover;">
<div class="quote">
        <h3 class="quote-text">
        Contact
        </h3>
    </div>
</section>
<section id="post-<?php the_ID(); ?>" class="contact-container row" >
	

	<?php portfolio_post_thumbnail(); ?>

	<div class="entry-content contact col-12">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
			</section><!-- #post-<?php the_ID(); ?> -->
