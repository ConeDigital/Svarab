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
                    <div class="staff-img background-img" style="background-image: url('<?php the_sub_field('team-img') ; ?>')"></div>
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
            Återförsäljare
        <?php elseif(is_page( 'garantiregistrering' )) : ?>
            <form>
                <div class="input-div radios">
                    <input type="radio" name="product" value="biop"  id="Biop">
                    <label for="Biop">Biop</label>
                    <input type="radio" name="product" value="oxifyx" id="oxifyx">
                    <label for="oxifyx">Oxifyx</label>
                </div>
                <div class="input-div">
                    <input class="inputs" type="text" placeholder="Namn"/>
                    <input class="inputs" type="email" placeholder="Email adress" />
                </div>
                <div class="input-div">
                    <input class="inputs" type="number" placeholder="Telefonnummer"/>
                </div>
                <div class="input-div">
                    <input class="inputs" type="text" placeholder="Adress"/>
                </div>
                <div class="input-div">
                    <input class="inputs small-input" type="number" placeholder="Postnummer"/>
                    <input class="inputs" type="text" placeholder="Kommun"/>
                </div>
                <div class="input-div">
                    <input class="inputs" type="text" onfocus="(this.type='date')"  placeholder="Välj datum för driftkostnad"/>
                </div>
                <button>Skicka</button>
            </form>
        <?php elseif(is_page( 'offertforfragan' )) : ?>
            <form>
                <div class="input-div radios">
                    <input type="radio" name="product" value="biop"  id="Biop">
                    <label for="Biop">Biop</label>
                    <input type="radio" name="product" value="oxifyx" id="oxifyx">
                    <label for="oxifyx">Oxifyx</label>
                </div>
                <div class="input-div">
                    <input class="inputs" type="text" placeholder="Namn"/>
                    <input class="inputs" type="email" placeholder="Email adress" />
                </div>
                <div class="input-div">
                    <input class="inputs" type="number" placeholder="Telefonnummer"/>
                </div>
                <div class="input-div">
                    <input class="inputs" type="text" placeholder="Adress"/>
                </div>
                <div class="input-div">
                    <input class="inputs small-input" type="number" placeholder="Postnummer"/>
                    <input class="inputs" type="text" placeholder="Kommun"/>
                </div>
                <div class="input-div">
                    <textarea class="inputs" placeholder="Övrig information"></textarea>
                </div>
                <button>Skicka</button>
            </form>
        <?php endif ; ?>
    </div>
</section>

<?php get_footer() ; ?>
