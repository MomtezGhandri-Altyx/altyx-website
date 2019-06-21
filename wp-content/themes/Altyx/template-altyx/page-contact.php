<?php
/**
 * Template Name: Contact ALTYX WEBSITE
 *
 */


get_header();


?>
<style>
    .full.dark-gold {
        margin-top: 6%;}
    #menu-controller #menu-icon-stack span {
        background: #000;
    }
</style>
<div class="full balck-text">
    <div class="case-intro">
        <div class="large-12 columns">
            <div class="four spacing"></div>
            <h2 class="head-title">
                Contact
            </h2>
        </div>
        <div class="large-8 columns">
            <div id="maps" style="width:100%;height: 250px;"></div>
            <div class="two spacing"></div>
            <div class="spacing"></div>
        </div>
        <div class="large-4 columns">
            <div class="contact-details wow slideInUp">
                <p>

                    Bloc B - B 2.2 Immeuble Golden Tower Center <br>
                    - Urbain Nord Tunisie<br>

                </p>
                <div class="spacing"></div>
                <p>+216 36 36 73 31 </p>
                <p>
                    <a href="mailto:info@altyx.io" title="business email">info@altyx.io</a>
                </p>

                <div class="spacing"></div>
                <ul class="socials">
                    <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                    <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                    <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                    <li><a href="#"><i class='fa fa-instagram'></i></a></li>
                    <li><a href="#"><i class='fa fa-dribbble'></i></a></li>
                    <li><a href="#"><i class='fa fa-youtube'></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div class="full black white-text">
    <div class="case-intro">
        <div class="large-12 columns" id="contact-form">
            <h2 class="case-title">LAISSER UN MESSAGE</h2>
        </div>
        <div class='form'>
            <form id='contact_form' method='POST' >
                <div class="large-6 columns">
                    <input class='required' name='name' placeholder='Nom' type='text'>
                </div>
                <div class="large-6 columns">
                    <input class='required email' name='email' placeholder='Email' type='text'>
                </div>
                <div class="large-12 columns">
                    <input class='required' name='subject' placeholder='Sujet' type='text'>
                </div>
                <div class="large-12 columns">
                    <textarea class='required' name='message' placeholder='Message'></textarea>
                    <input class='button white boxed contact-button' type='submit' value="Envoyer">
                    <p class='hide thanks'>
                        Thanks for contacting us, we'll be in touch soon!
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>