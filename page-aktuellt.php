<?php
/**
 * Template Name: Sida med sidebar
 *
 */
?>
<?php get_header() ; ?>

    <div class="hero small-hero left-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
        <div class="hero-overlay"></div>
    </div>
    <section class="section-sidebar">
        <div class="left-section">
            <?php get_template_part( 'template-parts/news', get_post_format() ); ?>
        </div>
        <div class="right-section">
            <div class="book-kommun">
                <p>Boka konsultation för enskilt avlopp - gratis.</p>
                <div class="button-hover a-button">
                    <span>Kontakta Oss</span>
                    <i class="material-icons">mail_outline</i>
                </div>
            </div>
            <div class="right-section-links">
                <h5>Länkar</h5>
                <?php $loop = new WP_Query( array( 'post_type' => 'guides', 'posts_per_page' => 4)); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <a href="<?php echo get_the_permalink() ; ?>"><?php the_title() ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>