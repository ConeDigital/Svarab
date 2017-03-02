<?php get_header() ; ?>

    <div class="hero small-hero">
        <h1><?php the_title() ; ?></h1>
        <p><?php the_field('hero-sub') ; ?></p>
    </div>
    <section class="faq-section">
        <div class="faq-search">
            <input type="search" placeholder="Vad söker du?">
            <i class="material-icons">search</i>
        </div>
        <div class="faq-grid-section">
        <?php if( have_rows('faq') ): ?>
            <?php while( have_rows('faq') ) : the_row(); ?>
                    <div class="faq-grid">
                        <h4><?php the_sub_field('question-title') ; ?></h4>
                        <?php while( have_rows('q-and-a') ) : the_row(); ?>
                        <div>
                        <p class="question"><i class="material-icons">keyboard_arrow_right</i><?php the_sub_field('question') ; ?></p>
                            <div class="answer">
                                <p><?php the_sub_field('answer') ; ?></p>
                            </div>
                        </div>

                        <?php endwhile; ?>
                    </div>
                <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </section>

<?php get_footer() ; ?>