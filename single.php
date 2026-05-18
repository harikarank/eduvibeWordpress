<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
$cats     = get_the_category();
$cat_name = $cats ? $cats[0]->name : '';
$cat_link = $cats ? get_category_link( $cats[0]->term_id ) : '#';
$tags     = get_the_tags();
$prev     = get_previous_post();
$next     = get_next_post();
?>

<!-- ==================== BREADCRUMB ==================== -->
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title"><?php esc_html_e( 'Blog Details', 'next-level-academy' ); ?></h3>
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

<!-- ==================== BLOG DETAILS ==================== -->
<div class="edu-blog-details-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="blog-details-1 style-variation3">

                    <!-- Top: Title + Category/Date row + Featured Image -->
                    <div class="content-blog-top">
                        <h4 class="title"><?php the_title(); ?></h4>

                        <div class="content-status-top d-flex flex-wrap justify-content-between mb--30 align-items-center">
                            <?php if ( $cat_name ) : ?>
                            <div class="status-group mt_sm--10">
                                <a href="<?php echo esc_url( $cat_link ); ?>" class="eduvibe-status status-05 color-primary w-600">
                                    <?php echo esc_html( strtoupper( $cat_name ) ); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                            <ul class="blog-meta mt_sm--10">
                                <li><i class="icon-calendar-2-line"></i><?php echo get_the_date( 'M d, Y' ); ?></li>
                            </ul>
                        </div>

                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="thumbnail block-alignwide">
                            <?php the_post_thumbnail( 'large', [ 'class' => 'radius-small w-100 mb--30' ] ); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- End Top -->

                    <!-- Main Content -->
                    <div class="blog-main-content">
                        <?php the_content(); ?>
                    </div>
                    <!-- End Main Content -->

                    <!-- Tags -->
                    <?php if ( $tags ) : ?>
                    <div class="blog-tag-and-share mt--50">
                        <div class="blog-tag">
                            <div class="tag-list bg-shade">
                                <?php foreach ( $tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                                    <?php echo esc_html( $tag->name ); ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- End Tags -->

                    <!-- Prev / Next Navigation -->
                    <?php if ( $prev || $next ) : ?>
                    <div class="blog-pagination">
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <?php if ( $prev ) : ?>
                                <div class="blog-pagination-list style-variation-2">
                                    <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>">
                                        <i class="ri-arrow-left-s-line"></i>
                                        <span><?php echo esc_html( get_the_title( $prev->ID ) ); ?></span>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-lg-6">
                                <?php if ( $next ) : ?>
                                <div class="blog-pagination-list style-variation-2 next-post">
                                    <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>">
                                        <span><?php echo esc_html( get_the_title( $next->ID ) ); ?></span>
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- End Prev / Next -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==================== END BLOG DETAILS ==================== -->

<?php endwhile; ?>

<?php get_footer(); ?>
