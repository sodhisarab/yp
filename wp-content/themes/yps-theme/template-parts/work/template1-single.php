<aside class="work_page_inner">

    <?php if (have_rows('client_information')): ?>

        <?php while (have_rows('client_information')): the_row(); ?>



            <div class="work_page_section1">

                <div class="work_page_head">

                    <?php echo getImageHtml(get_sub_field('client_logo'), get_sub_field('client_logo')); ?>

                    <ul class="client_name">

                        <li><strong class="lable">Client</strong></li>

                        <li><?php the_title(); ?></li>

                    </ul>

                    <?php if (have_rows('services')): ?>

                        <ul class="servies_provied">

                            <li><strong class="lable">Services</strong></li>

                            <?php while (have_rows('services')): the_row(); ?>



                                <li><?php the_sub_field('title'); ?></li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                    <ul class="platform_inner">

                        <li><strong class="lable">Platform</strong></li>

                        <li><?php the_sub_field('build_it_with') ?></li>

                    </ul>

                </div>

                <div class="work_pag_image">

                    <button class="close-detail">

                        <img src="<?php bloginfo('template_url'); ?>/dist/img/back.svg" alt="Back to slideshow"

                             class="close-detail__back">

                        Back
                    </button>
                    <div class="work_inner_work">

                        <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail(); ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>



        <?php endwhile; ?>

    <?php endif; ?>



    <?php if (have_rows('project_background')): ?>

        <?php while (have_rows('project_background')): the_row(); ?>



            <div class="work_page_section2">

                <div class="section2_head">

                    <h2><?php the_sub_field('title'); ?>

                        <svg width="30" height="30" class="squareanimation">

                            <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"></rect>

                        </svg>

                    </h2>



                </div>

                <div class="section2_content">

                    <div class="section2_one">



                    </div>

                    <div class="section2_three">

                        <h5>Background</h5>

                        <?php the_sub_field('description'); ?>

                    </div>

                </div>



            </div>

            <div class="work_page_section2">

                <?php echo getImageHtml(get_sub_field('main_image'), get_sub_field('mobile_image')); ?>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>



    <?php

    $is_additional = false;

    ?>

    <?php if (have_rows('project_challenge')): ?>

        <?php while (have_rows('project_challenge')): the_row(); ?>

            <?php

            $is_additional = get_sub_field('is_additional_information');



            ?>

            <div class="work_page_section3">

                <div class="section2_three">

                    <h2>The Challenge

                        <svg width="30" height="30" class="squareanimation">

                            <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"></rect>

                        </svg>

                    </h2>

                    <h6><?php the_sub_field('title'); ?></h6>

                    <?php the_sub_field('description'); ?>

                </div>



            </div>

            <div class="work_page_section4">

                <?php echo getImageHtml(get_sub_field('main_image'), get_sub_field('mobile_image')); ?>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>



    <?php if ($is_additional): ?>

        <?php if (have_rows('additional_information')): ?>

            <?php while (have_rows('additional_information')): the_row(); ?>

                <div class="work_page_section5">

                    <div class="section5_one">

                        <?php echo getImageHtml(get_sub_field('main_image'), get_sub_field('mobile_image')); ?>

                    </div>

                    <div class="section5_two">

                        <h2><?php the_sub_field('title'); ?></h2>

                        <h6><?php the_sub_field('sub_title'); ?></h6>

                        <?php the_sub_field('description'); ?>

                    </div>

                </div>

            <?php endwhile; ?>

        <?php endif; ?>



    <?php endif; ?>





    <?php

    $testimonial = get_field('section_6_testimonial');

    if (!empty($testimonial)): ?>

        <div class="work_page_section6">

            <div class="section6_one">

                <img src="<?php echo esc_url($testimonial['section_6_testimonial_image']['url']); ?>"

                     alt="<?php echo esc_attr($testimonial['section_6_testimonial_image']['alt']); ?>"/>

            </div>

            <div class="section6_two">

                <?php print($testimonial['section_6_testimonial_content']); ?>

                <h4><?php echo esc_attr($testimonial['section_6_testimonial_name']); ?></h4>

                <h6><?php echo esc_attr($testimonial['section_6_testimonial_company']); ?></h6>

            </div>

        </div>

    <?php endif; ?>



    <?php if (have_rows('project_solutions')): ?>

        <div class="work_page_section7">

        <?php while (have_rows('project_solutions')): the_row(); ?>

            <div class="section7_head">

                <h2>The Solution

                    <svg width="30" height="30" class="squareanimation">

                        <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"></rect>

                    </svg>

                </h2>

            </div>

            <div class="section7_content">

                <div class="section7_one">

                    <p><?php the_sub_field('title') ?></p>

                    <?php if (have_rows('services')): ?>

                        <ul>

                            <li><h3 class="lable">Services</h3></li>

                            <?php while (have_rows('services')): the_row(); ?>

                                <li><span><?php the_sub_field('title') ?></span></li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

                <div class="section7_two">

                    <?php the_sub_field('description') ?>

                </div>

            </div>

            <?php if (have_rows('images')): ?>

                </div>

                <div class="work_page_section8">

                <div class="mobile_box_sec8">

                    <ul>



                        <?php while (have_rows('images')): the_row(); ?>

                            <li>

                                <?php echo getImageHtml(get_sub_field('image'), get_sub_field('image')); ?>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                </div>

            <?php endif; ?>

        <?php endwhile; ?>

        </div>

    <?php endif; ?>



    <?php if (have_rows('p_additional_information')): ?>

        <div class="work_page_section9">

            <?php while (have_rows('p_additional_information')): the_row(); ?>



                <?php

                $pTitle = get_sub_field('title');

                $pSubTitle = get_sub_field('sub_title');

                ?>

                <?php if (!empty($pTitle) || !empty($pSubTitle)): ?>

                    <div class="section10_head">

                        <?php if (!empty($pTitle)): ?>

                            <h2><?php echo $pTitle; ?>

                                <svg width="30" height="30" class="squareanimation">

                                    <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"></rect>

                                </svg>

                            </h2>

                        <?php endif; ?>

                        <?php if (!empty($pSubTitle)): ?>

                            <?php echo $pSubTitle; ?>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>

                <?php if (have_rows('details')): ?>



                    <?php while (have_rows('details')): the_row(); ?>

                        <?php

                        $imageHTML = getImageHtml(get_sub_field('main_image'), get_sub_field('mobile_image'));

                        ?>

                        <?php $imagePosition = get_sub_field('image_position'); ?>





                        <?php

                        $title = get_sub_field('title');

                        $desc = get_sub_field('title');

                        ?>

                        <?php if (!empty($title || !empty($desc))) : ?>

                            <?php if ($imagePosition == 'Above'): ?>

                                <?php echo $imageHTML; ?>

                            <?php endif; ?>

                            <div class="work_page_section_inner template-1">

                                <?php if ($imagePosition == 'Left' || $imagePosition == 'Right') : ?>

                                    <div class="section9_one">

                                        <?php if ($imagePosition == 'Left'): ?>

                                            <?php echo $imageHTML; ?>

                                        <?php else: ?>

                                            <?php if (!empty($title)): ?>

                                                <h3><?php echo $title; ?></h3>

                                            <?php endif; ?>

                                            <?php $desc; ?>

                                        <?php endif; ?>

                                    </div>

                                    <div class="section9_two">

                                        <?php if ($imagePosition == 'Right'): ?>

                                            <?php echo $imageHTML; ?>

                                        <?php else: ?>

                                            <?php if (!empty($title)): ?>

                                                <h3><?php echo $title; ?></h3>

                                            <?php endif; ?>

                                            <?php $desc; ?>

                                        <?php endif; ?>

                                    </div>

                                <?php else: ?>

                                    <div class="section9_one">

                                        <h3><?php the_sub_field('title'); ?></h3>

                                        <?php the_sub_field('description'); ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                            <?php if ($imagePosition == 'Below'): ?>

                                <?php echo $imageHTML; ?>

                            <?php endif; ?>

                        <?php else: ?>

                            <?php echo $imageHTML; ?>

                        <?php endif; ?>



                    <?php endwhile ?>



                <?php endif; ?>

            <?php endwhile; ?>

        </div>

    <?php endif; ?>



    <?php if (have_rows('results')): ?>

        <div class="work_page_section10">



            <?php while (have_rows('results')): the_row(); ?>

                <div class="section10_head">

                    <h2>Results

                        <svg width="30" height="30" class="squareanimation">

                            <rect x="0" y="0" width="30" height="30" style="fill:#F9CF01;"></rect>

                        </svg>

                    </h2>

                </div>



                <div class="section10_content">

                    <div class="section10_one">

                        <p><?php the_sub_field('title'); ?></p>



                    </div>

                    <div class="section10_two">

                        <?php the_sub_field('descritpion'); ?>



                        <?php if (have_rows('result')): ?>

                            <ul class="percent_10 ">

                                <?php while (have_rows('result')): the_row(); ?>

                                    <li><h3>+ <?php the_sub_field('value') ?>%</h3>

                                        <span><?php the_sub_field('title') ?></span></li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="section10-footer">

                    <?php if (have_rows('result')): ?>

                        <ul class="percent_10">

                            <?php while (have_rows('result')): the_row(); ?>

                                <li><h3>+ <?php the_sub_field('value') ?>%</h3>

                                    <span><?php the_sub_field('title') ?></span></li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

            <?php endwhile; ?>



        </div>

    <?php endif; ?>

</aside>





