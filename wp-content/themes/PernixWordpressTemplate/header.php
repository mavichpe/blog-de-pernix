<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php if (is_home()) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
            <?php if (is_author()) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
            <?php if (is_single()) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
            <?php if (is_page()) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
            <?php if (is_category()) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
            <?php if (is_month()) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
            <?php if (is_search()) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
            <?php
            if (function_exists('is_tag')) {
                if (is_tag()) {
                    ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php
            single_tag_title("", true);
        }
    }
            ?>
        </title>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="/wp-content/themes/PernixWordpressTemplate/js/jquery-1.7.2.min.js" type="text/javascript"></script>

    </head>

    <body >
        <div id="content-wrapper">


            <div id="header">
                <header id="pageHeader">
                    <section id="logoPernix"><a href="http://pernix-solutions.com/pages/home"><img alt="Pernix Logo" src="http://pernix-solutions.com/images/logo.png" /></a></section>
                    <section id="telefonoLogin">1-224-788-2930</section>
                    <section id="socialNet">
                        <div><a href="http://www.linkedin.com/company/pernix-solutions"><img alt="Linked Logo" src="http://pernix-solutions.com/images/inLogo.png" /></a>LINKED IN</div>
                        <div><a href="http://twitter.com/PernixSolutions"><img alt="Twitter Logo" src="http://pernix-solutions.com/images/twitterLogo.png" /></a>TWITTER</div>
                        <div><a href="https://plus.google.com/b/114450962753002334855/"><img alt="Google Plus" src="http://pernix-solutions.com/images/googlelogo.png" /></a>GOOGLE+</div>
                    </section>
                    <nav id="menuPrincipal">
                        <ul>
                            <li><a href="http://pernix-solutions.com/pages/costa_rica">Costa Rica</a></li>
                            <li><a href="http://pernix-solutions.com/pages/agile">Our Agility</a></li>
                            <li><a href="http://pernix-solutions.com/pages/services">Services</a></li>
                            <li><a href="http://pernix-solutions.com/pages/ruby_on_rails_mobile">Projects</a></li>
                            <li><a href="http://pernix-solutions.com/pages/careers">Careers</a></li>
                            <li><a href="http://pernix-solutions.com/pages/apprenticeship_program">Apprenticeship program</a></li>
                            <li><a href="http://pernix-solutions.com/pages/about">About us</a></li>
                        </ul>
                    </nav>
                </header>
                <script>
                    if ($(window).width() > 980){
                        $("#pageHeader").css("left", ($(window).width()-980)/2);    
                    }
                    $(window).resize(function() {
                        if ($(window).width() > 980) {
                            $("#pageHeader").css("left", ($(window).width()-980)/2);
                        }
                    }
                ); 

                </script>
            </div>
