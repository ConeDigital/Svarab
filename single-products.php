<?php get_header() ; ?>


<div class="hero small-hero left-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
    <div class="hero-overlay"></div>
</div>
<section class="section-sidebar">
    <div class="left-section product-left-section">
        <div id="section1" class="single-content">
            <?php the_field('product-info') ; ?>
        </div>
        <div id="section2" class="single-content">
            <?php the_field('product-maintenance') ; ?>
        </div>
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
            <h5>Produktblad</h5>
            <?php if( have_rows('product-pdfs') ): ?>
                <?php while( have_rows('product-pdfs') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                    <a target="_blank" href="<?php the_sub_field('product-pdf') ; ?>"><?php the_sub_field('pdf-title') ; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer() ; ?>
