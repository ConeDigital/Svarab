<?php get_header() ; ?>

<div class="hero small-hero">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
</div>

<section class="row sub-pages-row grey-backr">
        <div class="sub-pages-content">
            <?php the_content() ; ?>
        </div>
</section>

<?php get_footer() ; ?>