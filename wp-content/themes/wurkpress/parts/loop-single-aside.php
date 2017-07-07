<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<div class="row">
		<div class="medium-4 large-4 columns">
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
					<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>" /></a>
				<?php } ?>
			</div>

			<div class="post-meta">
				Posted by <span><?php the_author(); ?></span> on <span><?php the_time('j F Y') ?></span>
			</div>
		</div>
		<div class="medium-8 large-8 columns">
			<section class="entry-content" itemprop="articleBody">

				<?php the_content(); ?>
			</section> <!-- end article section -->

			<footer class="article-footer">
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
				<!-- <h3 class="tags-title">Post Tags</h3> -->
				<p class="tags"><?php //the_tags('', ' ', ''); ?></p>
			</footer> <!-- end article footer -->

			<?php //comments_template(); ?>
		</div>
	</div>


</article> <!-- end article -->