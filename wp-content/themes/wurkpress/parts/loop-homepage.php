<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<section class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->