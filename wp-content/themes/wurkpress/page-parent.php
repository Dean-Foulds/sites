<?php
/*
Template Name: Parent Page
*/
?>

<?php get_header(); ?>

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "WebPage",
"url": "<?php the_permalink(); ?>",
"name": "<?php the_title(); ?>",
"description": "<?php the_excerpt(); ?>"
} }
</script>


    <div id="content">

        <header class="article-header">
            <?php get_template_part( 'parts/content', 'page-title' ); ?>
        </header>

        <div id="inner-content" class="row">

            <main id="main" class="large-9 medium-9 columns content-w-sidebar" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'page' ); ?>

                <?php endwhile; endif; ?>

            </main> <!-- end #main -->

            <div id="sibling-sidebar" class="sidebar large-3 medium-3 columns" role="complementary">

                <h3><?php the_title(); ?></h3>
                <ul class="sibling-links">
                    <?php
                    global $post;
                    $current_page_parent = ( $post->ID );

                    wp_list_pages( array(
                            'title_li' => '',
                            'order' => 'ASC',
                            'order' => 'menu_order',
                            'child_of' => $current_page_parent,
                            'depth' => '2' )
                    );
                    ?>
                </ul>
            </div>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>