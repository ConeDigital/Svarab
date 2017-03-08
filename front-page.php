<?php get_header() ; ?>

    <div class="hero single-hero front-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
        <button class="button-hover">
            <i class="material-icons">launch</i>
            <span>Pröva vår produktgenerator</span>
            <a href="<?php echo esc_url(home_url('/valj-ratt')); ?>"></a>
        </button>
<!--        <div class="front-hero-inputs email-inputs">-->
<!--<!--            <input type="email" placeholder="Din email adress"/>-->
<!--<!--            <button>Hämta ner guide</button>-->
<!--            --><?php //echo do_shortcode('[contact-form-7 id="167" title="Hämta ner guide"]') ; ?>
<!--        </div>-->
<!--        <div class="hero-overlay"></div>-->
    </div>
    <section class="front-second row">
        <div class="front-second-content">
            <h3><?php the_field('to-conf-title') ; ?></h3>
            <p><?php the_field('to-conf-content') ; ?></p>
            <a href="<?php echo esc_url(home_url('/valj-ratt')); ?>">Till produktkonfiguratorn</a>
        </div>
        <div class="big-question">
            <a href="<?php echo esc_url(home_url('/valj-ratt')); ?>"></a>
            <svg width="138px" height="138px" shape-rendering="geometricPrecision">
                <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#big-question"></use>
            </svg>
        </div>
    </section>
    <section class="front-third">
        <div class="front-third-left background-img" style="background-image: url('<?php the_field('pros-img') ; ?>')"></div>
        <div class="front-third-right">
            <h3><?php the_field('pros-title') ; ?></h3>
            <?php if( have_rows('pros') ): ?>
                <?php while( have_rows('pros') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                    <p><i class="material-icons">check</i><?php the_sub_field('pro') ; ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
            <button class="button-hover">
                <i class="material-icons">launch</i>
                <span>Läs mer om våra system</span>
                <a href="<?php echo esc_url(home_url('/produkter')); ?>"></a>
            </button>
        </div>
    </section>
    <section class="related-posts guides-section">
        <h3>Våra guider hjälper dig att välja rätt</h3>
        <?php get_template_part( 'template-parts/guides', get_post_format() ); ?>
    </section>
    <?php get_template_part( 'template-parts/single-form', get_post_format() ); ?>


<?php get_footer() ; ?>