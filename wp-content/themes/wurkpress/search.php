<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-9 medium-9 columns first" role="main">
				<header>
					<h1 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
										<p><?php the_excerpt(); ?></p>
									</header> <!-- end article header -->


									<a class="button btn-primary" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>


						</article> <!-- end article -->

					</div>
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->
		
		    <?php get_sidebar(); ?>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
