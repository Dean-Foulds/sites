<?php get_header(); ?>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "WebPage",
"url": "<?php the_permalink(); ?>",
"name": "<?php the_title(); ?>",
"description": "<?php echo strip_tags( get_the_excerpt()); ?>"
} }
</script>

	<div id="content">

		<header class="article-header">
			<?php get_template_part( 'parts/content', 'page-title' ); ?>
		</header>

		<div id="inner-content" class="row">

			<main id="main" class="large-9 medium-9 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>