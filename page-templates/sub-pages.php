<?php
/**
 * Template Name: Undersida
 *
 */
?>
<?php get_header() ; ?>

<div class="hero small-hero">
    <h1><?php the_title() ; ?></h1>
    <p><?php the_field('hero-sub') ; ?></p>
</div>
<div class="sub-pages-menu">
    <i class="material-icons scroll-icon">keyboard_arrow_right</i>
    <div class="blur-menu"></div>
    <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'under-menu' ) ); ?>
</div>
<section class="row sub-pages-row">
    <div class="sub-pages-content">
        <?php the_content(); ?>
        <?php if(is_page( 'kontakta-oss' )) : ?>
            <div class="staff-grid-section">
                <h3>Våra medarbetare</h3>
                <?php if( have_rows('team') ): ?>
                <?php while( have_rows('team') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                <div class="staff-grid">
                    <div class="staff-img background-img" style="background-image: url(' <?php if( get_sub_field('team-img') ): ?><?php the_sub_field('team-img') ; ?><?php else : ?><?php echo esc_url(home_url('/wp-content/themes/svarab/assets/images/user.jpg')); ?><?php endif; ?>')"></div>
                    <div class="staff-info">
                        <h4><?php the_sub_field('team-name') ; ?></h4>
                        <p><?php the_sub_field('team-job') ; ?></p>
                        <a href="#"><?php the_sub_field('team-phone') ; ?></a>
                        <a href="mailto:<?php the_sub_field('team-mail') ; ?>"><?php the_sub_field('team-mail') ; ?></a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        <?php elseif(is_page( 'aterforsaljare' )) : ?>
<!--             <input class="big-search" type="search" placeholder="Sök efter kommun" /> -->
            <div class="retail-categories">
                <li class="cat-item" style="background: #5091BD">
                    <a href="#">Alla</a>
                </li>
                <?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'exclude'  => array( 1 ),
                    'title_li' => ''
                ) ); ?>
            </div>
            <div hidden><?php $kommun == the_field('kommun-name') ; ?></div>
            <div class="retailer-grid-section less-margin">
                <?php $loop = new WP_Query( array( 'post_type' => 'retailers', 'category_name' => $kommun, 'orderby' => 'name', 'order' => 'asc' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="retailer-grid <?php echo get_the_category()[0]->name; ?>">
                        <h4><?php the_title() ; ?></h4>
                        <p>
                            <?php the_field('retailer-number') ?>
                            <?php if( get_field('retailer-address') ): ?>
                                <span>, <?php the_field('retailer-address'); ?></span>
                            <?php endif; ?>
                        </p>
                        <div class="retailer-contact">
                            <p>
                                <?php foreach((get_the_category()) as $category) {
                                    echo $category->cat_name . ' ';
                                } ?>
                            </p>
                            <a href="#">Kontakta</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php elseif(is_page( 'garantiregistrering' )) : ?>
            <div class="forms">
<!--                <div class="input-div radios">-->
<!--                    <input type="radio" name="product" value="biop"  id="Biop">-->
<!--                    <label for="Biop">Biop</label>-->
<!--                    <input type="radio" name="product" value="oxifyx" id="oxifyx">-->
<!--                    <label for="oxifyx">Oxifyx</label>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs" type="text" placeholder="Namn"/>-->
<!--                    <input class="inputs" type="email" placeholder="Email adress" />-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs" type="number" placeholder="Telefonnummer"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs" type="text" placeholder="Adress"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs small-input" type="number" placeholder="Postnummer"/>-->
<!--                    <input class="inputs" type="text" placeholder="Kommun"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs" type="text" onfocus="(this.type='date')"  placeholder="Välj datum för driftkostnad"/>-->
<!--                </div>-->
<!--                <button>Skicka</button>-->
                <?php echo do_shortcode('[contact-form-7 id="168" title="Offertförfrågan"]') ; ?>
            </div>
        <?php elseif(is_page( 'offertforfragan' )) : ?>
            <div class="forms">
                <div class="input-div radios">
                    <input type="radio" name="product" value="biop"  id="Biop">
                    <label for="Biop">Biop</label>
                    <input type="radio" name="product" value="oxifyx" id="oxifyx">
                    <label for="oxifyx">Oxifyx</label>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="168" title="Offertförfrågan"]') ; ?>

                <!--                <div class="input-div">-->
<!--                    <input class="inputs offer-name" type="text" placeholder="Namn"/>-->
<!--                    <input class="inputs offer-email" type="email" placeholder="Email adress" />-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs offer-phone" type="number" placeholder="Telefonnummer"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs" type="text" placeholder="Adress"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <input class="inputs small-input" type="number" placeholder="Postnummer"/>-->
<!--                    <input class="inputs" type="text" placeholder="Kommun"/>-->
<!--                </div>-->
<!--                <div class="input-div">-->
<!--                    <textarea class="inputs offer-notes" placeholder="Övrig information"></textarea>-->
<!--                </div>-->
<!--                <button class="offer-form-submit">Skicka</button>-->
            </div>
        <?php endif ; ?>
    </div>
</section>

<?php get_footer() ; ?>
