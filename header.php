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
            <a href="#">Kontakta oss</a>
        </div>
    </header>
    <div class="all-content">
