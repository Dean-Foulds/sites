<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "WebSite",
"url": "https://spana.org",
"name": "For The Working Animals Of The World | SPANA",
"description": "The charity for the working animals of the world. Aiming for a world where every working animal lives a life free from suffering and is treated with compassion.",
"potentialAction": {
"@type": "SearchAction",
"target": "https://spana.org/s?={s}",
"query-input": "required name=s"
} }
</script>

<div id="content">

    <div id="inner-content" class="row full-page">

        <main id="main" class="large-12 medium-12 columns" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'parts/loop', 'homepage' ); ?>

            <?php endwhile; endif; ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
