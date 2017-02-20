<?php get_header() ; ?>

<div class="hero small-hero hero-product">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
</div>
    <section class="row sub-pages-row">
        <div class="sub-pages-content">
            <?php the_content(); ?>
        </div>
    </section>
    <section class="product-section">
        <?php $loop = new WP_Query( array( 'post_type' => 'products') ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="product-grid">
                <a class="product-link" href="<?php the_permalink() ; ?>"></a>
                <h3><?php the_title() ;?></h3>
                <p><?php the_field('product-expl') ; ?></p>
                <div class="product-perks">
                <?php if( have_rows('perks') ): ?>
                    <?php while( have_rows('perks') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                        <p><i class="material-icons">check_circle</i><?php the_sub_field('perk') ; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <a href="<?php the_permalink() ; ?>">Läs mer</a>
            </div>
        <?php endwhile; ?>

    </section>
    <?php get_template_part( 'template-parts/single-form', get_post_format() ); ?>



<?php get_footer() ; ?>