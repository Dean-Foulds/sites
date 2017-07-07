<div class="archive-row archive-post-row">


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<div class="row">
		<div class="medium-5 large-5 columns default-featured-post-image">
			<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('spana-post-thumb'); ?></a> -->
			<?php
			if ( has_post_thumbnail() )
			{
				the_post_thumbnail('spana-post-thumb');
			}
			else
			{
				?>
				<a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>" /></a>
			<?php } ?>

		</div>
		<div class="medium-7 large-7 columns">
			<header class="article-header">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<?php get_template_part( 'parts/content', 'byline' ); ?>
			</header> <!-- end article header -->

			<section class="entry-content" itemprop="articleBody">
				<p><?php the_excerpt(); ?></p>
			</section> <!-- end article section -->

			<a class="button btn-primary" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More ></a>
		</div>
	</div>


</article> <!-- end article -->

	</div>