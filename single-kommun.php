<?php get_header() ; ?>

    <div class="hero small-hero left-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
        <div class="hero-overlay"></div>
    </div>
    <section class="section-sidebar">
        <div class="left-section">
            <?php the_content() ; ?>
            <div hidden><?php $kommun == the_field('kommun-name') ; ?></div>
            <div class="retailer-grid-section">
                <h3>Återförsäljare av enskilt avlopp i <?php the_field('kommun-name') ; ?> kommun:</h3>

                <?php $loop = new WP_Query( array( 'post_type' => 'retailers', 'category_name' => $kommun ) ); ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="retailer-grid">
                        <h4><?php the_title() ; ?></h4>
                        <p>
                            <?php the_field('retailer-number') ?>
                            <?php if( get_field('retailer-address') ): ?>
                                <span>, <?php the_field('retailer-address'); ?></span>
                            <?php endif; ?>
                        </p>
                        <div class="retailer-contact">
                            <p><?php echo $kommun?></p>
                            <a href="#">Kontakta</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="right-section">
            <div class="book-kommun">
                <p>Boka konsultation för enskilt avlopp i <?php echo $kommun ?> - gratis.</p>
                <button>Kontakta Oss</button>
            </div>
            <div class="right-section-links">
                <h5>Livsviktiga länkar</h5>
                <a href="#">Kom igång med enskilt avlopp</a>
                <a href="#">Slamavskiljare eller trekammarbrunn?</a>
                <a href="#">12 saker du måste tänka på innan du genomför grävning för enskilt avlopp</a>
                <a href="#">Kontrollera ditt enskilda avlopp</a>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>
