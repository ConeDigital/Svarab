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
        <?php get_template_part( 'template-parts/guides', get_post_format() ); ?>
    </div>
    <div class="right-section">
        <div class="book-kommun">
            <p>Boka konsultation för enskilt avlopp - gratis.</p>
            <button class="button-hover">
                <span>Kontakta Oss</span>
                <i class="material-icons">mail_outline</i>
            </button>
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

