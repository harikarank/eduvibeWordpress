<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
$category  = get_the_term_list( get_the_ID(), 'course_category', '', ', ' );
$lessons   = nla_course_meta( 'lessons', '' );
$price     = nla_course_meta( 'price', '' );
$old_price = nla_course_meta( 'old_price', '' );
$duration  = nla_course_meta( 'duration', '' );
$level     = nla_course_meta( 'level', '' );
$language  = nla_course_meta( 'language', '' );
?>



<!-- ==================== HERO BANNER ==================== -->
<div class="slider-area banner-style-4 bg-image style-hero">
    <div class="wrapper d-flex align-items-center home-four-banner-wrapper">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="inner">
                        <div class="content text-start">
                            <span class="pre-title">Google Ads</span>
                            <h1 class="title">
                            Search Engine Marketing Fundamentals (SEO + PPC)</h1>
                            <p class="description">
                                Learn the fundamentals of SEO and Google Search Ads through hands-on training, real website optimisation, and live campaign setup.</p>
                            <div class="btn-group-vertical">
                                <a class="edu-btn left-button" href="#">Download Brochure
                                    <i class="icon-arrow-right-line-right"></i>
                                </a>
                                <a class="edu-btn bg-white right-button" href="#demo">Book Now
                                    <i class="icon-arrow-right-line-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="banner-image">
                        <div class="thumbnail">
                            <?php if (has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large', [
                                        'class' => 'landing-banner-img',
                                        'alt' => get_the_title()
                                    ] ); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url( NLA_URI . '/assets/images/banner/banner-04/banner-03.png' ); ?>" alt="Banner Images" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END HERO ==================== -->



<!-- ==================== COURSE DETAILS ==================== -->



        <div class="edu-course-details-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="course-details-content">

                            <div class="content-block">
                                <h3 class="title code">Course Code: <span>MKTG530C1</span></h3>
                                <span class="pre-title">Google Ads</span>
                                <h4>Search Engine Optimization (SEO) and Search Engine Marketing (SEM)</h4>
                            </div>


                            <div class="course-details-card">
                                <div class="course-content">
                                    <span class="pre-title color">Course Overview</span>
                                    <h5>Learn the top SEO tips from Google’s playbook to top-rank and drive traffic to your website</h5>
                                    <p>This 5-day short course is the best starter course for Search Engine Optimisation (SEO), by examining best practices and process, then implementing it on a website. This course will also cover the basics of Google Search Ads or Pay-Per-Click (PPC) ad campaigns, by setting up and launching an actual campaign. It starts with an introduction to search engines and how they work, followed by the main components of SEO and the attributes and examples of effective SEO. After a demonstration by the trainer, learners will then identify and implement On-page SEO fixes on a training website. Learners will create and publish SEO-friendly content for a blog on a training website, then finally, they will try their hand at creating their own Google Search Ads campaign. </p>
                                </div>
                            </div>


                                <div class="course-content  mt--40">
                                    <div class="edu-accordion-02" id="accordionExample1">
                                        <div class="edu-accordion-item">
                                            <div class="edu-accordion-header" id="headingOne">
                                                <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    "WHY should I do this course" displays Course Purpose
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                <div class="edu-accordion-body">
                                                    <p>For many businesses, the main source of sales leads is the search engine channel when prospective customers search on Google for products and services. Websites appearing at the very top of search results command the largest share of purchases, but this requires considerable planning and technical skills because the competition for these spots is high. As a result, this area of marketing - lead generation - pays very well, and would be suitable for anyone who wants the challenge of acquiring specialised skills to leapfrong their peers. The 1-week short course is the perfect introduction to Search Engine Optimisation (SEO) and Google Search Ads (PPC) and is the only one in Australia where you'll be actually creating SEO-friendly content and running Google Ad campaigns.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edu-accordion-item">
                                            <div class="edu-accordion-header" id="headingTwo">
                                                <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    "WHO is this course for" displays Course Target
                                                </button>
                                            </div>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                                <div class="edu-accordion-body">
                                                    <p>The short course is designed for early-career marketing professionals to want to explore SEO as a potential specialisation in digital marketing. It is also a perfect fit for business owners who want to drive more leads through content marketing, SEO, and Google Ads. High school graduates and university students (with additional support) would also gain valuable skills and portfolio that they won't get at TAFE or university. This course comes with a professional certificate, and earns credit towards a Micro-credential in SEO and Search Engine Marketing (SEM).</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edu-accordion-item">
                                            <div class="edu-accordion-header" id="headingThree">
                                                <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    "WHAT skills will I learn" displays a numbered list of Course Skills 1, Course Skills 2, Course Skills 3, Course Skills 4, Course Skills 5
                                                </button>
                                            </div>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                                <div class="edu-accordion-body">
                                                    <p>The skills developed in this course includes: Planning and producing SEO-friendly content for websites, Identifying and fixing bugs on On-page SEO, Implementing On-page SEO elements such as tags and schema mark-ups, Using Google Search Console, WordPress and SEO plugins to implement On-page SEO, Create Google Search Ad (PPC) campaigns.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edu-accordion-item">
                                            <div class="edu-accordion-header" id="headingFour">
                                                <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    "HOW will this help my career" displays Course Impact
                                                </button>
                                            </div>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                                <div class="edu-accordion-body">
                                                    <p>In the SEO short course, learners will plan, create, and publish content on websites and social media channels. Learners will also learn to use the industry standard tools of the trade to implement On-page SEO, including Ahrefs, Google Search Console, WordPress, and Google Analytics. The skills and portfolio developed in this course is equivalent to six months of work experience in an entry-level marketing position.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="edu-accordion-item">
                                            <div class="edu-accordion-header" id="headingFive">
                                                <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    "WHEN will this course pay off" displays Course Commitment
                                                </button>
                                            </div>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample1">
                                                <div class="edu-accordion-body">
                                                    <p>The SEO short course is done full-time in five consecutive days, providing sufficient time to immerse in the more technical details of SEO. This is an excellent foundation for taking on basic SEO tasks at work. It also earns you one-third of the credits required for an industry micro-credential in SEO and SEM and puts graduates in an advantageous position for a SEO specialist role, which pays up to 35% higher than the average salary of a marketing professional.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <div class="course-details-card   mt--40">
                                <div class="course-content">
                                    <h3 class="pre-title color">Course Benefit</h3>
                                    <div class="feature-style-2 fullwidth">
                                        <div class="single-feature"><div class="icon">1</div>
                                            <div class="content">
                                                <h6 class="feature-title">100% more practical and job-ready than uni</h6>
                                            </div>
                                        </div>
                                        <div class="single-feature"><div class="icon">2</div>
                                            <div class="content">
                                                <h6 class="feature-title">Learners are shown HOW to do marketing work before actually doing it themselves</h6>
                                            </div>
                                        </div>
                                        <div class="single-feature"><div class="icon">3</div>
                                            <div class="content">
                                                <h6 class="feature-title">Taught by experts who actually ‘walk the talk’</h6>
                                            </div>
                                        </div>
                                        <div class="single-feature"><div class="icon">4</div>
                                            <div class="content">
                                                <h6 class="feature-title">Course includes portfolio, experience, and certificate to boost your CV</h6>
                                            </div>
                                        </div>
                                        <div class="single-feature"><div class="icon">5</div>
                                            <div class="content">
                                                <h6 class="feature-title">Real practical skills that you can replicate at workplace</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="eduvibe-sidebar course-details-sidebar">
                            <div class="inner">
                                <div class="eduvibe-widget">
                                    <div class="video-area">
                                        <div class="thumbnail video-popup-wrapper">
                                            <img class="radius-small w-100" src="<?php echo esc_url( NLA_URI . '/assets/images/course/video-bg/course-02.jpg' ); ?>" alt="Course Images">
                                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn position-to-top video-popup-activation">
                                                <span class="play-icon course-details-video-popup"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="eduvibe-widget-details mt--35">
                                        <div class="widget-content">
                                            <h4>Best Short Course for SEO</h4>
                                            <ul>
                                                <li><span><i class="icon-calendar-2-line"></i> Start Date</span><span>22/7/2026</span></li>
                                                <li><span><i class="icon-time-line"></i> Duration</span><span>5 days</span></li>
                                                <li><span><i class="icon-artboard-line"></i> Workload</span><span>40 hours/week</span></li>
                                                <li><span><i class="icon-book-line"></i> Course Type</span><span>Short course</span></li>
                                                <li><span><i class="icon-award-line"></i> Certification</span><span>Professional</span></li>
                                                <li><span><i class="icon-user-2-line_tie"></i> Delivery Mode</span><span>In-person</span></li>
                                                <li><span><i class="icon-map-pin-line"></i> Delivery Location</span><span>Perth</span></li>
                                                <li><span><i class="icon-draft-line"></i> Schedule</span><span>Intense; <br>8 hours/day;<br> 5 days</span></li>
                                            </ul>
                                            <div class="discountbox">
                                                <div class="discount-header">
                                                    Special Offer
                                                </div>

                                                <div class="discount-row">
                                                    <span class="label">List Fee</span>
                                                    <span class="value">$2,250</span>
                                                </div>

                                                <div class="discount-row">
                                                    <span class="label">Discount Name</span>
                                                    <span class="value highlight">Early Bird Offer</span>
                                                </div>

                                                <div class="discount-row">
                                                    <span class="label">Discount Amount</span>
                                                    <span class="value discount">-$750</span>
                                                </div>

                                                <div class="discount-row">
                                                    <span class="label">Discount Rate</span>
                                                    <span class="value discount">33%</span>
                                                </div>

                                                <div class="discount-row total">
                                                    <span class="label">Sale Price</span>
                                                    <span class="value final-price">$1,500</span>
                                                </div>
                                            </div>
                                            <div class="read-more-btn mt--15">
                                                <a class="edu-btn w-100 text-center" href="#">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--row g-5-->

            </div>
        </div><!--edu-course-details-area-->







<!-- ==================== TESTIMONIALS ==================== -->
<div id="testimonials" class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image padding-top-none">
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










<?php /*

<section class="edu-course-details-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">

            <!-- Main Content -->
            <div class="col-xl-8 col-lg-7">
                <div class="course-details-content">
                    <?php if ( $category ) : ?>
                    <div class="status-group mb--20">
                        <span class="eduvibe-status status-03"><?php echo wp_kses_post( $category ); ?></span>
                    </div>
                    <?php endif; ?>

                    <h3 class="title"><?php the_title(); ?></h3>
                    <p class="description"><?php the_excerpt(); ?></p>

                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="thumbnail video-popup-wrapper mb--30">
                        <?php the_post_thumbnail( 'large', [ 'class' => 'w-100 radius-small' ] ); ?>
                    </div>
                    <?php endif; ?>

                    <div class="course-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar / Enroll Card -->
            <div class="col-xl-4 col-lg-5">
                <div class="course-details-card">
                    <div class="inner">
                        <?php if ( $price ) : ?>
                        <div class="price-list price-style-02 mb--20">
                            <div class="price current-price"><?php echo esc_html( $price ); ?></div>
                            <?php if ( $old_price ) : ?><div class="price old-price"><?php echo esc_html( $old_price ); ?></div><?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <a class="edu-btn w-100 text-center mb--20" href="#">
                            <?php esc_html_e( 'Enroll Now', 'next-level-academy' ); ?> <i class="icon-arrow-right-line-right"></i>
                        </a>

                        <?php if ( $lessons || $duration || $level || $language ) : ?>
                        <ul class="course-meta-info">
                            <?php if ( $lessons ) : ?><li><i class="icon-file-list-3-line"></i><?php echo esc_html( $lessons ); ?></li><?php endif; ?>
                            <?php if ( $duration ) : ?><li><i class="icon-time-line"></i><?php echo esc_html( $duration ); ?></li><?php endif; ?>
                            <?php if ( $level ) : ?><li><i class="icon-bar-chart-2-line"></i><?php echo esc_html( $level ); ?></li><?php endif; ?>
                            <?php if ( $language ) : ?><li><i class="icon-global-line"></i><?php echo esc_html( $language ); ?></li><?php endif; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div><!-- .row -->
    </div>
</section>

<?php */ ?>
<!-- ==================== END COURSE DETAILS ==================== -->

<?php endwhile; ?>

<?php get_footer(); ?>
