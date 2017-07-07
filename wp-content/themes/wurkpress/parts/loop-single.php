<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<section class="entry-content">
		<div class="post-featured-image" style="margin-bottom: 15px;">
			<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a> -->
			<?php
			if ( has_post_thumbnail() )
			{
				the_post_thumbnail('full');
			}
			else
			{
				?>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>" />
			<?php } ?>
		</div>

		<?php get_template_part( 'parts/content', 'byline' ); ?>

		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<!-- <h3 class="tags-title">Post Tags</h3> -->
		<p class="tags"><?php //the_tags('', ' ', ''); ?></p>
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>
													
</article> <!-- end article -->