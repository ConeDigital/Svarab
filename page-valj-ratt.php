<?php get_header() ; ?>

    <section class="conf-section">
        <div class="conf-start">
            <h1><?php the_title() ; ?></h1>
            <p><?php the_field('hero-sub') ; ?></p>
            <button>Start<i class="material-icons">arrow_forward</i></button>
        </div>
    </section>
    <div class="conf-modal" style="display: none;">
        <p class="conf-modal-back"><i class="material-icons">keyboard_backspace</i> Tillbaka</p>
        <p class="close-conf-modal"><i class="material-icons ">close</i></p>
        <div class="conf-modal-content" id="step1">
            <h2>Typ av boende?</h2>
            <p>Vilket typ av hus du bor i spelar roll för denna uträkning</p>
            <div class="conf-modal-options">
                <div class="conf-modal-option">
                    <div class="conf-modal-img c-m-big-img">
                        <svg width="169px" height="170px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#snow"></use>
                        </svg>
                    </div>
                    <p>Permanentboende</p>
                </div>
                <div class="conf-modal-option">
                    <div class="conf-modal-img c-m-big-img">
                        <svg width="170px" height="170px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#farm"></use>
                        </svg>
                    </div>
                    <p>Fritidshus</p>
                </div>
            </div>
        </div>
        <div class="conf-modal-content" id="step2" style="display: none;">
            <h2>Antal hushåll?</h2>
            <p>Sharing is caring! (och bättre för plånboken)</p>
            <div class="conf-modal-options" data-id="0">
                <div class="conf-modal-option conf-choice" data-option="0">
                    <div class="conf-modal-img c-m-i-small-img">
                        <h4>1</h4>
                    </div>
                    <p>1 hushåll</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="1">
                    <div class="conf-modal-img c-m-i-small-img">
                        <h4>2</h4>
                    </div>
                    <p>2 hushåll</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="2">
                    <div class="conf-modal-img c-m-i-small-img">
                        <h4>3</h4>
                    </div>
                    <p>3 hushåll</p>
                </div>
            </div>
        </div>
        <div class="conf-modal-content" id="step3" style="display: none;">
            <h2>Skyddsnyvå?</h2>
            <p>Skyddsnivån spelar roll. Läs: <a target="_blank" href="<?php echo esc_url(home_url('/guides/vilken-skyddsniva-har-jag/')); ?>">Vilken skyddsnivå har jag?</a></p>
            <div class="conf-modal-options" data-id="1">
                <div class="conf-modal-option conf-choice" data-option="0">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="51px" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#warning"></use>
                        </svg>
                    </div>
                    <p>Hög skyddsnivå</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="1">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="47px" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#smile"></use>
                        </svg>
                    </div>
                    <p>Normal skyddsnivå</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="2">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="47px" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#question"></use>
                        </svg>
                    </div>
                    <p>Vet ej</p>
                </div>
            </div>
        </div>
        <div class="conf-modal-content" id="step4" style="display: none;">
            <h2>Godkänd slamavskiljare?</h2>
            <p>Finns det någon godkänd slamavskiljare. Lästips: <a href="#">Godkända slamavskiljare</a></p>
            <div class="conf-modal-options" data-id="2">
                <div class="conf-modal-option conf-choice" data-option="0">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="62px" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#check"></use>
                        </svg>
                    </div>
                    <p>Ja</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="1">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="47" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#delete"></use>
                        </svg>
                    </div>
                    <p>Nej</p>
                </div>
                <div class="conf-modal-option conf-choice" data-option="2">
                    <div class="conf-modal-img c-m-i-small-img">
                        <svg width="47px" height="47px" shape-rendering="geometricPrecision">
                            <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/images/sprite.svg' ) : '' ; ?>#question"></use>
                        </svg>
                    </div>
                    <p>Vet ej</p>
                </div>
            </div>
        </div>
        <div class="conf-modal-content conf-modal-result" id="step5" style="display: none;">
            <h2>
                I ditt hem passar..<br/>
                systemet <span class="product-suggestion">Oxyfix</span>
            </h2>
            <a href="#">Läs mer om <span class="product-suggestion">Oxyfix</span></a>
            <p>Boka en kostnadsfri konsultation med en av våra prominenta återförsäljare. Fyll i dina uppgifter nedan så kontaktar vi dig inom 24 timmar. </p>
            <button class="green-button">Boka kostnadsfri konsultation</button>
            <p class="enter-mail-text">Eller skriv in din mail och hämta produktblad</p>
            <div class="email-inputs">
                <input type="email" placeholder="Din email adress" />
                <button>Ladda ner broschyr</button>
            </div>
        </div>
        <div class="conf-modal-content conf-modal-result conf-modal-book" style="display: none;">
            <h2>Kostnadsfri konsultation</h2>
            <p>Boka en kostnadsfri konsultation med en av våra prominenta återförsäljare. Fyll i dina uppgifter nedan så kontaktar vi dig inom 24 timmar. </p>

        </div>
        <p class="conf-progress"><span>1</span> / 5</p>
    </div>

<?php get_footer() ; ?>