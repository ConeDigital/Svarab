<?php get_header() ; ?>

    <div class="hero small-hero left-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
        <div class="hero-overlay"></div>
    </div>
    <section class="section-sidebar">
        <div class="left-section">
            <?php the_content() ; ?>
            <div hidden><?php $kommun = get_field('kommun-name') ; ?></div>
<!--            <div class="retailer-grid-section">-->
<!--                <h3>Återförsäljare av enskilt avlopp i --><?php //the_field('kommun-name') ; ?><!-- kommun:</h3>-->
<!---->
<!--                --><?php //$loop = new WP_Query( array( 'post_type' => 'retailers', 'category_name' => $kommun ) ); ?>
<!---->
<!--                --><?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!--                    <div class="retailer-grid">-->
<!--                        <h4>--><?php //the_title() ; ?><!--</h4>-->
<!--                        <p>-->
<!--                            --><?php //the_field('retailer-number') ?>
<!--                            --><?php //if( get_field('retailer-address') ): ?>
<!--                                <span>, --><?php //the_field('retailer-address'); ?><!--</span>-->
<!--                            --><?php //endif; ?>
<!--                        </p>-->
<!--                        <div class="retailer-contact">-->
<!--                            <p>--><?php //echo $kommun?><!--</p>-->
<!--                            <a href="#">Kontakta</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //endwhile; ?>
<!--            </div>-->
        </div>
        <div class="right-section">
            <div class="book-kommun">
                <p>Boka kostnadsfri konsultation i <?php echo $kommun ?> kommun.</p>
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
