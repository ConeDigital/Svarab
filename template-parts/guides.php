<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Skeleton
 */
?>
<?php $loop = new WP_Query( array( 'post_type' => 'guides', 'posts_per_page' => 8)); ?>

    <section class="related-posts guides-section">
        <h3>Våra guider hjälper dig att välja rätt</h3>
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