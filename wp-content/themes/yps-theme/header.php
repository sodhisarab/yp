<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage yp-solution
 * @since yp-solution 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/base.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/layout.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animsition.min.css"/>
    <!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->


    <?php wp_head(); ?>

</head>

<body>

<!-- Primary Page Layout
================================================== -->
<div class="cursor"></div>
<div class="cursor-follower"></div>
<div class="animsition">


    <!-- MENU
    ================================================== -->
    <div class="header-top c-Navigation">
        <!-- <div class="c-Navigation-bg"></div> -->

        <div class="c-Navigation-content">
            <header class="cd-main-header">
                <a class="cd-logo animsition-link" href="<?php bloginfo('url'); ?>"><img
                            src="<?php bloginfo('template_url'); ?>/images/yellowpixel-logo-svg.svg" alt="Logo"></a>
                <ul class="cd-header-buttons">
                    <!-- <li><a class="cd_let_talk" href="contact.html"><span>Let's Talk</span></a></li> -->
                    <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
                </ul> <!-- cd-header-buttons -->
            </header>

            <nav class="cd-nav">
                <div class="icon-box-wrapper">
                    <div class="icon-box-content">
                        <h5 class="icon-box-title">
                            <!-- <span>London 6PM</span> -->
                            <span> London
								<?php
                                date_default_timezone_set('Europe/London');
                                $sTime = date("h:i A");
                                echo $sTime;
                                ?>
							</span>
                        </h5>
                    </div>
                    <div class="icon-box-icon">
						<span class="icon-box-animation-">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g
                                    transform="translate(-1824 -37)"><circle cx="12.5" cy="12.5" r="12.5"
                                                                             transform="translate(1824 37)"
                                                                             fill="#ffe45d" opacity="0.5"></circle><circle
                                        cx="7.5" cy="7.5" r="7.5" transform="translate(1829 42)"
                                        fill="#F9CF01"></circle></g></svg>				</span>
                    </div>
                </div>
                <ul id="cd-primary-nav" class="cd-primary-nav is-fixed"
                    aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentynineteen'); ?>">
			
                    <?php
                    if (has_nav_menu('primary')) {

                        wp_nav_menu(
                            array(
                                'container' => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'primary',
                            )
                        );

                    }
                    ?>
                    <li class="mobile_none" style="display: none;"><a class="cd_let_talk" href="contact.html"><span>Let's Talk</span></a>
                    </li>


                </ul> <!-- primary-nav -->
            </nav>
        </div>

        <button type="button" class="c-Navigation-burger t-btn">
            <div class="c-Navigation-burger-icon">
                <span class="c-Navigation-burger-icon-line"></span>
                <span class="c-Navigation-burger-icon-line"></span>
                <span class="c-Navigation-burger-icon-line"></span>
            </div>
        </button>

        <div class="header_toggle_menu">
            <div class="c-Navigation-bg"></div>

            <div class="header_toggle_content">
                <header class="header_toggle_header">
                    <a class="header_toggle_logo animsition-link" href="<?php get_template_directory_uri()?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/yellowpixel-logo-svg.svg" alt="Logo"></a>
                </header>

                <nav class="header_toggle_nav">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-content">
                            <h5 class="icon-box-title">
                                <span>London 
                                <?php
                                date_default_timezone_set('Europe/London');
                                $sTime = date("h:i A");
                                echo $sTime;
                                ?>
                                </span>
                            </h5>
                        </div>
                        <div class="icon-box-icon">
							<span class="icon-box-animation-">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g
                                        transform="translate(-1824 -37)"><circle cx="12.5" cy="12.5" r="12.5"
                                                                                 transform="translate(1824 37)"
                                                                                 fill="#ffe45d" opacity="0.5"></circle><circle
                                            cx="7.5" cy="7.5" r="7.5" transform="translate(1829 42)"
                                            fill="#F9CF01"></circle></g></svg>				</span>
                        </div>
                    </div>
                    <ul id="cd-primary-nav" class="cd-primary-nav is-fixed"
                        aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentynineteen'); ?>">
                        <?php
                        if (has_nav_menu('primary')) {

                            wp_nav_menu(
                                array(
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                )
                            );

                        }
                        ?>
                    </ul> <!-- primary-nav -->
                    <ul class="header_toggle_buttons">
                        <!-- 						<li><a class="cd_let_talk" href="contact.html"><span>Let's Talk</span></a></li> -->
                        <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                </nav>
            </div>

        </div>
    </div>

