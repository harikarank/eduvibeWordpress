<?php get_header(); ?>

<!-- ==================== BREADCRUMB ==================== -->
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title"><?php post_type_archive_title(); ?></h3>
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

<!-- ==================== COURSE GRID ==================== -->
<div class="edu-course-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5 mt--10">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                    $category  = get_the_term_list( get_the_ID(), 'course_category', '', ', ' );
                    $lessons   = nla_course_meta( 'lessons', '0 Lessons' );
                    $price     = nla_course_meta( 'price', '' );
                    $old_price = nla_course_meta( 'old_price', '' );
                    $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium_large' ) : esc_url( NLA_URI . '/assets/images/course/course-01/course-01.jpg' );
                    ?>
                    <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i><i class="icon-Star"></i><i class="icon-Star"></i><i class="icon-Star"></i><i class="icon-Star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hover Card -->
                            <div class="card-hover-action">
                                <div class="hover-content">
                                    <div class="content-top">
                                        <?php if ( $category ) : ?>
                                        <div class="top-status-bar">
                                            <span class="eduvibe-status status-03"><?php echo wp_kses_post( $category ); ?></span>
                                        </div>
                                        <?php endif; ?>
                                        <div class="top-wishlist-bar">
                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                        </div>
                                    </div>
                                    <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <p class="description"><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <?php if ( $price ) : ?>
                                    <div class="price-list price-style-02">
                                        <div class="price current-price"><?php echo esc_html( $price ); ?></div>
                                        <?php if ( $old_price ) : ?><div class="price old-price"><?php echo esc_html( $old_price ); ?></div><?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="hover-bottom-content">
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
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-white" href="<?php the_permalink(); ?>">Enroll Now<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="edu-pagination">
                            <?php
                            $pagination = paginate_links( [
                                'type'    => 'array',
                                'prev_text' => '<i class="ri-arrow-drop-left-line"></i>',
                                'next_text' => '<i class="ri-arrow-drop-right-line"></i>',
                            ] );
                            if ( $pagination ) {
                                foreach ( $pagination as $page ) {
                                    echo '<li>' . wp_kses_post( $page ) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>

            <?php else : ?>
                <div class="col-12">
                    <p><?php esc_html_e( 'No courses found.', 'next-level-academy' ); ?></p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<!-- ==================== END COURSE GRID ==================== -->

<?php get_footer(); ?>
