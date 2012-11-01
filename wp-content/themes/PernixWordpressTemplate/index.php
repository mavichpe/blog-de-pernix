<?php
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
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>
        </div>
        <div id="rigthSideBar">
            <? get_sidebar(); ?>
        </div>

    </section>
</section>
<?php
get_footer();
?>