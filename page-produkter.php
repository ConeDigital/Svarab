<?php get_header() ; ?>

<div class="hero small-hero hero-product">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
</div>
<div class="info-border">
    <a href="<?php echo esc_url(home_url('/kontakt')); ?>"></a>
    <h5>Kontakta oss om du känner dig osäker på vad du ska välja</h5>
</div>
<!--    <section class="row sub-pages-row">-->
<!--        <div class="sub-pages-content">-->
<!--            --><?php //the_content(); ?>
<!--        </div>-->
<!--    </section>-->
    <section class="product-section">
        <?php $loop = new WP_Query( array( 'post_type' => 'products') ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="product-grid">
                <img src="<?php the_field('product-img') ; ?>">
                <a class="product-link" href="<?php the_permalink() ; ?>"></a>
                <p class="grey-p"><?php the_field('houses') ; ?></p>
                <h3><?php the_title() ;?></h3>
                <?php the_field('product-expl') ; ?>
                <button class=" product-button button-hover">
                    <a href="<?php the_permalink() ; ?>" class="product-link"></a>
                    <span>Läs mer</span>
                    <i class="material-icons">launch</i>
                </button>
            </div>
        <?php endwhile; ?>
        <div class="splash">
            <img src="<?php echo esc_url(home_url( '/wp-content/themes/svarab/assets/images/background.png' ) ); ?>">
        </div>
    </section>
<!--    --><?php //get_template_part( 'template-parts/single-form', get_post_format() ); ?>



<?php get_footer() ; ?>