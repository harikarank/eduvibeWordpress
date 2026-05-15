<?php
/**
 * Template Name: About Us
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

<!-- ==================== ABOUT SECTION ==================== -->
<div class="eduvibe-home-four-about edu-about-area about-style-2 edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row row--50">
            <div class="col-lg-6">
                <div class="about-image-gallery">
                    <div class="eduvibe-about-1-img-wrapper">
                        <img class="image-1" src="<?php echo esc_url( NLA_URI . '/assets/images/about/about-07/about-image-01.png' ); ?>" alt="About Images" />
                        <span class="eduvibe-about-blur">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/about/about-07/about-blur.png' ); ?>" alt="About Blur" />
                        </span>
                    </div>
                    <div class="circle-image-wrapper">
                        <img class="image-2" src="<?php echo esc_url( NLA_URI . '/assets/images/about/about-07/about-image-02.png' ); ?>" alt="About Images" />
                        <div class="circle-image"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner mt_md--40 mt_sm--40">
                    <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title"><?php esc_html_e( 'About Us', 'next-level-academy' ); ?></span>
                        <h3 class="title"><?php esc_html_e( 'Knowledge is power, Information is liberating.', 'next-level-academy' ); ?></h3>
                    </div>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="description mt--40 mt_md--20 mt_sm--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; endif; ?>

                    <h6 class="subtitle mb--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <?php esc_html_e( 'People Love To Learn With Us', 'next-level-academy' ); ?>
                    </h6>

                    <div class="about-feature-list">
                        <div class="row g-5">
                            <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-style-3">
                                    <div class="feature-content">
                                        <h6 class="feature-title">90%</h6>
                                        <p class="feature-description"><?php esc_html_e( '90% of students see their course through to completion.', 'next-level-academy' ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-style-3">
                                    <div class="feature-content">
                                        <h6 class="feature-title">9/10</h6>
                                        <p class="feature-description"><?php esc_html_e( '9/10 users reported better learning outcomes.', 'next-level-academy' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="read-more-btn mt--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="edu-btn" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">
                            <?php esc_html_e( 'Learn More', 'next-level-academy' ); ?><i class="icon-arrow-right-line-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-11-05.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-08-01.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-30.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape shape-1"><span class="shape-dot"></span></div>
        </div>
    </div>
</div>
<!-- ==================== END ABOUT SECTION ==================== -->

<!-- ==================== WHAT WE OFFER (SERVICES) ==================== -->
<div class="eduvibe-about-us-one-service edu-service-area edu-section-gapBottom bg-color-white service-bg-position">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title"><?php esc_html_e( 'What We Offer', 'next-level-academy' ); ?></span>
                    <h3 class="title"><?php esc_html_e( 'Learn New Skills When And Where You Like', 'next-level-academy' ); ?></h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <?php
            $about_services = [
                [ 'icon' => 'offer-icon-01.png', 'bg' => 'card-bg-1', 'title' => 'Remote Learning',     'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ],
                [ 'icon' => 'offer-icon-02.png', 'bg' => 'card-bg-2', 'title' => 'Awesome Tutors',      'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ],
                [ 'icon' => 'offer-icon-03.png', 'bg' => 'card-bg-3', 'title' => 'Global Certificate',  'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ],
                [ 'icon' => 'offer-icon-04.png', 'bg' => 'card-bg-4', 'title' => 'Lifetime Access',     'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ],
            ];
            $delay = 150;
            foreach ( $about_services as $svc ) : ?>
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-2 <?php echo esc_attr( $svc['bg'] ); ?>">
                    <div class="inner">
                        <div class="icon">
                            <a href="#">
                                <img src="<?php echo esc_url( NLA_URI . '/assets/images/icons/' . $svc['icon'] ); ?>" alt="Service Image">
                            </a>
                            <div class="shape-list">
                                <img class="shape shape-1" src="<?php echo esc_url( NLA_URI . '/assets/images/icons/service-icon-01.png' ); ?>" alt="Shape">
                                <img class="shape shape-2" src="<?php echo esc_url( NLA_URI . '/assets/images/icons/service-icon-02.png' ); ?>" alt="Shape">
                                <img class="shape shape-3" src="<?php echo esc_url( NLA_URI . '/assets/images/icons/service-icon-03.png' ); ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#"><?php echo esc_html( $svc['title'] ); ?></a></h6>
                            <p class="description"><?php echo esc_html( $svc['desc'] ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $delay += 50; endforeach; ?>
        </div>
    </div>
</div>
<!-- ==================== END WHAT WE OFFER ==================== -->

<?php get_footer(); ?>
