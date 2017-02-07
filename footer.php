<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>

    </div>
    <footer>
        <div class="footer-upper-section">
            <div class="footer-content">
                <p>Sidor</p>
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
            </div>
            <div class="footer-content">
                <p>Artiklar</p>
                <?php $loop = new WP_Query( array( 'post_type' => 'guides', 'posts_per_page' => 4)); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="footer-links">
                            <a href="<?php echo get_the_permalink() ; ?>"><?php the_title() ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="footer-content">
                <p>Kontakta oss</p>
                <div class="footer-links">
                    <a href="#">(+46) 08 540 66 11</a>
                    <a href="#">Kundsupport</a>
                    <a href="<?php echo esc_url(home_url('/aterforaljare'))?>">Återförsäljare</a>
                </div>
            </div>
        </div>
        <div class="footer-border"></div>
        <div class="footer-lower-section">
            <div class="footer-search">
                <input type="search" placeholder="Sök" />
                <i class="material-icons">search</i>
            </div>
            <div class="footer-social">
                <div class="footer-icon">
                    <a href="#"></a>
                    <svg width="30px" height="30px" shape-rendering="geometricPrecision">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#facebook"></use>
                    </svg>
                </div>
                <div class="footer-icon">
                    <a href="#"></a>
                    <svg width="30px" height="30px" shape-rendering="geometricPrecision">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#twitter"></use>
                    </svg>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>