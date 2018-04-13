<?php get_header() ; ?>

    <div class="hero single-hero front-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
        <a href="<?php echo esc_url(home_url('/valj-ratt')); ?>" class="button-hover a-button">
            <i class="material-icons">launch</i>
            <span>Testa vår produktgenerator</span>
        </a>
<!--        <div class="front-hero-inputs email-inputs">-->
<!--<!--            <input type="email" placeholder="Din email adress"/>-->
<!--<!--            <button>Hämta ner guide</button>-->
<!--            --><?php //echo do_shortcode('[contact-form-7 id="167" title="Hämta ner guide"]') ; ?>
<!--        </div>-->
<!--        <div class="hero-overlay"></div>-->
    </div>
    <section class="front-second row">
        <div class="front-second-content">
            <div>
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
            <a href="<?php echo esc_url(home_url('/produkter')); ?>" class="button-hover a-button">
                <i class="material-icons">launch</i>
                <span>Läs mer om våra system</span>
            </a>
        </div>
    </section>
    <section class="related-posts guides-section">
        <h3>Våra guider hjälper dig att välja rätt</h3>
        <?php get_template_part( 'template-parts/guides', get_post_format() ); ?>
        <div class="home-news">
            <h3>Senaste nyheterna</h3>
            <?php get_template_part( 'template-parts/news', get_post_format() ); ?>
        </div>
    </section>
    <section class="review-section front-second">
        <div class="swiper-container review-swiper">
            <div class="swiper-wrapper">
                <?php if( have_rows('reviews') ): ?>
                    <?php while( have_rows('reviews') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                        <div class="swiper-slide">
                            <div class="review-left">
                                <div class="review-img" style="background-image: url('<?php echo get_sub_field('review-img') ; ?>')"></div>
                                <span><?php echo get_sub_field('review-name') ; ?></span>
                                <span><?php echo get_sub_field('review-title') ; ?></span>
                            </div>
                            <div class="review-right">
                                <img src="<?php echo esc_url(home_url('/wp-content/themes/svarab/assets/images/blockq.png')); ?>" />
                                <p><?php echo get_sub_field('review-content') ; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/single-form', get_post_format() ); ?>


<?php get_footer() ; ?>