<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package markpating-assessment-theme
 */

?>

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo">
                    <a href="#">
                        <?php
                        the_custom_logo();
                        ?>
                    </a>
                </div>
                <div class="footer-social">
                    <ul>
                        <li>
                            <a href="<?php the_field('facebook_link', 'option') ?>" class="icon-facebook"></a>
                        </li>
                        <li>
                            <a href="<?php the_field('instagram_link', 'option') ?>" class="icon-instagram"></a>
                        </li>
                        <li>
                            <a href="<?php the_field('youtube_link', 'option') ?>" class="icon-youtube"></a>
                        </li>
                        <li>
                            <a href="<?php the_field('tiktok_link', 'option') ?>" class="icon-tiktoc"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>CONTACT INFORMATION</h4>
                    <p>
                        <?php esc_html(the_field('address', 'option')) ?>
                        <a class="learn-more" href="<?php the_field('get_directions_url', 'option') ?>"><br />
                            Get Directions <span class="icon-arrow-right"></span>
                        </a>
                    </p>
                    <p>
                        Phone: <a class="color-body" href="tel:<?php the_field('phone_number', 'option') ?>"><?php the_field('phone_number', 'option') ?></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>HOURS OF OPERATION</h4>
                    <p>
                        <?php esc_html(the_field('operating_hours', 'option')) ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>AWARDS & ASSOCIATIONS</h4>
                    <?php if (have_rows('awards_and_associations', 'option')) : ?>
                        <ul class="award-logos">
                            <?php while (have_rows('awards_and_associations', 'option')) : the_row();
                                $image = get_sub_field('image');
                            ?>
                                <li>
                                    <img src="<?php echo $image['url']; ?>" alt="Award" />
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="footer-left">
                    <ul class="footer-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'footer-menu',
                                'container' => '',
                                'theme_location' => 'footer-menu',
                                'items_wrap' => '<ul class="footer-menu">%3$s</ul>'
                            )
                        );
                        ?>
                    </ul>
                    <div class="copyright">
                        Copyright © 2020. All Rights Reserved
                    </div>
                </div>
                <div class="back-top">
                    <a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>