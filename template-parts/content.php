<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package horse-website
 */
?>

<<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title index-excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="index-entry-meta">
			<?php horse_website_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content index-excerpt">
		<?php
		the_excerpt();
//		
//			the_content( sprintf(
//				
//				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>',  horse'website_ ), array( 'span' => array( 'class' => array() ) ) ),
//				the_title( '<span class="screen-reader-text">"', '"</span>', false )
//			) );
		?>

	<footer class="entry-footer">
		<?php horse_website_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
