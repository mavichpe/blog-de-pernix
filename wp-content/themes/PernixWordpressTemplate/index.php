<?php get_header(); ?>

<section id="homeBodyBackground">
    <section class="contentBox">    



        <div id="wrapper">
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>
        </div>
        <? get_sidebar(); ?>

    </section>
</section>
<?php
get_footer();
?>