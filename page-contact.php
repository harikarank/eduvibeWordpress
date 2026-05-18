<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<!-- ==================== BREADCRUMB ==================== -->
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-11-07.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-01-02.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-4"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-13-12.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-5"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-36.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-6"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-05-07.png' ); ?>" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>
<!-- ==================== END BREADCRUMB ==================== -->

<!-- ==================== CONTACT SECTION ==================== -->
<div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title"><?php esc_html_e( 'Need Help?', 'next-level-academy' ); ?></span>
                    <h3 class="title"><?php esc_html_e( 'Get In Touch With Us', 'next-level-academy' ); ?></h3>
                </div>
            </div>
        </div>

        <div class="row g-5 mt--20">
            <!-- Contact Info Cards -->
            <div class="col-lg-6">
                <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                    <div class="row g-5">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="contact-address-card-1 website">
                                <div class="inner">
                                    <div class="icon"><i class="ri-global-line"></i></div>
                                    <div class="content">
                                        <h6 class="title"><?php esc_html_e( 'Our Website', 'next-level-academy' ); ?></h6>
                                        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( parse_url( home_url(), PHP_URL_HOST ) ); ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="contact-address-card-1 phone">
                                <div class="inner">
                                    <div class="icon"><i class="icon-Headphone"></i></div>
                                    <div class="content">
                                        <h6 class="title"><?php esc_html_e( 'Call Us On', 'next-level-academy' ); ?></h6>
                                        <p><a href="tel:+61400349049">+61 400 349 049</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="contact-address-card-1 email">
                                <div class="inner">
                                    <div class="icon"><i class="icon-mail-open-line"></i></div>
                                    <div class="content">
                                        <h6 class="title"><?php esc_html_e( 'Email Us', 'next-level-academy' ); ?></h6>
                                        <p><a href="mailto:info@thenextlevelacademy.com">info@thenextlevelacademy.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="contact-address-card-1 location">
                                <div class="inner">
                                    <div class="icon"><i class="icon-map-pin-line"></i></div>
                                    <div class="content">
                                        <h6 class="title"><?php esc_html_e( 'Our Location', 'next-level-academy' ); ?></h6>
                                        <p><?php esc_html_e( 'Perth, Australia', 'next-level-academy' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Contact Form 7 -->
            <div class="col-lg-6">
                <?php
                /*
                 * Contact Form 7 setup — in WP Admin > Contact > Add New, create a form
                 * with the title "Contact Form" and these fields:
                 *
                 *   [text* your-name placeholder "Name*"]
                 *   [email* your-email placeholder "Email*"]
                 *   [tel your-tel placeholder "Phone"]
                 *   [text your-subject placeholder "Subject"]
                 *   [textarea* your-message placeholder "Your Message"]
                 *   [submit "Submit Now"]
                 *
                 * Then replace "Contact Form" below with the exact title you used,
                 * or switch to the numeric id: id="123"
                 */
                ?>
                <div class="rnt-contact-form rwt-dynamic-form">
                    <?php echo do_shortcode( '[contact-form-7 title="Contact Form"]' ); ?>
                </div>
            </div>

        </div><!-- .row -->

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-01.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-02-08.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-15.png' ); ?>" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>
<!-- ==================== END CONTACT SECTION ==================== -->

<!-- ==================== GOOGLE MAP ==================== -->
<div class="edu-contact-map-area edu-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map alignwide" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <iframe
                        class="radius-small"
                        src="https://maps.google.com/maps?q=Perth,+Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        height="500"
                        style="border:0; width:100%;"
                        allowfullscreen=""
                        loading="lazy"
                        title="<?php esc_attr_e( 'Our Location', 'next-level-academy' ); ?>">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END MAP ==================== -->

<?php get_footer(); ?>
