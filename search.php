<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>


    <?php if ( have_posts() ) : ?>

        <div class="hero small-hero">
            <h1 class="page-title"><?php printf( __( 'Resultaten för sökningen: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </div>

        <section class="row sub-pages-row ">
            <div class="sub-pages-content search-result">
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php echo get_the_permalink() ; ?>"><?php the_title() ; ?></a>
            <?php endwhile; ?>
            </div>
            <div class="splash">
                <img src="<?php echo esc_url(home_url( '/wp-content/themes/svarab/assets/images/background.png' ) ); ?>">
            </div>
        </section>

    <?php else : ?>
        <?php get_template_part( 'no-results', get_post_format() ); ?>
        <div class="hero small-hero">
            <h1 class="page-title"><?php printf( __( 'Vi hittade inga resultat för sökningen: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </div>


    <?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>