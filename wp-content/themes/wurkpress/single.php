<?php get_header(); ?>

<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
$thumb_url = $thumb_url_array[0];
?>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "WebPage",
"mainEntity": {
"@type": "BlogPosting",
"mainEntityOfPage": "<?php the_permalink(); ?>",
"headline": "<?php the_title(); ?>",
"description": "<?php echo strip_tags( get_the_excerpt()); ?>",
"image": {
"@type": "ImageObject",
"url": "<?php echo $thumb_url; ?>",
"height": 320,
"width": 838
},
"articleSection": "SPANA Blog",
"datePublished": "<?php the_time('F j, Y') ?>",
"dateModified": "<?php the_modified_date('F j, Y'); ?>",
"author": {
"@type": "Person",
"name": "<?php the_author(); ?>"
},
"publisher": {
"@type": "Organization",
"name": "SPANA",
"logo": {
"@type": "ImageObject",
"url": "https://spana.org/wp-content/uploads/2016/11/spana-600x60.png",
"width": 600,
"height": 60
} } } }
</script>

<div id="content">

	<header class="article-header">
		<?php get_template_part( 'parts/content', 'page-title' ); ?>
	</header>


<!--	<header class="article-header">-->
<!--		<div class="page-title-row">-->
<!--			<div class="row">-->
<!--				<div class="small-12 columns">-->
<!--					<h1 class="page-title">--><?php //the_title(); ?><!--</h1>-->
<!--					--><?php //if ( function_exists('yoast_breadcrumb') ) {
//						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
//					} ?>
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</header>-->

	<div id="inner-content" class="row">

		<?php
		if ( has_post_format( 'aside' )) { ?>
			<main id="main" class="large-9 medium-9 columns" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'single-aside' ); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

			</main> <!-- end #main -->
		<?php } else { ?>
			<main id="main" class="large-9 medium-9 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'single' ); ?>

				<?php endwhile; else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->
		<?php } ?>

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>