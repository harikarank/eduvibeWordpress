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
                            <h1 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Take Your Potential <br> to the Next Level</h1>
                            <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">Digital marketing courses designed by industry professionals who hire talent</p>
                            <div class="read-more-btn" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">View Courses <i class="icon-arrow-right-line-right"></i></a>
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
                            <div class="badge-inner"><span class="viewer">5K</span><span>Enrolled</span><span>Learner</span></div>
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



        <div class="sercice-area eduvibe-service-five service-wrapper-5 edu-section-gap bg-color-white padding-bottom-none">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
            <?php
            $services = [
                [ 'icon' => 'icon-Destination','title' => 'Demonstrable skills to impress employers' ],
                [ 'icon' => 'icon-Mind','title' => 'Learn-by-doing and create a portfolio' ],
                [ 'icon' => 'icon-Class','title' => 'Always instructor-led, live feedback' ]
            ];
            $delay = 150;
            foreach ( $services as $service ) : ?>
                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="<?php echo esc_html( $service['icon'] ); ?>"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><?php echo esc_html( $service['title'] ); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
            <?php $delay += 50; endforeach; ?>
                </div>
            </div>
        </div>



<!-- ==================== SERVICES ==================== -->
<div class="eduvibe-home-four-service edu-service-area edu-section-gap bg-color-white position-relative border-bottom-1">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center small" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <h2 class="title">Our industry experts have designed a marketing training course that pays itself off</h2>
                </div>
            </div>
        </div>
        <div class="row eduvibe-about-one-service g-5 mt--20">
            <?php
            $services = [
                [ 'icon' => 'icon-student-read', 'title' => 'Robert Half Salary Survey',  'bg' => 'shape-bg-1', 'desc' => 'Marketing professionals with certifications earn 43% more than those without.' ],
                [ 'icon' => 'icon-Pencil',     'title' => 'Robert Half Salary Survey',     'bg' => 'shape-bg-2', 'desc' => 'Marketing and creative roles salary growth outpaces the average.' ],
                [ 'icon' => 'icon-Fitness',        'title' => 'DMI CMO Survey',     'bg' => 'shape-bg-3', 'desc' => '87% of employers are more likely to hire canddiates with a digital marketing certification.' ]
            ];
            $delay = 150;
            foreach ( $services as $service ) : ?>
            <div class="col-lg-4 col-md-6 col-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-3 text-center <?php echo esc_attr( $service['bg'] ); ?> bg-grey">
                    <div class="inner">
                        <div class="icon"><a href="#"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i></a></div>
                        <div class="content">
                            <h3 class="title"><a href="#"><?php echo esc_html( $service['title'] ); ?></a></h6>
                            <p class="description"><?php echo esc_html( $service['desc'] ); ?></p>
                            <!-- <div class="read-more-btn">
                                <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                            </div> -->
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



    <!-- Start Video Area  -->
    <div class="edu-workshop-area eduvibe-home-three-video workshop-style-1 edu-section-gap bg-image bg-color-primary">
        <div class="container eduvibe-animated-shape">
            <div class="row gy-lg-0 gy-5 row--60 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="workshop-inner">
                        <div class="section-title text-white" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h3 class="title">Are you ready for a <br> marketing job?</h3>
                        </div>
                        <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Take a 10-minute Skill Assessment here to find out.</p>
                        <div class="read-more-btn" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <a class="edu-btn btn-white" href="#">Take FREE Skill Audit<i class="icon-arrow-right-line-right"></i></a> &nbsp; 
                            <a class="edu-btn btn-white" href="#">View All Courses<i class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail video-popup-wrapper">
                        <img class="radius-small w-100" src="<?php echo esc_url( NLA_URI . '/assets/images/videopopup/video-popup-bg-02.jpg' ); ?>" alt="About Image">
                    </div>
                </div>
            </div>
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-09-01.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-2"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-05.png' ); ?>" alt="Shape Thumb" /></div>
                <div class="shape-image shape-image-3"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-13-02.png' ); ?>" alt="Shape Thumb" /></div>
            </div>

        </div>
    </div>
    <!-- End Video Area  -->


<!-- ==================== COURSES CAROUSEL ==================== -->
<div class="edu-course-area eduvibe-home-two-course course-three-wrapper edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Our Courses</span>
                    <h3 class="title">Popular courses in our training areas</h3>
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
                    <p class="text-center"><?php esc_html_e( 'Exciting new courses launching soon.', 'next-level-academy' ); ?></p>
                    <?php endif; ?>
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




<!-- Start Service Area  -->
<div class="home-one-cat edu-service-area service-wrapper-1 edu-section-gap bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center medium" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Benefits of Training</span>
                    <h3 class="title">Why Train with The Next Level Academy?</h3>
                    <p class="description mb--0">We appreciate that you have a choice to train with anyone, so we are highlighting three signature Next Level Academy benefits that our graduates value.</p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--15">

            <?php
            $image=esc_url( NLA_URI . '/assets/images/category/category-01/category-01.jpg' );
            $services = [
                [ 'image' => $image, 'title' => 'Build & retain skills by running actual marketing campaigns', 'subtitle' => '','desc' => 'Most marketing courses tell you what to do; but our courses go further to show you HOW to do it, before you do it yourself. This is  experience proves to prospective employers that you can do it.' ],
                [ 'image' => $image, 'title' => 'Flexible training options to suit all learners','subtitle' => '', 'desc' => 'Catering to all situations and learning preferences, you can choose any combination of options: Online vs physical classroom, Course duration ranging from 12-month diploma to one-day workshops, Full-time vs part-time, Group classes vs one-on-one apprenticeship.' ],
                [ 'image' => $image, 'title' => 'Designed & delivered by industry professionals for the workplace','subtitle' => '', 'desc' => 'We recruit our trainers for their years of experience, which includes hiring, managing, and mentoring early-career professionals; so their courses are designed to showcase your skills and hard work to employers through a portfolio of marketing plans, creative work, and advertising campaigns that will differentiate you from other job candidates.' ]
            ];
            $delay = 150;
            foreach ( $services as $service ) : ?>
            <!-- Start Service Card  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="service-card service-card-1 radius-small">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="<?php echo esc_url( NLA_URI . '/assets/images/course/course-01/course-01.jpg' ); ?>" alt="Image" />
                            </a>
                        </div>
                        <div class="content">
                            <?php if(!empty($service['subtitle'])){?>
                                <span class="course-total"><?php echo esc_html( $service['subtitle'] ); ?></span>
                            <?php } ?>
                            <h6 class="title"><a href="#"><?php echo esc_html( $service['title'] ); ?></a></h6>
                            <p class="description"><?php echo esc_html( $service['desc'] ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Service Card  -->
            <?php $delay += 50; endforeach; ?>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-01.png' ); ?>" alt="Image" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-08.png' ); ?>" alt="Image" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-01.png' ); ?>" alt="Image" />
            </div>
            <div class="shape-image shape-image-4">
                <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-02.png' ); ?>" alt="Image" />
            </div>
        </div>

    </div>
</div>
<!-- End Service Area  -->


<!-- ==================== TESTIMONIALS ==================== -->
<div id="testimonials" class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">TESTIMONIALS</span>
                    <h3 class="title">What Learners are saying about Our Course</h3>
                </div>
            </div>
        </div>
        <div class="edu-testimonial-activation testimonial-item-3 mt--40 edu-slick-button">
            <?php
            $testimonials = [
                [ 'title' => 'Great value', 'img' => 'client-03.png', 'name' => 'Stive Marlone',    'role' => 'Web Developer',     'text' => 'This course is worth the money because it\'s an actual trainer running the online course and demonstrating how to run a campaign, instead of just pre-recorded videos and quizzes.' ],
                [ 'title' => 'Intense', 'img' => 'client-04.png', 'name' => 'James Carlson',    'role' => 'UI/UX Designer',    'text' => 'You will DEFINITELY learn a lot from this course, but be prepared…..it\'s intense because you actually have to do the work during the sessions. Trust me, this is not one of those online classes where you can just leave it on and walk away.' ],
                [ 'title' => 'Better than uni', 'img' => 'client-01.png', 'name' => 'Nancy Phipps',     'role' => 'Digital Marketer',  'text' => 'I should have done the diploma instead of uni! After 3 years at uni majoring in marketing, I didn\'t learn anything useful and wasn\'t confident in applying for jobs. But after just one year in this course, I learned so much and I even scored an internship from this. Thanks!' ],
                [ 'title' => 'Learn from real pros', 'img' => 'client-02.png', 'name' => 'Adam Smith',       'role' => 'Web Developer',     'text' => 'I\'ve attended a few courses before Next Level Academy, and many can teach you what you have to do and why you have to do it, but this course actually teaches you how to do it. The trainers have actual experience and are marketing experts, so you feel like you are being mentored by someone who can help you in your career.' ],
            ];
            foreach ( $testimonials as $t ) : ?>
            <div class="testimonial-card-box">
                <div class="inner">
                    <?php
                    /*<div class="client-info">
                        <div class="thumbnail">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/testimonial/testimonial-04/' . $t['img'] ); ?>" alt="Client Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><?php echo esc_html( $t['name'] ); ?></h6>
                            <span class="designation"><?php echo esc_html( $t['role'] ); ?></span>
                        </div>
                    </div>
                    */
                    ?>
                    <h5 class="title"><?php echo esc_html( $t['title'] ); ?></h5>
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
                        <h3 class="title">Our Learners' <br> Experience With Us</h3>
                        <p class="description">Watch a preview of what some of our learners and graduates have to say about their experience training with us.</p>
                    </div>
                    <div class="feature-list-wrapper mt--10">
                        <?php
                        $features = [
                            [ 'icon' => 'icon-bar-chart-2-line',   'title' => 'NLA Graduate Survey',       'delay' => 150, 'desc'=>'88% of graduates from our Certification courses have either secured an internship, job, or promotion in the area of training.' ],
                            [ 'icon' => 'icon-Hand---Book',  'title' => 'NLA Learner Survey',  'delay' => 200,    'desc'=>'98% of our learners agree that the training develops skills to make them more employable.' ],
                        ];
                        foreach ( $features as $feat ) : ?>
                        <div class="feature-list mt--35 mt_mobile--15" data-sal-delay="<?php echo esc_attr( $feat['delay'] ); ?>" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon"><i class="<?php echo esc_attr( $feat['icon'] ); ?>"></i></div>
                            <div class="content">
                                <h6 class="title"><?php echo esc_html( $feat['title'] ); ?></h6>
                                <p><?php echo esc_html( $feat['desc'] ); ?></p>
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
                        <a href="#youtube" class="video-play-btn with-animation position-to-top btn-large video-popup-activation eduvibe-video-play-icon color-secondary">
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



<!-- ==================== Team Area ==================== -->
<div class="edu-elements-area edu-section-gap eduvibe-bg-image">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Skilled Instructor</span>
                    <h3 class="title">Train With Industry Experts Who Can 'Walk The Talk'</h3>
                    <p class="description">Next Level Academy's Trainers and Assessors are selected only if they have current and relevant work experience in the course content. Many of them have also hired, managed, and mentored early-career professionals; so their focus in training is 100% on developing the knowledge and skills to improve performance in the workplace. Many of them are also certified Workplace Mentors, under the supervision of a nationally certified Trainer and Assessor.</p>
                </div>
            </div>
        </div>
        <div class="row row--20">

            <?php
            $services = [
                [ 'name' => 'Kenneth Yap', 'role' => 'Lead Trainer & Assessor', 'linkedin' => 'https://www.linkedin.com/in/kenneth-yap-aa4b909/','content'=>'Kenneth Yap\'s marketing career spans nearly 30 years, with both client-side and agency experience across several countries including Australia, United States, Malaysia, and Singapore. He has led projects and teams in market research, brand strategy, new product development, e-commerce, and retail marketing. His training and mentoring approach is demonstrative, pragmatic, detail-oriented; and believes that the best learning comes from mistakes and failures. He is a nationally certified Trainer and Assessor.'],
                [ 'name' => 'Mojib Temuri', 'role' => 'Trainer & Assessor', 'linkedin' => 'https://www.linkedin.com/in/mojibtemuri/','content'=>'Mojib is enthusiastic and passionate about anything to do with digital marketing. He is currently the Marketing Coordinator for a landscaping company, giving him specialised experience in e-commerce, SEO, and B2B marketing. His training and mentoring approach is friendly, learner-centric, and hands-on; and he believes that the most important marketing trait is a curiosity about the customer persona. He is a certified Workplace Mentor. '],
                [ 'name' => 'Nishanth Lakshmanantham', 'role' => 'Specialist Trainer & Assessor', 'linkedin' => 'https://www.linkedin.com/in/nishanthl/','content'=>'Nish founded and runs Zlick Digital, a digital marketing agency based in Perth that specialises in web design, SEO, and Google Ads. An engineer by training, he specialises in SEO strategy and Google Analytics because of its clear link to leads and sales. His training and mentoring approach is systematic and big-picture thinking; and he believes that good marketing starts with sound commercial thinking. He is a certified Workplace Mentor.'],
            ];
            $delay = 150;
            foreach ( $services as $service ) : ?>
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--25" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                        <div class="edu-instructor">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#!">
                                        <img src="<?php echo esc_url( NLA_URI . '/assets/images/instructor/instructor-01/instructor-1.jpg' ); ?>" alt="Team Images">
                                    </a>
                                </div>
                                <div class="team-share-info">
                                    <a class="linkedin" href="<?php echo esc_html( $service['linkedin'] ); ?>"><i class="icon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="edu-instructor-info">
                            <h5 class="title"><a href="#!"><?php echo esc_html( $service['name'] ); ?></a></h5>
                            <span class="desc"><?php echo esc_html( $service['role'] ); ?></span>
                            <!-- <p><?php echo esc_html( $service['content'] ); ?></p> -->
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            <?php $delay += 50; endforeach; ?>
        </div>
    </div>
</div>
<!-- ==================== Team Area ==================== -->





<!-- ==================== Certificate ==================== -->
        <div class="landing-demo-features edu-section-gap bg-color-white" id="features">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pre-section-title text-center mb--20">
                            <h3 class="title">Software & Tools You Will Learn To Master</h3>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mt--10 row-cols-2 row-cols-md-3 row-cols-lg-5">

                    <?php
                    $services = [
                        [ 'title' => 'Google Analytics'],
                        [ 'title' => 'Google Search Console (SEO)'],
                        [ 'title' => 'Ahrefs (SEO)'],
                        [ 'title' => 'Meta Business Suite (Social Media Marketing)'],
                        [ 'title' => 'Mailchimp (EDM)']
                    ];
                    $delay = 150;
                    foreach ( $services as $service ) : ?>
                    <!-- Start Single Demo  -->
                    <div class="col" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                        <div class="demo-feature mt--20">
                            <div class="inner">
                                <div class="icon">
                                    <img src="<?php echo esc_url( NLA_URI . '/assets/images/landing-demo/feature-01.png' ); ?>" alt="Preview" />
                                </div>
                                <h6 class="title"><?php echo esc_html( $service['title'] ); ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Demo  -->
                    <?php $delay += 50; endforeach; ?>
                </div>

                <div class="shape-wrapper">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-04-08.png' ); ?>" alt="Shape" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-02.png' ); ?>" alt="Shape" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-11-10.png' ); ?>" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="landing-demo-features edu-section-gap bg-color-white padding-top-none" id="features">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pre-section-title text-center mb--20">
                            <h3 class="title">Our Partner Brands and Employers</h3>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mt--10 row-cols-2 row-cols-md-3 row-cols-lg-5">

                    <?php
                    $services = [
                        [ 'title' => 'The Marketing Interchange (Retail Marketing)'],
                        [ 'title' => 'Shunt (Sports Marketing)'],
                        [ 'title' => 'Google (Search Ads Certification)'],
                        [ 'title' => 'Meta (Digital Marketing Associate Certification)'],
                        [ 'title' => 'Google Analytics (Analytics Certification)']
                    ];
                    $delay = 150;
                    foreach ( $services as $service ) : ?>
                    <!-- Start Single Demo  -->
                    <div class="col" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                        <div class="demo-feature mt--20">
                            <div class="inner">
                                <div class="icon">
                                    <img src="<?php echo esc_url( NLA_URI . '/assets/images/landing-demo/feature-01.png' ); ?>" alt="Preview" />
                                </div>
                                <h6 class="title"><?php echo esc_html( $service['title'] ); ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Demo  -->
                    <?php $delay += 50; endforeach; ?>
                </div>

                <div class="shape-wrapper">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-2">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-02.png' ); ?>" alt="Shape" />
                        </div>
                        <div class="shape-image shape-image-1">
                            <img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-03-02.png' ); ?>" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ==================== Certificate ==================== -->






<!-- ==================== Training ==================== -->
        <div class="landing-demo-features edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pre-section-title text-center mb--20">
                            <h3 class="title">How We Are Transforming Training in Digital Marketing</h3>
                            <p class="description">Watch how we approach training and assessment by starting with the end in mind. Training courses are developed with only one thing in mind: preparing our graduates to succeed in the workplace. Our Course Designers are not just practitioners and employers in marketing, but they also work with industry experts to design the course with all the necessary knowledge and skills required for that role, and only those things, and nothing else to waste your time. Our Trainers and Assessors are nationally accredited mentors with real-world experience and expertise in their areas of training.</p>
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
                                    <a href="#youtube" class="video-play-btn with-animation position-to-top video-popup-activation btn-secondary-color size-80">
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
                    <div class="shape-image shape-image-4"><img src="<?php echo esc_url( NLA_URI . '/assets/images/shapes/shape-07-01.png' ); ?>" alt="Shape Thumb" /></div>
                </div>
            </div>
        </div>
<!-- ==================== Training ==================== -->


<!-- ==================== Listing ==================== -->
        <div class="eduvibe-home-five-about edu-about-area about-style-6 edu-section-gap eduvibe-bg-image video-gallery-overlay-area">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center text-center">
                    <div class="col-xl-12 col-lg-12 offset-xl-12">
                        <div class="inner mt_md--40 mt_sm--20">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <h3 class="title">Our Training Philosophy and Experience</h3>
                            </div>
                            <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">All of our training courses share the same formula and sequence, which consists of the following steps: </p>
                            <div class="feature-list-wrapper fullwidth" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-list"><i class="icon-Star"></i>Key concepts of the training course are introduced and accompanied by context of the bigger picture.</div>
                                <div class="feature-list"><i class="icon-Star"></i>All the knowledge and skills for the training course are listed and explained. </div>
                                <div class="feature-list"><i class="icon-Star"></i>Learners are shown what best practices and a good finished product looks like.</div>
                                <div class="feature-list"><i class="icon-Star"></i>Learners are assessed on their understanding and accompanied by trainer feedback. </div>
                                <div class="feature-list"><i class="icon-Star"></i>Trainer performs the skills in a demonstration while explaining the process and answering learners' questions.</div>
                                <div class="feature-list"><i class="icon-Star"></i>Learners replicate the demonstration with guidance from the trainer.</div>
                                <div class="feature-list"><i class="icon-Star"></i>Finally, learners are assessed on their performance and evidence of their skill and accompanied by trainer feedback.</div>
                            </div>

                            <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Download a sample lesson plan here to see how training works at Next Level Academy.</p>
                            <div class="read-more-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="#">Download Now<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ==================== Listing ==================== -->


<?php /*

<!-- ==================== LATEST BLOG ==================== -->
<div class="eduvibe-home-four-blog bg-image edu-blog-area edu-section-gap  ">
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

*/ ?>

<?php get_footer(); ?>
