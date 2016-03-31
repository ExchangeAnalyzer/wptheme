<?php
/**
 * @package Sequential
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<div class="entry-meta">
			<?php sequential_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( sequential_get_link_url() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<?php
		if ( 'post' == get_post_type() ) {
			sequential_post_thumbnail();
		}
	?>	
	
	<div class="entry-content">
		<?php
			if ( ! is_search() ) {
				the_excerpt( esc_html__( 'Continue reading', 'sequential' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'sequential' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			} else {
				the_excerpt();
			}
		?>
		<a href="<?php the_permalink(); ?>" title="Read More" class="read-more">Read More</a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
