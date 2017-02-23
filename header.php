<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>
    <div class="load-overlay"></div>
    <div class="hidden" hidden>
        <?php get_template_part( 'images/sprite.svg' ); ?>
    </div>
    <div class="contact-retailer-modal" style="display: none;">
        <div class="forms sub-pages-content small-form">
            <i class="material-icons close-c-modal">close</i>
            <h2>Boka en <span>kostnadsfri</span> konsultation</h2>

            <?php 
            if( is_page('aterforsaljare')){
                echo do_shortcode('[contact-form-7 id="191" title="contact-retailer"]') ;
            }else{
                echo do_shortcode('[contact-form-7 id="189" title="contact-modal"]') ;
            }
             ?>
        </div>
    </div>
    <div class="dark-overlay"></div>
    <div class="contact-menu">
        <i class="material-icons close-c-menu">close</i>
        <div class="contact-menu-content">
            <a href="<?php echo esc_url(home_url('/offertforfragan'))?>">Offertförfrågan</a>
            <a href="<?php echo esc_url(home_url('/aterforsaljare'))?>">Återförsäljare</a>
            <a href="<?php echo esc_url(home_url('/guider'))?>">Artiklar</a>
            <div class="contact-menu-info">
                <a href="#"><i class="material-icons">local_phone</i> 010-141 88 66</a>
                <a href="mailto:info@svarab.se"><i class="material-icons">email</i> info@svarab.se</a>
            </div>
        </div>
    </div>
    <?php $walker = new Menu_With_Description; ?>
    <header>
        <div class="header-logo">
            <a href="<?php echo esc_url(home_url()); ?>"></a>
            <img src="<?php echo esc_url(home_url('/wp-content/themes/svarab/assets/images/svarabLogo.png')); ?>" />
        </div>
        <div class="header-items">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'walker' => $walker ) ); ?>
        </div>
        <div class="header-button">
            <div>
                <span>Kontakta oss</span>
                <i class="material-icons">forward</i>
            </div>
        </div>
        <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </button>

    </header>
    <div class="menu-section">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_class' => 'mobile-menu' ) ); ?>
    </div>
    <div class="all-content">
