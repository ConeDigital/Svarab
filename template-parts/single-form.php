<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Skeleton
 */
?>
<section class="single-form" id=“offertfarfragan”>
    <div class="sub-pages-content">
        <div class="forms">
            <h4>Boka kostnadsfri konsultation</h4>
            <p>Fyll i formuläret så kontaktar vi dig inom kort!</p>
<!--            <div class="input-div">-->
<!--                <input class="inputs" type="text" placeholder="Förnamn*"/>-->
<!--                <input class="inputs" type="text" placeholder="Efternamn*" />-->
<!--            </div>-->
<!--            <div class="input-div">-->
<!--                <input class="inputs" type="email" placeholder="Email adress*"/>-->
<!--                <input class="inputs" type="text" placeholder="Ort för kundbesök*"/>-->
<!--            </div>-->
<!--            <button>Skicka Intresseförfrågan</button>-->
            <?php echo do_shortcode('[contact-form-7 id="169" title="Boka konsultation"]') ; ?>

        </div>
    </div>
</section>
