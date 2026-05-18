<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( NLA_URI . '/assets/images/favicon.png' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="main-wrapper">

    <!-- ==================== HEADER ==================== -->
    <header class="edu-header disable-transparent header-sticky">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                echo '<img class="logo-light" src="' . esc_url( NLA_URI . '/assets/images/logo/logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
                            }
                            ?>
                        </a>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <?php
                        wp_nav_menu( [
                            'theme_location' => 'primary',
                            'menu_class'     => 'mainmenu',
                            'container'      => false,
                            'walker'         => new NLA_Nav_Walker(),
                            'fallback_cb'    => function() {
                                echo '<ul class="mainmenu">
                                    <li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>
                                    <li><a href="' . esc_url( home_url( '/about' ) ) . '">About Us</a></li>
                                    <li><a href="' . esc_url( home_url( '/courses' ) ) . '">Our Product</a></li>
                                    <li><a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a></li>
                                    <li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact Us</a></li>
                                </ul>';
                            },
                        ] );
                        ?>
                    </nav>
                </div>

                <!-- Enroll Now + Hamburger -->
                <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="header-menu-bar">
                            <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                                <a class="edu-btn btn-medium header-purchase-btn" href="<?php echo esc_url( home_url( '/courses' ) ); ?>">Enroll Now</a>
                            </div>
                        </div>
                        <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                            <div class="hamberger">
                                <button class="white-box-icon hamberger-button">
                                    <i class="ri-menu-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== MOBILE MENU ==================== -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( NLA_URI . '/assets/images/logo/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_class'     => 'mainmenu',
                'container'      => false,
                'walker'         => new NLA_Nav_Walker(),
                'fallback_cb'    => function() {
                    echo '<ul class="mainmenu">
                        <li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>
                        <li><a href="' . esc_url( home_url( '/about' ) ) . '">About Us</a></li>
                        <li><a href="' . esc_url( home_url( '/courses' ) ) . '">Our Product</a></li>
                        <li><a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a></li>
                        <li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact Us</a></li>
                    </ul>';
                },
            ] );
            ?>
        </div>
    </div>
    <!-- ==================== END MOBILE MENU ==================== -->
