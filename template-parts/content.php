<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package cone
 */
?>

<?php
    if (is_page() ) :

        the_title( '<h1>', '</h1>' );

    endif;
?>

<?php if( is_single() ) : ?>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="hero single-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
            <h1><?php the_title() ; ?></h1>
            <div class="hero-overlay"></div>
        </div>
    <?php else : ?>
        <div class="hero small-hero">
            <h1><?php the_title() ; ?></h1>
        </div>
    <?php endif ?>
        <section class="single-content-section">
            <div class="single-content">
                <?php the_content(); ?>
                <div class="social-sharer">
                    <svg width="30px" height="30px" shape-rendering="geometricPrecision" class="sharer button" data-sharer="facebook" data-url="<?php the_permalink() ?>">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#facebook"></use>
                    </svg>
                    <svg width="30px" height="30px" shape-rendering="geometricPrecision" class="sharer button" data-sharer="twitter" data-url="<?php the_permalink() ?>">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#twitter"></use>
                    </svg>
                </div>
            </div>
        </section>
    <?php get_template_part( 'template-parts/related-posts', get_post_format() ); ?>
    <?php get_template_part( 'template-parts/single-form', get_post_format() ); ?>


<?php endif; ?>

