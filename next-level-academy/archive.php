<?php get_header(); ?>

<!-- ==================== BREADCRUMB ==================== -->
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title"><?php esc_html_e( 'Blog', 'next-level-academy' ); ?></h3>
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

<!-- ==================== BLOG GRID ==================== -->
<div class="edu-elements-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="row g-5">

                    <?php if ( have_posts() ) : ?>

                        <?php
                        $delay = 150;
                        while ( have_posts() ) : the_post();
                            $cats      = get_the_category();
                            $cat_name  = $cats ? $cats[0]->name : 'Education';
                            $cat_link  = $cats ? get_category_link( $cats[0]->term_id ) : '#';
                            $thumb_url = has_post_thumbnail()
                                ? get_the_post_thumbnail_url( null, 'medium_large' )
                                : esc_url( NLA_URI . '/assets/images/blog/post-01/post-01.jpg' );
                        ?>
                        <div class="col-lg-4 col-md-6 col-12" data-sal-delay="<?php echo esc_attr( $delay ); ?>" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-blog blog-type-2 radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="status-group">
                                            <a href="<?php echo esc_url( $cat_link ); ?>" class="eduvibe-status status-05">
                                                <i class="icon-price-tag-3-line"></i> <?php echo esc_html( $cat_name ); ?>
                                            </a>
                                        </div>
                                        <h5 class="title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>
                                        <div class="blog-card-bottom">
                                            <ul class="blog-meta">
                                                <li><i class="icon-calendar-2-line"></i><?php echo get_the_date( 'd M, Y' ); ?></li>
                                            </ul>
                                            <div class="read-more-btn">
                                                <a class="btn-transparent" href="<?php the_permalink(); ?>">
                                                    Read More<i class="icon-arrow-right-line-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $delay += 50;
                        endwhile;
                        ?>

                        <!-- Pagination -->
                        <div class="col-lg-12 mt--30">
                            <nav>
                                <ul class="edu-pagination">
                                    <?php
                                    $pages = paginate_links( [
                                        'type'      => 'array',
                                        'prev_text' => '<i class="ri-arrow-drop-left-line"></i>',
                                        'next_text' => '<i class="ri-arrow-drop-right-line"></i>',
                                    ] );
                                    if ( $pages ) {
                                        foreach ( $pages as $page ) {
                                            echo '<li>' . wp_kses_post( $page ) . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>

                    <?php else : ?>
                        <div class="col-12">
                            <p><?php esc_html_e( 'No blog posts found.', 'next-level-academy' ); ?></p>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END BLOG GRID ==================== -->

<?php get_footer(); ?>
