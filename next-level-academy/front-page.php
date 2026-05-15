<?php get_header(); ?>

<!-- ==================== HERO BANNER ==================== -->
<div class="slider-area banner-style-4 bg-image">
    <div class="wrapper d-flex align-items-center home-four-banner-wrapper">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="inner mt_md--10 mt_sm--10">
                        <div class="content text-start">
                            <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Learn New Things Daily</span>
                            <h1 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Education Is A Path To Success In Life</h1>
                            <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">Sed eu volutpat arcu, a tincidunt nulla quam, feugiat sit amet ipsum a, dapibus porta velit.</p>
                            <div class="read-more-btn" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">Get Started Today <i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="banner-image">
                        <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/banner/banner-04/banner-03.png' ); ?>" alt="Banner Images" />
                        </div>
                        <div class="round-images" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/banner/banner-04/hero-04-round.png' ); ?>" alt="Shape Images" />
                        </div>
                        <div class="learner-badge">
                            <div class="badge-inner"><span class="viewer">28K</span><span>Enrolled</span><span>Learner</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-05-03.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-05-04.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-19-04.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-4"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-01-04.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-5"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-01-03.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-6"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-06.png' ); ?>" alt="Shape Thumb" /></div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END HERO ==================== -->

<!-- ==================== SERVICES ==================== -->
<div class="eduvibe-home-four-service edu-service-area edu-section-gap bg-color-white position-relative border-bottom-1">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">What We Offer</span>
                    <h3 class="title">Learn New Skills When And <br /> Where You Like</h3>
                </div>
            </div>
        </div>
        <div class="row eduvibe-about-one-service g-5 mt--20">
            <?php
            $services = [
                [ 'icon' => 'icon-Destination', 'title' => 'Expert Instruction',  'bg' => 'shape-bg-1', 'desc' => 'Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim' ],
                [ 'icon' => 'icon-Browser',     'title' => 'Video Tutorials',     'bg' => 'shape-bg-2', 'desc' => 'Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim' ],
                [ 'icon' => 'icon-Lock',        'title' => 'Lifetime Access',     'bg' => 'shape-bg-3', 'desc' => 'Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim' ],
                [ 'icon' => 'icon-Settings',    'title' => 'Learn From Anywhere', 'bg' => 'shape-bg-4', 'desc' => 'Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim' ],
            ];
            $delay = 150;
            foreach ( $services as $service ) : ?>
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-3 text-left <?php echo esc_attr( $service['bg'] ); ?> bg-grey">
                    <div class="inner">
                        <div class="icon"><a href="#"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i></a></div>
                        <div class="content">
                            <h6 class="title"><a href="#"><?php echo esc_html( $service['title'] ); ?></a></h6>
                            <p class="description"><?php echo esc_html( $service['desc'] ); ?></p>
                            <div class="read-more-btn">
                                <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $delay += 50; endforeach; ?>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-29.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-06.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-02-06.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-4"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-19-02.png' ); ?>" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>
<!-- ==================== END SERVICES ==================== -->

<!-- ==================== COURSES CAROUSEL ==================== -->
<div class="edu-course-area eduvibe-home-two-course course-three-wrapper edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">our courses</span>
                    <h3 class="title">Courses We Offer</h3>
                </div>

                <div class="mt--40 mb--50 edu-slick-button slick-activation-wrapper eduvibe-course-one-carousel eduvibe-course-carousel-page-with-dots">
                    <?php
                    $courses_query = new WP_Query( [
                        'post_type'      => 'course',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                    ] );

                    if ( $courses_query->have_posts() ) :
                        while ( $courses_query->have_posts() ) : $courses_query->the_post();
                            $category   = get_the_term_list( get_the_ID(), 'course_category', '', ', ' );
                            $lessons    = nla_course_meta( 'lessons', '0 Lessons' );
                            $price      = nla_course_meta( 'price', '' );
                            $old_price  = nla_course_meta( 'old_price', '' );
                            $thumb_url  = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium_large' ) : esc_url( NLA_URI . '/assets/images/course/course-01/course-01.jpg' );
                    ?>
                    <div class="single-slick-card">
                        <div class="edu-card card-type-3 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="w-100" src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                    </a>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                    <?php if ( $category ) : ?>
                                    <div class="top-position status-group left-bottom">
                                        <span class="eduvibe-status status-03"><?php echo wp_kses_post( $category ); ?></span>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <div class="card-top">
                                        <div class="author-meta">
                                            <div class="author-thumb">
                                                <a href="#">
                                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                                    <span class="author-title"><?php the_author(); ?></span>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="edu-meta meta-02">
                                            <li><i class="icon-file-list-3-line"></i><?php echo esc_html( $lessons ); ?></li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="card-bottom">
                                        <?php if ( $price ) : ?>
                                        <div class="price-list price-style-02">
                                            <div class="price current-price"><?php echo esc_html( $price ); ?></div>
                                            <?php if ( $old_price ) : ?><div class="price old-price"><?php echo esc_html( $old_price ); ?></div><?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                    <p class="text-center"><?php esc_html_e( 'No courses found. Add courses in the WordPress admin.', 'next-level-academy' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Video popup -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="video-gallery-wrapper edu-section-gapTop video-section-overlayto-another">
                    <div class="video-gallery-1">
                        <div class="thumbnail video-popup-wrapper">
                            <img class="radius-small w-100" src="<?php echo esc_url( NLA_URI . '/assets/images/videopopup/video-popup-bg-01.jpg' ); ?>" alt="Video Images">
                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation btn-secondary-color size-80">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-02.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-06.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-03.png' ); ?>" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-4"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-07-01.png' ); ?>" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>
<!-- ==================== END COURSES ==================== -->

<!-- ==================== EVENTS ==================== -->
<div class="edu-event-area eduvibe-home-two-event edu-section-gap bg-image video-gallery-overlay-area">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Let's Learn Together</span>
                    <h3 class="title">Upcoming Educational Events</h3>
                </div>
            </div>
        </div>
        <?php
        $events = [
            [ 'img' => 'event-01/event-01.jpg', 'title' => 'Consumer Food Safety Education Conference',    'date' => '15th December 2022', 'time' => '10:00 AM', 'loc' => 'IAC Building, New York, NY' ],
            [ 'img' => 'event-01/event-02.jpg', 'title' => 'Virtual Spring Part-time Jobs Fair for Student', 'date' => '12th November 2022', 'time' => '09:00 AM', 'loc' => 'IAC Building, New York, NY' ],
            [ 'img' => 'event-01/event-03.jpg', 'title' => 'Explorations of Regional Chief Executive Network', 'date' => '28th October 2022', 'time' => '08:00 AM', 'loc' => 'IAC Building, New York, NY' ],
        ];
        $delay = 150;
        ?>
        <div class="row g-5 mt--25">
            <?php foreach ( $events as $event ) : ?>
            <div class="col-lg-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-event event-list radius-small bg-white">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="<?php echo esc_url( NLA_URI . '/assets/images/event/' . $event['img'] ); ?>" alt="Event Images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="content-left">
                                <h5 class="title"><a href="#"><?php echo esc_html( $event['title'] ); ?></a></h5>
                                <ul class="event-meta">
                                    <li><i class="icon-calendar-2-line"></i><?php echo esc_html( $event['date'] ); ?></li>
                                    <li><i class="icon-time-line"></i><?php echo esc_html( $event['time'] ); ?></li>
                                    <li><i class="icon-map-pin-line"></i><?php echo esc_html( $event['loc'] ); ?></li>
                                </ul>
                            </div>
                            <div class="read-more-btn">
                                <a class="edu-btn btn-dark" href="#">Book A Seat<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $delay += 50; endforeach; ?>
        </div>
    </div>
</div>
<!-- ==================== END EVENTS ==================== -->

<!-- ==================== TESTIMONIALS ==================== -->
<div id="testimonials" class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">TESTIMONIALS</span>
                    <h3 class="title">Our Lovely Students Feedback</h3>
                </div>
            </div>
        </div>
        <div class="edu-testimonial-activation testimonial-item-3 mt--40 edu-slick-button">
            <?php
            $testimonials = [
                [ 'img' => 'client-03.png', 'name' => 'Stive Marlone',    'role' => 'Web Developer',     'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-04.png', 'name' => 'James Carlson',    'role' => 'UI/UX Designer',    'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-01.png', 'name' => 'Nancy Phipps',     'role' => 'Digital Marketer',  'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-02.png', 'name' => 'Adam Smith',       'role' => 'Web Developer',     'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-05.png', 'name' => 'Jhaniel Devora',   'role' => 'Digital Marketer',  'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-06.png', 'name' => 'Jhamina Diva',     'role' => 'Web Developer',     'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
                [ 'img' => 'client-01.png', 'name' => 'Mark Ronson',      'role' => 'Digital Marketer',  'text' => 'There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised.' ],
            ];
            foreach ( $testimonials as $t ) : ?>
            <div class="testimonial-card-box">
                <div class="inner">
                    <div class="client-info">
                        <div class="thumbnail">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/testimonial/testimonial-04/' . $t['img'] ); ?>" alt="Client Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><?php echo esc_html( $t['name'] ); ?></h6>
                            <span class="designation"><?php echo esc_html( $t['role'] ); ?></span>
                        </div>
                    </div>
                    <p class="description">&ldquo; <?php echo esc_html( $t['text'] ); ?> &rdquo;</p>
                    <div class="rating">
                        <i class="on icon-Star"></i><i class="on icon-Star"></i><i class="on icon-Star"></i><i class="on icon-Star"></i><i class="on icon-Star"></i>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- ==================== END TESTIMONIALS ==================== -->

<!-- ==================== WHY CHOOSE US ==================== -->
<div class="edu-feature-area eduvibe-home-one-video edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row row--35">
            <div class="col-lg-5 col-12 order-2 order-lg-1">
                <div class="inner mt_md--40 mt_sm--40">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Why Choose US</span>
                        <h3 class="title">Our Core Features</h3>
                    </div>
                    <div class="feature-list-wrapper mt--10">
                        <?php
                        $features = [
                            [ 'icon' => 'icon-student',  'title' => 'Flexible Classes',  'delay' => 150 ],
                            [ 'icon' => 'icon-square',   'title' => 'Offline Mode',       'delay' => 200 ],
                            [ 'icon' => 'icon-research', 'title' => 'Flexible Learning',  'delay' => 250 ],
                            [ 'icon' => 'icon-clock',    'title' => 'Educator Support',   'delay' => 300 ],
                        ];
                        foreach ( $features as $feat ) : ?>
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="<?php echo esc_attr( $feat['delay'] ); ?>" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon"><i class="<?php echo esc_attr( $feat['icon'] ); ?>"></i></div>
                            <div class="content">
                                <h6 class="title"><?php echo esc_html( $feat['title'] ); ?></h6>
                                <p>Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 order-1 order-lg-2">
                <div class="feature-thumbnail">
                    <div class="main-image video-popup-wrapper video-popup-two">
                        <img src="<?php echo esc_url( NLA_URI . '/assets/images/videopopup/choose-us-image-01.jpg' ); ?>" alt="Choose Us Images">
                        <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top btn-large video-popup-activation eduvibe-video-play-icon color-secondary">
                            <span class="play-icon"></span>
                        </a>
                    </div>
                    <div class="circle-image"><span></span><span></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END WHY CHOOSE US ==================== -->

<!-- ==================== NEWSLETTER ==================== -->
<div class="edu-newsletter-area newsletter-style-1 edu-section-gap bg-color-primary">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-center">
                    <div class="section-title text-white text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Subscribe Newsletter</span>
                        <h3 class="title">Get Every Latest News</h3>
                    </div>
                    <?php if ( function_exists( 'mc4wp_form' ) ) : ?>
                        <?php mc4wp_form(); ?>
                    <?php else : ?>
                    <div class="newsletter-form newsletter-form-style-1 mt--60">
                        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                            <?php wp_nonce_field( 'nla_newsletter', 'nla_nonce' ); ?>
                            <input type="hidden" name="action" value="nla_newsletter_subscribe">
                            <div class="input-box">
                                <input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your mail address', 'next-level-academy' ); ?>" required>
                                <div class="mail-icon"><i class="icon-mail-open-line"></i></div>
                                <button class="send-button" type="submit"><i class="icon-send-plane-fill"></i></button>
                            </div>
                        </form>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END NEWSLETTER ==================== -->

<!-- ==================== LATEST BLOG ==================== -->
<div class="eduvibe-home-four-blog bg-image edu-blog-area edu-section-gap">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="section-title text-start">
                    <span class="pre-title">Blog</span>
                    <h3 class="title">Read our latest updates.</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="load-more-btn text-start text-md-end">
                    <a class="edu-btn" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">View All<i class="icon-arrow-right-line-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <?php
            $blog_query = new WP_Query( [
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ] );

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-type-2 variation-2 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( NLA_URI . '/assets/images/blog/post-01/post-01.jpg' ); ?>" alt="Blog Image">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="content">
                            <div class="blog-date-status">
                                <span class="day"><?php echo get_the_date( 'd' ); ?></span>
                                <span class="month"><?php echo get_the_date( 'M' ); ?></span>
                            </div>
                            <div class="status-group status-style-5">
                                <?php
                                $cats = get_the_category();
                                if ( $cats ) : ?>
                                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="eduvibe-status status-05">
                                    <i class="icon-price-tag-3-line"></i> <?php echo esc_html( $cats[0]->name ); ?>
                                </a>
                                <?php endif; ?>
                            </div>
                            <h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
            <div class="col-12">
                <p><?php esc_html_e( 'No blog posts found.', 'next-level-academy' ); ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- ==================== END BLOG ==================== -->

<?php get_footer(); ?>
