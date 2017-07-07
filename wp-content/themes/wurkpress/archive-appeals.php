<?php get_header(); ?>
			
	<div id="content">

		<header class="article-header">
			<div class="page-title-row donate-title">
				<div class="row">
					<div class="small-12 columns">
						<h1 class="page-title">SPANA Appeals</h1>
						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						} ?>
					</div>
				</div>
			</div>		</header>

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 columns" role="main">
    

					<div class="archive-row archive-post-row">

							<div class="row">

								<?php

								// The Query

								$args = array(
									'post_type' => 'appeals',
									'posts_per_page' => 1,
								);
								$query1 = new WP_Query( $args );

								?>

								<?php if ($query1->have_posts()) : while ($query1->have_posts()) : $query1->the_post(); ?>

								<div class="medium-12 columns default-featured-post-image">
									<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('spana-post-thumb'); ?></a> -->

									<figure class="appeal-list-item">
										<?php
										if ( has_post_thumbnail() )
										{
											the_post_thumbnail('spana-appeal-featured-lg');
										}
										else
										{
											?>
											<img src="<?php bloginfo('template_directory'); ?>/assets/images/default-post-image.png" alt="<?php the_title(); ?>" />
										<?php } ?>

										<figcaption>
											<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<!--											<p>--><?php //echo wp_trim_words( get_the_content(), 30, '...' ); ?><!--</p>-->
											<a class="button btn-primary" href="<?php the_permalink(); ?>">DONATE</a>
										</figcaption>

									</figure>

								</div>

								<?php endwhile; ?>

								<?php else : ?>

									<?php get_template_part( 'parts/content', 'missing' ); ?>

								<?php endif;

								wp_reset_postdata();

								?>

							</div>

							<div class="row">

								<?php

								// The Query

								$args = array(
									'post_type' => 'appeals',
									'posts_per_page' => 100,
									'offset' => 1
								);
								$query1 = new WP_Query( $args );

								?>

								<?php if ($query1->have_posts()) : while ($query1->have_posts()) : $query1->the_post(); ?>

								<div class="medium-6 columns default-featured-post-image end">
									<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('spana-post-thumb'); ?></a> -->

									<figure class="appeal-list-item">
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

										<figcaption>
											<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<!--											<p>--><?php //echo wp_trim_words( get_the_content(), 30, '...' ); ?><!--</p>-->
											<a class="button btn-primary" href="<?php the_permalink(); ?>">DONATE</a>
										</figcaption>

									</figure>

								</div>

								<?php endwhile; ?>

								<?php else : ?>

									<?php get_template_part( 'parts/content', 'missing' ); ?>

								<?php endif;

								wp_reset_postdata();

								?>

							</div>

					</div>

		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>