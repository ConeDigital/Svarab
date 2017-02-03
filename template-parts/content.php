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
            </div>
        </section>

<?php endif; ?>

