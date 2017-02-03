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
                <div>
                    <svg width="20px" height="20px" shape-rendering="geometricPrecision">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#facebook"></use>
                    </svg>
                    <svg width="20px" height="20px" shape-rendering="geometricPrecision">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#twitter"></use>
                    </svg>
                </div>
                <?php the_content(); ?>
            </div>
        </section>
    <?php
    /**
     * The default template for displaying content
     *
     * Used for both single and index/archive/search.
     *
     * @package Skeleton
     */
    ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4)); ?>

    <section class="related-posts">
        <h4 class="related-headline">Relaterade artiklar</h4>
        <div class="related-post-wrapper">
            <?php if ( $loop->have_posts() ) : ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php $smallexcerpt = get_the_excerpt(); ?>
                    <div class="related-post-grid  ">
                        <a href="<?php echo get_permalink(); ?>"></a>
                        <div class="background-img related-post-img" style="background-image: url('<?php  the_post_thumbnail_url('large'); ?>')"></div>
                        <div class="related-post-grid-text">
                            <h4><?php the_title(); ?></h4>
                            <p><?php   echo wp_trim_words( $smallexcerpt , '17' ); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <?php wp_reset_query(); ?>

<?php endif; ?>

