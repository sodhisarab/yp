<?php
/**
 *  Template Name: Home Page Old
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage yp-solution
 * @since yp-solution 1.0
 */

get_header();
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <main class="cd-main-content">


    <!-- HOME SECTION
        ================================================== -->

    <?php if (have_rows('banner')): ?>
        <section class="home" style="background: #000">
            <?php while (have_rows('banner')): the_row(); ?>

                <div class="banner-text">
                    <h1><?php the_sub_field('banner_headline'); ?></h1>
                    <p><?php the_sub_field('banner_sub_heading'); ?></p>
                </div>
                <div class="banner_image">
                    <?php
                    $image = get_sub_field('banner_main_image');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>


                <div class="fottoer_last">
                    <div class="fottoer_last_1">
                        <a href="#scroll-link" class="scroll">Selected Work</a>
                    </div>
                    <div class="fottoer_last_2">
                        <div class="one_colun">
                            <?php
                            $image = get_sub_field('banner__brand_logo_1');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <div class="one_colun">
                            <?php
                            $image = get_sub_field('banner__brand_logo_2');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <div class="one_colun last_colun">
                            <ul class="sl-nav-menu">
                                <li class=""><a href="#" class="sl-menu-item">IG</a></li>
                                <li class=""><a href="#" class="sl-menu-item">TW</a></li>
                                <li class=""><a href="#" class="sl-menu-item">FB</a></li>
                                <li class=""><a href="#" class="sl-menu-item">LN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>

    <!-- SECTION
        ================================================== -->
    <section class="section" id="scroll-link">
        <nav class="menu ylp_work">
            <?php
            $args = array(
                'post_type' => 'case_study',
                'cat' => 7,
                'posts_per_page' => 6,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $cindex  =0 ;
            $loop = new WP_Query($args); ?>

            <?php while ($loop->have_posts()) : $loop->the_post(); ?>


                <a class="menu__item case_study_home_<?php echo $cindex; ?>">
                    <?php
                    $hero = get_field('section_1_client_information');
                    if (!empty($hero)): ?>
                        <style>
                            .menu.ylp_work a.case_study_home_<?php echo $cindex; ?>:hover{
                                background: <?php echo $hero['hover_color'] ?>;
                                color: <?php echo $hero['hover_text_color'] ?>;
                            }
                        </style>
                        <span class="menu__item-text"><span
                                    class="menu__item-textinner"><?php print the_title(); ?></span></span>
                        <span class="menu__item-sub"><?php print($hero['services']); ?></span>
                        <div class="hover-reveal">
                            <div class="hover-reveal__img"
                                 style="background-image: url(<?php echo esc_url($hero['home_page_hover_image']['url']); ?>);"></div>
                        </div>
                    <?php endif; ?>
                </a>
            <?php  $cindex++; ?>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        </nav>
    </section>

    <!-- SECTION Design Agency
        ================================================== -->
    <?php if (have_rows('design_agency_section')): ?>
        <section class="section g_y_section">
            <?php while (have_rows('design_agency_section')): the_row(); ?>

                <div class="office-1 mobile_pad">
                    <div class="box-1">
                        <div class="box-1_inner" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
                            <div class="box-1_inner_sub">
                                <?php
                                $image = get_sub_field('main_image');
                                if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <div class="box-1">
                        <div class="text-in">
                            <div class="section-title left office-text">
                                <svg width="30" height="30" class="squareanimation">
                                    <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"/>
                                </svg>
                                <h2><?php the_sub_field('heading'); ?></h2>
                                <div class="subtitle left black_cl"><?php the_sub_field('sub_heading'); ?></div>
                                <a href="#" class="subtitle-button" role="button">
                                    <span class="button-text">More about us </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>


    <!-- SECTION Leading
       ================================================== -->
    <?php if (have_rows('leading_section')): ?>
        <section class="section black_bg">
            <?php while (have_rows('leading_section')): the_row(); ?>

                <div class="office-1">
                    <div class="box-1">
                        <div class="text-in new_wt">
                            <div class="section-title left office-text">
                                <h3 class="white_cl"><?php the_sub_field('heading'); ?></h3>
                                <svg width="30" height="30" class="squareanimation">
                                    <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"/>
                                </svg>
                                <!-- <a href="#" class="subtitle-button" role="button">
                                    <span class="button-text">More about us </span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="box-1" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
                        <div class="box-1_inner2">
                            <div class="box-1_inner_sub2">
                                <?php
                                $image = get_sub_field('main_image');
                                if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>


    <!-- SECTION
        ================================================== -->
    <?php if (have_rows('solutions_section')): ?>
        <section class="section black_bg">
            <?php while (have_rows('solutions_section')):
                the_row(); ?>

                <div class="office-1">
                    <div class="our_solution">
                        <div class="our_solution_inner">
                            <div class="our_solution_head">
                                <svg class="spinround" version="1.2" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 50 49"
                                     width="50" height="49">
                                    <title>Screenshot_5</title>
                                    <defs>
                                        <image width="50" height="53" id="img1"
                                               href="data:image/png;base64,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"/>
                                    </defs>
                                    <style>
                                    </style>
                                    <use id="Background" href="#img1" x="0" y="0"/>
                                </svg>
                                <h2><?php the_sub_field('heading'); ?></h2>
                                <div class="divider"></div>
                            </div>
                            <div class="our_solution_base">
                                <div class="our_solution_base1">
                                    <div class="subtitle left"><?php the_sub_field('sub_heading'); ?></div>

                                    <?php
                                    $viewAll = get_sub_field('link');
                                    if (!empty($viewAll)): ?>
                                        <a href="<?php echo esc_url($viewAll['url']); ?>"
                                           class="subtitle-button white_cl" role="button">
                                            <span class="button-text"><?php echo $viewAll['title']; ?></span>
                                            <ul>
                                                <li class="blur-container ready">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 556 556"
                                                         class="svg-blur">
                                                        <defs>
                                                            <filter id="a" width="114.5%" height="114.5%" x="-7.3%"
                                                                    y="-7.3%"
                                                                    filterUnits="objectBoundingBox">
                                                                <feGaussianBlur in="SourceGraphic"
                                                                                stdDeviation="12"></feGaussianBlur>
                                                            </filter>
                                                        </defs>
                                                        <circle cx="1496" cy="1585" r="248" fill="#FFFFFF"
                                                                fill-rule="evenodd"
                                                                filter="url(#a)" opacity=".6"
                                                                transform="translate(-1218 -1307)"></circle>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </a>
                                    <?php endif; ?>

                                </div>
                                <?php if (have_rows('solutons_items')): ?>
                                    <?php $repeaterIndex = 1; ?>
                                    <div class="our_solution_base2">
                                        <?php while (have_rows('solutons_items')): the_row(); ?>
                                            <?php if ($repeaterIndex != 1): ?>
                                                <div class="divider"></div>
                                            <?php endif; ?>
                                            <div class="our_solution_base2_inn"
                                                 data-scroll-reveal="enter right move 200px over 1s after 0.2s">
                                                <div class="our_base_inner">
                                                    <h4 class=""><span
                                                                class="list_style_num"><?php echo sprintf("%02d", $repeaterIndex); ?></span>
                                                    </h4>
                                                </div>
                                                <div class="our_base_inner">
                                                    <h4 class=""><?php the_sub_field('title'); ?></h4>
                                                    <?php if (have_rows('subtitle')): ?>
                                                        <ul class="our_base_inner_list">
                                                            <?php while (have_rows('subtitle')): the_row(); ?>

                                                                <?php
                                                                $subfields = get_sub_field('url');

                                                                if (!empty($subfields)): ?>
                                                                    <li>
                                                                        <a href="<?php echo esc_url($subfields['url']); ?>"><span><?php echo $subfields['title']; ?></span></a>
                                                                    </li>
                                                                <?php endif; ?>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <?php $repeaterIndex++; ?>

                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>


            <?php endwhile; ?>
        </section>
    <?php endif; ?>

    <!-- SECTION
        ================================================== -->
    <?php if (have_rows('ecommerce_section')): ?>
        <section class="section black_bg">
            <?php while (have_rows('ecommerce_section')): the_row(); ?>
                <div class="office-1">
                    <div class="box-1 new_2">
                        <div class="text-in">
                            <div class="section-title left office-text">
                                <h2 class="white_cl"><?php the_sub_field('title'); ?></h2>
                                <div class="subtitle left white_cl"><?php the_sub_field('sub_title'); ?></div>
                                <a href="#" class="subtitle-button" role="button">
                                    <span class="button-text">More about us </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-1 new_3" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
                        <div class="box-1_inner2">
                            <div class="box-1_inner_sub2">
                                <?php
                                $image = get_sub_field('main_image');
                                if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="box-4">
                        <div class="subtitle left white_cl"><?php the_sub_field('description'); ?></div>
                        <?php
                        $button_link = get_sub_field('button_link');

                        if (!empty($button_link)): ?>


                            <a href="<?php echo esc_url($button_link['url']); ?>" class="subtitle-button2"
                               role="button"><span class="button-text"><?php echo $button_link['title']; ?></span></a>

                        <?php endif; ?>


                        <li class="blur-container ready">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 556 556" class="svg-blur">
                                <defs>
                                    <filter id="a" width="114.5%" height="114.5%" x="-7.3%" y="-7.3%"
                                            filterUnits="objectBoundingBox">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="12"></feGaussianBlur>
                                    </filter>
                                </defs>
                                <circle cx="1496" cy="1585" r="248" fill="#FFFFFF" fill-rule="evenodd" filter="url(#a)"
                                        opacity=".6" transform="translate(-1218 -1307)"></circle>
                            </svg>
                        </li>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>


    <!-- SECTION
        ================================================== -->
    <?php if (have_rows('platform_section')): ?>

        <?php


        $animation = ['left', 'bottom', 'right'];
        $animationIndex = 0;

        ?>
        <section class="section black_bg">
            <?php while (have_rows('platform_section')): the_row(); ?>
                <div class="platfom_inner">
                    <div class="our_solution_head">
                        <h2><?php the_sub_field('title'); ?></h2>
                        <div class="divider"></div>
                        <div class="subtitle left pas_new"><?php the_sub_field('subtitle'); ?></div>
                    </div>
                    <?php if (have_rows('items')): ?>
                        <div class="platfom_inner_cont">
                            <?php while (have_rows('items')): the_row(); ?>
                                <div class="one-third column"
                                     data-scroll-reveal="enter <?php echo $animation[$animationIndex] ?> move 200px over 1s after 0.3s">
                                    <div class="services-boxes-2 grey-section">
                                        <div class="icon-box">
                                            <?php
                                            $image = get_sub_field('main_image');
                                            if (!empty($image)): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                                            <?php endif; ?>
                                        </div>
                                        <p><?php the_sub_field('content'); ?></p>
                                    </div>
                                </div>
                                <?php $animationIndex++; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>

    <!-- SECTION
        ================================================== -->
    <section class="section parallax-section parallax-section-padding-top-bottom">

        <div class="parallax-6"></div>

        <div class="testimonal_home">
            <div class="sixteen columns">
                <div class="section-title">
                    <h2>What People Say About Us</h2>
                </div>
            </div>
            <div class="sixteen columns">
                <div id="owl-blockquotes" class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 20,
                        'orderby' => 'title',
                        'order' => 'DSC',
                    );

                    $loop = new WP_Query($args); ?>

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="item blockquotes-1">
                            <div class="item-wrap">
                                <div class="client-name">
                                    <h1><?php print the_title(); ?></h1>
                                    <img src="<?php bloginfo('template_url'); ?>/images/Group-38.png">
                                </div>
                                <div class="client-work">
                                    <h5><?php the_field('project_name'); ?></h5>
                                </div>
                                <div class="client-description">
                                    <p><?php the_field('project_description'); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION
        ================================================== -->
    <section class="section logos-slider_section">
        <div class="yp-container">
            <div class="logo-slider-left-move">
                <?php
                $args = array(
                    'post_type' => 'home_logo',
                    'cat' => 9,
                    'posts_per_page' => 8,
                    'orderby' => 'title',
                    'order' => 'DSC',
                );
                $loop = new WP_Query($args);
                ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $image = get_field('logo'); ?>
                    <?php if (!empty($image)): ?>
                        <div>
                            <a class="logo-bx" href="javascript:void(0);">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy"/>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </div>

            <div class="logo-slider-right-move" dir="rtl">
                <?php
                $args = array(
                    'post_type' => 'home_logo',
                    'cat' => 8,
                    'posts_per_page' => 8,
                    'orderby' => 'title',
                    'order' => 'DSC',
                );
                $loop = new WP_Query($args);
                ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $image = get_field('logo'); ?>
                    <?php if (!empty($image)): ?>
                        <div>
                            <a class="logo-bx" href="javascript:void(0);">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy"/>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div><!-- yp-container -->
    </section><!-- logos-slider_section -->

    <!-- SECTION
        ================================================== -->
    <section class="section g_y_section">
        <div class="blog_inner">
            <div class="one-second column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
                <a href="" class="animsition-link">
                    <div class="blog-box-1 grey-section">
                        <img src="<?php bloginfo('template_url'); ?>/images/balazs-ketyi-LPWl2pEVGKc-unsplash.jpg"
                             alt="">
                        <!-- <div class="blog-date-1">21.11.'14</div>
                            <div class="blog-comm-1">3 <span></span></div> -->
                        <h6>Latest post</h6>
                        <p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
                        <div class="link"></div>
                    </div>
                </a>
            </div>
            <div class="one-second column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
                <a href="" class="animsition-link">
                    <div class="blog-box-1 grey-section">
                        <img src="<?php bloginfo('template_url'); ?>/images/brooke-cagle-WHWYBmtn3_0-unsplash.jpg"
                             alt="">
                        <!-- <div class="blog-date-1">21.11.'14</div>
                            <div class="blog-comm-1">3 <span></span></div> -->
                        <h6>Latest post</h6>
                        <p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
                        <div class="link"></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION
        ================================================== -->
    <?php if (have_rows('content_details_section')): ?>
        <section class="section black_bg">
            <?php while (have_rows('content_details_section')): the_row(); ?>
                <div class="fotter_inner">
                    <div class="box-1" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
                        <div class="text-in">
                            <div class="section-title left office-text">
                                <h2 class="white_cl"><?php the_sub_field('title'); ?></h2>
                                <div class="subtitle left white_cl"><?php the_sub_field('subtitle'); ?></div>
                                <a href="mailto:<?php the_sub_field('email_address'); ?>" class="subtitle-button"
                                   role="button">
                                    <span class="button-text white_cl"><?php the_sub_field('email_address'); ?></span>
                                <span class="white_cl">|</span></a>
                                <a href="tel:<?php the_sub_field('phone'); ?>" class="subtitle-button "
                                   role="button">
                                    <span class="button-text white_cl"><?php the_sub_field('phone'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-2" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
                        <div class="box-1_inner2">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>

<?php
get_footer();
