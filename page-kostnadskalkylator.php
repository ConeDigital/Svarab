<?php get_header() ; ?>

<div class="hero small-hero">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
</div>

<section class="row sub-pages-row">
    <?php the_content() ; ?>
</section>

<?php get_footer() ; ?>