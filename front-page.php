<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markpating-assessment-theme
 */

get_header();
?>

<!-- Home Slider Start -->
<?php if (have_rows('slides')) : ?>
    <div class="home-slider owl-carousel owl-theme">
        <?php while (have_rows('slides')) : the_row();
            $image = get_sub_field('image');
            $heading = get_sub_field('heading');
            $sub_heading = get_sub_field('sub_heading');
            $button_url = get_sub_field('button_url');
            $button_label = get_sub_field('button_label');
        ?>
            <div class="item">
                <div class="slide-image">
                    <img src="<?php echo $image['url']; ?>" alt="Slide" />
                </div>
                <div class="container">
                    <div class="slide-content">
                        <h4 class="optinal-h4"><?php echo $heading ?></h4>
                        <h3><?php echo $sub_heading ?></h3>
                        <a href="<?php echo $button_url ?>" class="btn btn-primary"><?php echo $button_label ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<!-- Welcome Start -->
<div class="welcome-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 mobile-order2">
                <div class="welcome-box team-box">
                    <div class="team-image">
                        <?php
                        $image = get_field('welcome_image');
                        ?>
                        <img src="<?php echo $image['url'] ?>" alt="Welcome" />
                    </div>
                    <div class="team-title">
                        <?php the_field('welcome_title') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="welcome-content">
                    <?php the_field('welcome_content') ?>
                    <a href="#" class="btn btn-primary">Meet our Team</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome End -->
<!-- Home Services Start -->
<div class="home-services line-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <h4 class="optinal-h4"><?php the_field('heading') ?></h4>
                    <?php the_field('service_content') ?>
                    <a href="<?php the_field('service_button_url') ?>" class="btn btn-primary"><?php the_field('service_button_label') ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <div class="service-owl owl-carousel owl-theme">
                        <?php
                        $i = 0;
                        if (have_rows('services')) :
                            while (have_rows('services')) : the_row();
                                $image = get_sub_field('service_image');
                                $service = get_sub_field('service_title');
                                $learn_more_url = get_sub_field('learn_more_url');
                                if ($i % 4 == 0) :
                                    if ($i != 0) :
                        ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="item">
                <div class="row">
                <?php endif; ?>
                <div class="col-md-6">
                    <div class="service-box">
                        <div class="service-image">
                            <img src="<?php echo $image['url'] ?>" alt="Service" />
                        </div>
                        <div class="service-info">
                            <div class="service-inner">
                                <div class="service-icon comman-icon">
                                    <span class="icon-<?php echo $service['value'] ?>"></span>
                                </div>
                                <div class="service-title"><?php echo $service['label'] ?></div>
                                <a class="learn-more" href="<?php echo $learn_more_url ?>">learn more <span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                                $i++;
                            endwhile;
            ?>
                </div>
            </div>
        <?php
                        endif;
        ?>
            </div>
        </div>
        <div class="d-lg-none">
            <div class="service-owl owl-carousel owl-theme">
                <?php if (have_rows('services')) :
                    while (have_rows('services')) : the_row();
                        $image = get_sub_field('service_image');
                        $service = get_sub_field('service_title');
                        $learn_more_url = get_sub_field('learn_more_url');
                ?>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="<?php echo $image['url'] ?>" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-<?php echo $service['value'] ?>"></span>
                                        </div>
                                        <div class="service-title"><?php echo $service['label'] ?></div>
                                        <a class="learn-more" href="<?php echo $learn_more_url ?>">learn more <span class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Home Services End -->
<!-- Home Team Start -->
<div class="home-team">
    <div class="team-banner">
        <div class="banner-image">
            <?php $image = get_field('team_heading_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="Team" />
        </div>
    </div>
    <div class="team-content">
        <div class="container">
            <div class="team-wrap">
                <h4 class="optinal-h4"><?php the_field('team_heading') ?></h4>
                <h1><?php the_field('team_sub_heading') ?></h1>
                <div class="row">
                    <?php while (have_rows('doctors')) : the_row();
                        $image = get_sub_field('doctor_image');
                        $learn_more_url = get_sub_field('learn_more_url');
                        $doctor_name = get_sub_field('doctor_name');
                    ?>
                        <div class="col-md-4">
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="<?php echo $image['url'] ?>" alt="Team" />
                                    <div class="team-hover">
                                        <div class="team-h-inner">
                                            <div class="comman-icon">
                                                <span class="icon-cross-paw"></span>
                                            </div>
                                            <div class="more-div">
                                                <a class="learn-more yellow-link" href="<?php echo $learn_more_url ?>">learn more <span class="icon-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-title">
                                    <?php echo $doctor_name ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="meet-button">
                    <a href="<?php the_field('team_button_url') ?>" class="btn btn-secondary"><?php the_field('team_button_label') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Team End -->

<!-- Exotic Care Start -->
<div class="exotic-care">
    <div class="container">
        <div class="exotic-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h4 class="optinal-h4"><?php the_field('exotic_heading') ?></h4>
                    <h1><?php the_field('exotic_sub_heading') ?></h1>
                    <?php the_field('exotic_content') ?>
                    <a href="<?php the_field('exotic_learn_more_url') ?>" class="btn btn-primary"><?php the_field('exotic_learn_more_label') ?></a>
                </div>
                <div class="col-lg-5">
                    <div class="exotic-images">
                        <?php
                        $i = 1;
                        while (have_rows('exotic_pets_images')) : the_row();
                            $image = get_sub_field('exotic_pet_image');
                            $exotic_pet_name = get_sub_field('exotic_pet_name');

                        ?>
                            <div class="exotic-image<?php echo $i ?> team-box">
                                <div class="team-image">
                                    <img src="<?php echo $image['url'] ?>" alt="Exotic" />
                                </div>
                                <div class="team-title"><?php echo $exotic_pet_name ?></div>
                            </div>
                        <?php
                            $i++;
                        endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Exotic Care End -->

<!-- Fun Fact Start -->
<div class="fun-fact line-bg">
    <div class="container">
        <div class="fun-friday">
            <?php the_field('video_heading') ?>
            <span class="friday-label"><?php the_field('video_sub_heading') ?></span>
        </div>
        <div class="fun-fact-owl owl-carousel">
            <?php while (have_rows('videos')) : the_row();
                $image = get_sub_field('video_image');
                $video_url = get_sub_field('video_url');
                $video_content = get_sub_field('video_content');
            ?>
                <div class="item">
                    <div class="fun-image">
                        <img src="<?php echo $image['url'] ?>" alt="Video">
                        <a class="play-icon icon-youtube" href="<?php echo $video_url ?>"></a>
                    </div>
                    <div class="fun-content">
                        <?php echo $video_content ?>
                        <a class="btn btn-primary" href="<?php echo the_field('video_button_url') ?>"><?php the_field('video_button_label') ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Fun Fact End -->

<!-- Testi and Blog Start -->
<div class="testi-blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonials">
                    <div class="comman-icon">
                        <span class="icon-quotes"></span>
                    </div>
                    <h1><?php the_field('testimonial_heading') ?></h1>
                    <a class="btn btn-primary" href="<?php the_field('testimonial_button_url') ?>"><?php the_field('testimonial_button_label') ?></a>
                    <div class="testi-owl owl-carousel">
                        <?php while (have_rows('testimonials')) : the_row();
                            $message = get_sub_field('testimonial_message');
                            $testimonial_by = get_sub_field('testimonial_by');
                        ?>
                            <div class="item">
                                <p><?php echo $message ?><br />
                                </p>
                                <b>- <?php echo $testimonial_by ?></b>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-blog">
                    <div class="blog-title">
                        <h4 class="optinal-h4">OUR BLOG</h4>
                        <a class="btn btn-secondary" href="<?php echo home_url() . '/?post_type=post' ?>">View All Posts</a>
                    </div>

                    <?php
                    $args = array(
                        'orderby' => 'rand',
                        'posts_per_page' => 1,
                    );

                    $random_post_query = new WP_Query($args);

                    if ($random_post_query->have_posts()) :
                        while ($random_post_query->have_posts()) : $random_post_query->the_post();
                            $post_content = get_the_content();
                            $thumbnail_url = get_the_post_thumbnail_url();
                            $first_paragraph = wpautop(wp_trim_words($post_content, 100, ''));

                    ?>
                            <div class="blog-main">
                                <div class="blog-image">
                                    <img src="<?php echo esc_url($thumbnail_url) ?>" alt="Blog">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-inner">
                                        <?php the_title('<h4>', '</h4>') ?>
                                        <p><?php echo $first_paragraph ?></p>
                                        <div class="readmore">
                                            <a class="btn btn-primary" href="<?php echo get_permalink() ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;

                    wp_reset_postdata(); // Reset post data to restore the original query
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testi and Blog End -->

<?php get_footer(); ?>