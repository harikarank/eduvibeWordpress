    <!-- ==================== FOOTER ==================== -->
    <footer class="eduvibe-footer-one edu-footer footer-style-default">
        <div class="footer-top">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">

                    <!-- Col 1: Logo + Social -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="edu-footer-widget">
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php
                                    if ( has_custom_logo() ) {
                                        the_custom_logo();
                                    } else {
                                        echo '<img class="logo-light white-icon" src="' . esc_url( NLA_URI . '/assets/images/logo/logo-white.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
                                    }
                                    ?>
                                </a>
                            </div>
                            <p class="description"><?php echo esc_html( get_bloginfo( 'description' ) ?: 'It is a long established reader.' ); ?></p>
                            <ul class="social-share">
                                <li><a href="#"><i class="icon-Fb"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-Twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 2: Explore -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title"><?php esc_html_e( 'Explore', 'next-level-academy' ); ?></h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'About Us', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Our Product', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Blog', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Contact Us', 'next-level-academy' ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Col 3: Useful Links -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget quick-link-widget">
                            <h5 class="widget-title"><?php esc_html_e( 'Useful Links', 'next-level-academy' ); ?></h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'FAQ Question', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Testimonial', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Privacy Policy', 'next-level-academy' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/terms-and-conditions' ) ); ?>"><i class="icon-Double-arrow"></i><?php esc_html_e( 'Terms &amp; Conditions', 'next-level-academy' ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Col 4: Contact Info -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget">
                            <h5 class="widget-title"><?php esc_html_e( 'Contact Info', 'next-level-academy' ); ?></h5>
                            <div class="inner">
                                <div class="widget-information">
                                    <ul class="information-list">
                                        <li><i class="icon-map-pin-line"></i><?php esc_html_e( 'Perth, Australia', 'next-level-academy' ); ?></li>
                                        <li><i class="icon-phone-fill"></i><a href="tel:+61400349049">+61 400 349 049</a></li>
                                        <li><i class="icon-mail-line-2"></i><a href="mailto:info@thenextlevelacademy.com">info@thenextlevelacademy.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- .row -->

                <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-21-01.png' ); ?>" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-35.png' ); ?>" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area copyright-default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved', 'next-level-academy' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== END FOOTER ==================== -->

</div><!-- .main-wrapper -->

<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<?php wp_footer(); ?>
</body>
</html>
