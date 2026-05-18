<?php get_header(); ?>

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
    </div>
</div>
<!-- ==================== END BREADCRUMB ==================== -->

<!-- ==================== PAGE CONTENT ==================== -->
<section class="edu-page-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2 class="title mb--30"><?php the_title(); ?></h2>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- ==================== END PAGE CONTENT ==================== -->

<?php get_footer(); ?>
