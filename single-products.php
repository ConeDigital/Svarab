<?php get_header() ; ?>

<!--<a class="cd-nav-trigger"><i class="material-icons">menu</i></a>-->
<nav id="cd-vertical-nav" >
    <ul>
        <li>
            <a href="#section1" data-number="1">
                <span class="cd-label">Produktinformation</span>
            </a>
        </li>
        <li>
            <a href="#section2" class="black-dot" data-number="2">
                <span class="cd-label">Underhåll</span>
            </a>
        </li>
        <li>
            <a href="#section3" class="black-dot" data-number="3">
                <span class="cd-label">Produktblad</span>
            </a>
        </li>
        <li>
            <a href="#section4" class="black-dot" data-number="4">
                <span class="cd-label">Intresseförfrågan</span>
            </a>
        </li>
        <!-- other navigation items here-->
    </ul>
</nav>
<div class="hero small-hero background-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')" >
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
    <div class="hero-overlay"></div>
</div>
<section class="single-content-section product-single-section">
    <div id="section1" class="single-content cd-section ">
        <?php the_field('product-info') ; ?>
    </div>
    <div id="section2" class="single-content cd-section ">
        <?php the_field('product-maintenance') ; ?>
    </div>
    <div id="section3" class="single-content cd-section pdf">
        <h3>Produktblad</h3>
        <?php if( have_rows('product-pdfs') ): ?>
            <?php while( have_rows('product-pdfs') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                <a target="_blank" href="<?php the_sub_field('product-pdf') ; ?>"><i class="material-icons">file_download</i><?php the_sub_field('pdf-title') ; ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<div id="section4" class="cd-section">
    <?php get_template_part( 'template-parts/single-form', get_post_format() ); ?>
</div>



<?php get_footer() ; ?>
