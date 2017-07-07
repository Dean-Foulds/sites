<?php
/*
Template Name: News List Page
*/
?>

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

            <main id="main" class="large-12 columns" role="main">



                <!-- LOOP HERE -->
                <?php
                $args = array(
                    'posts_per_page' => 10,
                    'category_name'  => 'news'
                );

                query_posts( $args ); if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                <?php endwhile; endif; ?>

            </main> <!-- end #main -->

<!--            <div id="sibling-sidebar" class="sidebar large-3 medium-3 columns hidden" role="complementary">-->
<!---->
<!--                <h3>--><?php //the_title(); ?><!--</h3>-->
<!--                <ul class="sibling-links">-->
<!--                    --><?php
//                    global $post;
//                    $current_page_parent = ( $post->ID );
//
//                    wp_list_pages( array(
//                            'title_li' => '',
//                            'order' => 'ASC',
//                            'order' => 'menu_order',
//                            'child_of' => $current_page_parent,
//                            'depth' => '2' )
//                    );
//                    ?>
<!--                </ul>-->
<!--            </div>-->

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>