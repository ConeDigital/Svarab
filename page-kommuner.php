<?php get_header() ; ?>

<div class="hero small-hero left-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
    <div class="hero-overlay"></div>
</div>
<section class="section-sidebar">
    <div class="left-section kommun-left-section">
        <?php get_template_part( 'template-parts/kommuner', get_post_format() ); ?>
    </div>
    <div class="right-section kommun-right-section">
        <h6>Boka kostnadsfri konsultation</h6>
        <p>Behöver du hjälp med enskilt avlopp i just din kommun? Få en gratis konsultation  genom att fylla i formuläret nedan. Vi är verksamma i många fler kommuner än de som visas till vänster så glöm inte att skriva i vilken kommun du bor i.</p>
        <?php echo do_shortcode('[contact-form-7 id="1106" title="Sidebar Boka Konsultation"]') ; ?>
    </div>
</section>

<?php get_footer() ; ?>
