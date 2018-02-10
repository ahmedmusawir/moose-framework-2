<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
	<section id="post-mfw-001">
		<header class="entry-header">

			<style type="text/css">
				
				.entry-header {
					background: url("<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>") no-repeat center center fixed;

					  -webkit-background-size: cover;

					  -moz-background-size: cover;

					  -o-background-size: cover;

					  background-size: cover;								
				}

			</style>
			<article class="header-content d-flex flex-column">
				
				<main class="my-auto mx-auto">
					<?php
					if ( is_singular() ) :
						the_title( '<div class="entry-title mx-auto display-1">', '</div>' );
						// the_title( '<h1 class="entry-title text-center">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta text-center">
						<?php
							moose_framework_2_posted_on();
							moose_framework_2_posted_by();
						?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</main>

			</article>
		</header><!-- .entry-header -->


		<div class="entry-content">
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php moose_framework_2_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
