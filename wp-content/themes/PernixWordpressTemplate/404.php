<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header();
?>
<section id="homeBodyBackground">
    <section class="contentBox">   <?
?>
        <div id="leftSideBar">
            <?
            get_template_part('left', 'sidebar');
            ?>
        </div>


        <div id="wrapper">  
            <div id="primary">
                <div id="content" role="main">

                    <article id="post-0" class="post error404 not-found">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php _e('This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven'); ?></h1>
                        </header>

                        <div class="entry-content">
                            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven'); ?></p>
                            <br/>
                            <?php get_search_form(); ?>

                        </div><!-- .entry-content -->
                    </article><!-- #post-0 -->

                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
        <div id="rigthSideBar">
            <? get_sidebar(); ?>
        </div>

    </section>
</section>

<?php get_footer(); ?>