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

<!-- ==================== BREADCRUMB ==================== -->
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title"><?php the_title(); ?></h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'next-level-academy' ); ?></a></li>
                            <li class="separator"><i class="ri-arrow-right-s-line"></i></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'course' ) ); ?>"><?php esc_html_e( 'Courses', 'next-level-academy' ); ?></a></li>
                            <li class="separator"><i class="ri-arrow-right-s-line"></i></li>
                            <li class="breadcrumb-item active"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END BREADCRUMB ==================== -->

<!-- ==================== COURSE DETAILS ==================== -->
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
<!-- ==================== END COURSE DETAILS ==================== -->

<?php endwhile; ?>

<?php get_footer(); ?>
