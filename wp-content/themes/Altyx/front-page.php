<?php
get_header(); ?>



<style>
    .pos-img{
        position: relative;
        /* left: 40%; */
        z-index: 99999999;
        width: 70%;
        height: 60%;
        fill: brown;
        z-index: 555;
        top: -31%;
        left: -31%;
        z-index: 1;
    }
    svg {
        z-index: 5;
        position: relative;
        left: -20%;
        top: -50%;
        width: 50%;
    }

    #home-intro svg {
        left: 0%;
        top: 0%;
        width: 50vw;
        height: 100vh;
        z-index: 2;
        position: relative;
    }
    .bg-logo {fill:#fff;}
</style>
<!-- Swiper -->
<div class="swiper-container">
    <div id="white-board"></div>
    <div id="white-board-reverse"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide" data-history="case-0" data-hash="ACCEUIL" data-title="">
            <div id="home-intro" class="stretchhh">



                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Calque_1" x="0px" y="0px" viewBox="0 0 1065 1080" style="enable-background:new 0 0 1065 1080;" xml:space="preserve">
<style type="text/css">
    .st0{fill:white;}
</style>
                    <path class="st0" d="M0,0v1080h1065V0H0z M886.4,376.6h17v17h-17V376.6z M833.9,393.5h28.3v28.3h-28.3V393.5z M452,671h-32.9v-65.1  h-59.9l21.2-32.6h38.7v-112L282.9,670.8h-38.3l168.8-260.1H452V671z M517.3,671h-32.4V410.7h32.4V671z M582.4,671h-32.6V410.7h32.6  v65H621l21.2,32.6h-59.9V671z M604.5,703.4l84.3-130.1l-63.3-97.6h38.7l44.2,67.7l43.9-67.7H791L642.9,703.4H604.5z M867.9,670.9  h-38.7l-43.8-67.7l-44.2,67.7h-38.7l63.3-97.6l-16.9-26l19.5-30l17,26l55.8-86.1v18.5h26.8l-63.3,97.6L867.9,670.9z M882.4,465.5  h-30.8v-30.8h30.8V465.5z M905.6,428.9h-21.8V407h21.8V428.9z"/>
</svg>

                <h2>
                    <span class="t-slug">Nearshore</span>
                    <span class="t-slug">Solutions</span>
                </h2>
                <h3>
                    Imaginez<br> Votre projet ICI !
                </h3>
                <div class="action-hint"> </div>

            </div>
            <div id="home-contact-link">
                <a href="<?php echo get_page_link(9); ?>">
                    <span class="link-label">Contactez-nous</span>
                    <span class="link-hover">Contactez-nous</span>
                </a>
            </div>

            <video autoplay="autoplay" muted="" id="fullscreen-video" loop="loop">
                <source src="<?php echo get_template_directory_uri(); ?>/images/test-home1.mp4" type="video/mp4">
            </video>
            <!--           <div id="video-overlay">
                      </div> -->
        </div>
        <div class="swiper-slide" data-history="case-1" data-hash="CODE" id="case-1" data-title="CODE">
            <div class="left-section stretchhh">

                <div class="case-intro-wrapper">
                    <h2>
                <span>
                  CODE
                </span>
                    </h2>
                    <p class="case-text">
                        ALTYX dispose du savoir-faire et de l'expérience indispensables à la conception et à la création de solutions, répondant à l'ensemble des normes actuelles. </p>
                    <p class="case-tags">

                        <span>Nous vous offrons la garantie que vous recevrez toujours le traitement le mieux adapté à vos exigences.</span>
                    </p>
                    <p class="case-tags">
                        <strong>ALTYX met à votre disposition les profils les plus adaptés à vos besoins.</strong>

                    </p>
                    <div class="three spacing"></div>
                    <p class="case-button">
                <span class="styled-button-wrapper" id="case-1-button">

                </span>
                    </p>
                </div>
            </div>
            <a href="#" class="position-case">
                <video loop="" autoplay="" muted="" playsinline="" class="brand-video" preload="">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/stock/code.mp4" type="video/mp4">
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 2281 2329" style="enable-background:new 0 0 2281 2329;" xml:space="preserve">
                    <path class="bg-code" d="M1576,799H705v528h871V799z M1049,1161.3c-4.9,3.1-10.5,4.7-16.3,4.7c-4.4,0-8.7-0.9-12.7-2.8l-155.6-72.4  c-10.6-4.9-17.5-15.7-17.4-27.2v-2.2c0-11.7,6.9-22.5,17.5-27.4l155.6-72.4c3.9-1.8,8.3-2.8,12.7-2.8c5.8,0,11.5,1.6,16.3,4.7  c8.8,5.6,14,15.1,14,25.5v0.8c0,11.7-6.9,22.5-17.5,27.4l-97.4,45.2l97.3,45.2c10.6,4.9,17.5,15.7,17.5,27.4v0.8  C1063,1146.3,1057.8,1155.8,1049,1161.3z M1089.6,1250.8h-0.8c-9.6,0-18.7-4.6-24.4-12.4s-7.3-17.9-4.4-27.1l102.5-317.7  c4-12.5,15.6-21,28.8-21h0.8c9.6,0,18.7,4.6,24.4,12.4c5.7,7.8,7.3,17.9,4.4,27.1l-102.5,317.7  C1114.4,1242.3,1102.8,1250.8,1089.6,1250.8z M1434.2,1063.3c0,11.7-6.9,22.4-17.5,27.4l-155.6,72.4c-4.1,1.9-8.4,2.8-12.8,2.8  c-5.8,0-11.4-1.6-16.3-4.7c-8.8-5.6-14-15.1-14-25.5v-0.8c0-11.7,6.9-22.5,17.5-27.4l97.3-45.3l-97.3-45.2  c-10.6-4.9-17.5-15.7-17.5-27.4h0.1v-0.9c0-10.4,5.2-19.9,14-25.5c4.8-3.1,10.5-4.7,16.3-4.7c4.4,0,8.8,1,12.7,2.8l155.6,72.4  c10.6,4.9,17.5,15.7,17.5,27.4V1063.3z"/>
                    <path class="bg-code" d="M0.5,0.5v2328h2280V0.5H0.5z M1650,1401.1h-393.5v111.7h133.9c39.9,0,67.9,51.3,21.7,91.3H890.6  c-39.9,0-67.9-51.3-21.7-91.3h155.6v-111.8H631V725h1019V1401.1z"/>
                </svg>
            </a>
            <div class="bg-text-wrapper">
                <h2 class="bg-text">
                    CODE
                </h2>
            </div>
        </div>
        <div class="swiper-slide" data-history="case-2" data-hash="DESIGN" id="case-2" data-title="DESIGN">
            <div class="left-section">

                <div class="case-intro-wrapper">
                    <h2>
                <span>
                  DESIGN
                </span>

                    </h2>
                    <p class="case-text">
                        Nos experts en communication visuelle ainsi que notre savoir-faire graphique sont là pour apporter à votre projet une réelle valeur ajoutée. </p>
                    <p class="case-tags">
                        <span>Notre savoir-faire graphique pour que vos solutions deviennent plus pertinents, plus simples et plus beau.</span>
                    </p>
                    <p class="case-tags">
                        <strong>Savoir-faire, Créativité.</strong>
                    </p>
                    <div class="three spacing"></div>
                    <p class="case-button">
                <span class="styled-button-wrapper" id="case-2-button">

                  <span class="button-circle circle-1"></span>
                  <span class="button-circle circle-2"></span>
                  <span class="button-circle circle-3"></span>
                  <span class="button-circle circle-4"></span>
                  <span class="button-circle circle-5"></span>
                  <span class="button-circle circle-6"></span>
                  <span class="button-circle circle-7"></span>
                </span>
                    </p>
                </div>
            </div>
            <a href="#" class="position-case">
                <video loop="" autoplay="" muted="" playsinline="" class="brand-video" preload="">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/stock/design.mp4" type="video/mp4">
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 2280 2328" style="enable-background:new 0 0 2280 2328;" xml:space="preserve">
                    <path class="bg-design" d="M1575.5,1165.3V960.1c0-54.4,0-132.7,0-162.7h-193.8c-201.4,0-630.1,0-678.1,0c0,63.4,0,669.6,0,733  c63.5,0,808.5,0,871.9,0C1575.5,1498.8,1575.5,1332.2,1575.5,1165.3z M923.4,824.3c5.7-5.7,11.4-5.7,17.1,0l148.1,148.1l-17.1,17.1  L923.4,841.4C917.7,835.6,917.7,830,923.4,824.3z M809.3,858.4c5.7-11.4,22.8-11.4,34.2,0l17.1,17.1c22.8-17.1,45.6-22.8,51.3-17.1  l210.9,210.8l-57,51.3c-17.1,17.1-39.9,45.6-39.9,45.6L815.1,955.3c-5.7-5.7,0-28.5,17.1-51.3l-22.9-11.4  C803.6,881.2,797.9,869.8,809.3,858.4z M1014.6,1439.6c-57,57-142.4,91.2-233.6,34.2c79.7-5.6,45.5-102.5,102.5-159.5  c56.9-57,102.5-45.6,136.8-11.5C1060.2,1337.1,1071.6,1382.6,1014.6,1439.6z M1168.3,1302.9c0,0,28.5-17.1,45.6-39.9l51.3-62.7  l182.3,176.7L1345,1479.5L1168.3,1302.9z M1390.6,1490.9l68.3-68.3c5.7,39.8,17.1,85.4,17.1,85.4S1430.5,1502.3,1390.6,1490.9z   M1481.7,886.9l-284.8,336.2c-17.1,17.1-28.5,28.5-51.3,45.6l-45.6,34.2c-17.1,17.1-51.3,11.4-68.4-5.7l-5.7-5.7  c-17.1-17.1-22.8-45.6-5.7-68.4l34.2-39.9c11.4-22.8,28.5-34.2,45.6-51.3L1436.2,847c22.8-17.1,45.6-22.7,57-11.4  C1504.5,847.1,1498.8,869.8,1481.7,886.9z"/>
                    <path class="bg-design" d="M0,0v2328h2280V0H0z M1648.5,1603.6h-1018V724.4h1018V1603.6z"/>
</svg>
            </a>

            <div class="bg-text-wrapper">
                <h2 class="bg-text">
                    DESIGN
                </h2>
            </div>
        </div>
        <div class="swiper-slide" data-history="case-3" data-hash="Réactivité" id="case-3" data-title="Réactivité">
            <div class="left-section">

                <div class="case-intro-wrapper">
                    <h2>
                <span>
                  Réactivité
                </span>
                    </h2>
                    <p class="case-text">
                        En reste en écoute et à votre service directement depuis nos agences en Europe où nous assurons un lien direct entre votre entreprise et le profil adéquat.</p>
                    <p class="case-tags">
                        <span>A partir de nos infrastructures de production, il est possible de connaitre à tout moment et à partir de chaque point de mesure, la disponibilité, les temps de réponse et la performance de vos services applicatifs critiques offerts à vos clients.</span>
                    </p>
                    <p class="case-tags">
                        <strong>Service clientèle à distance.</strong>
                    </p>
                    <div class="three spacing"></div>
                    <p class="case-button">
                <span class="styled-button-wrapper" id="case-3-button">

                </span>
                    </p>
                </div>
            </div>
            <a href="#" class="position-case">
                <video loop="" autoplay="" muted="" playsinline="" class="brand-video" preload="">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/stock/reactivite.mp4" type="video/mp4">
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 2442.6 2328" style="enable-background:new 0 0 2442.6 2328;" xml:space="preserve">
                    <path class="bg-react" d="M1596,907.7c-10-6-19.3-11.7-28.6-17.3c-9.5-5.8-19-11.5-29-17.6c-6,9.9-11.5,19-17.5,28.8  c19.6,11.9,38.2,23.2,57.6,34.9C1584.5,926.7,1590.1,917.5,1596,907.7z"/>
                    <path class="bg-react" d="M1370.9,860.5c11.5-0.2,18.4-7,18.4-16.8c0-10.1-7.2-16.7-19.1-17c-10.4-0.2-20.8,0-31.2,0s-20.8-0.2-31.2,0.1  c-11.3,0.3-18.7,6.9-19,16.4c-0.3,9.7,7.2,17.2,18.8,17.4C1328.7,860.9,1349.8,860.9,1370.9,860.5z"/>
                    <path class="bg-react" d="M1492.7,1214.6c10.1-0.2,20.3-0.1,30.4-0.1c5.6,0,11.2,0,17.3,0c-4.4-43.4-19.6-80.7-48.2-114.9  c-3.8,4.6-6.7,9-10.5,12.5c-7.4,6.8-17.1,6.6-23.6,0c-6.6-6.6-6.8-16.2,0.1-23.6c3.5-3.7,8-6.4,12.8-10.1  c-34.7-28.9-71.8-44.5-115-48.3c0,15.8,0.1,30.8,0,45.9c-0.1,12.4-6.7,20.2-16.8,20.3c-10.1,0.1-16.8-7.6-17-20.1  c-0.3-12.1,0-24.1,0-36.2c0-3.1,0-6.3,0-10.1c-43.5,4.3-80.6,19.7-114.1,47.7c4.4,3.9,8.1,6.7,11.3,10.1c7.1,7.7,7.3,17.7,0.8,24.3  c-6.9,7-16.7,6.7-24.9-0.9c-3.5-3.3-6.9-6.6-10.5-10.2c-27.3,33.6-43.1,70.5-46.7,113.6c2.9,0,4.8,0,6.6,0c14.5,0,29.1-0.3,43.6,0.3  c9.4,0.4,16.1,7.9,15.9,16.6c-0.1,8.7-6.9,15.7-16.3,16.4c-4.1,0.3-8.2,0.1-12.3,0.1c-12.2,0-24.4,0-37.4,0  c3.6,43.3,19.3,80.1,47.9,114.9c3.7-4.6,6.4-8.8,10-12.1c7.7-7.3,17.6-7.2,24.2-0.3c6.3,6.5,6.4,16.3-0.3,23.7  c-3.4,3.8-7.6,6.8-12,10.7c34.2,28.2,71.2,43.6,114.3,47.6c0-7.6-0.1-14.1,0-20.6c0.2-10.7,0-21.4,1-32c0.8-8,7.5-13.2,15.2-13.5  c7.5-0.4,14.5,4.5,16.5,12.1c0.9,3.4,1.1,7,1.1,10.6c0.1,14.2,0,28.4,0,43.5c43.2-4.1,80.4-19.6,113.1-46.7  c-16.8-19.2-19.1-26.2-10.7-34.4c2.7-2.6,7-4.5,10.7-5.1c11.7-1.6,16.4,9.3,24.6,15c27-32.9,42.7-70.2,46.6-113.3  c-3.7,0-6.4,0-9.1,0c-12.9,0-25.8,0.1-38.7-0.1c-11.4-0.2-18.3-6.7-18.3-16.7S1481.2,1214.9,1492.7,1214.6z M1354.4,1236.2  c-0.3,7.3-7.5,11.2-15.1,11.4c-11.5,0.3-23,0.4-34.5-0.1c-9.4-0.3-16.2-7.7-16.1-16.4c0-8.8,6.6-15.9,16-16.6  c5.4-0.3,10.9,0.1,17.5,0.1c0-15.6-0.1-29.5,0-43.5c0-3.5,0.2-7.1,0.9-10.6c1.5-8,7.6-13.2,15.4-13.3c8-0.1,15.6,3.7,15.9,11.3  C1355.4,1184.4,1355.4,1210.4,1354.4,1236.2z"/>
                    <path class="bg-react" d="M1339.4,961.5c-148.1-0.4-269.4,120.8-269.6,269.4c-0.3,148.3,120.3,269.9,269.1,269.7  c149.7-0.2,269-120.3,269.7-269.2C1609.2,1083.3,1488,961.9,1339.4,961.5z M1339.6,1466.8c-129.6,0.7-235.4-104.6-236.4-235.3  c0.9-131.8,105.7-235.6,235.7-236.1c129.3-0.4,235.1,104.9,236,235C1575.8,1360,1470.3,1466,1339.6,1466.8z"/>
                    <path class="bg-react" d="M0,0v2328h2442.6V0H0z M913,1047c2.8-0.8,5.9-1.2,8.9-1.2c31.2-0.1,62.4-0.1,93.5,0c2.7,0,5.5,0.4,8.1,1.2  c7.4,2,11.5,7.1,12,14.8c0.5,8-3.3,13.8-10.8,16.5c-3.5,1.3-7.5,1.5-11.3,1.5c-15,0-30-0.1-45-0.1s-30.1,0.1-45.1-0.1  c-3.8,0-7.8-0.3-11.3-1.6c-7.1-2.6-10.7-8.4-10.5-15.9C901.8,1054.6,905.6,1049.2,913,1047z M864.5,1130.8c2.7-0.5,5.4-0.6,8.2-0.6  c35.3,0,70.7-0.1,106,0c3.3,0,6.6,0.1,9.8,0.7c8.1,1.4,12.1,6.9,13.4,14.5c1.2,6.9-3.5,14.5-10.4,16.8c-3.3,1.1-7,1.5-10.5,1.5  c-18.1,0.1-36.2,0-54.2,0c-18.9,0-37.8,0.1-56.7,0c-11.5-0.1-18.7-6.3-19.1-16C850.6,1139.2,856.1,1132.3,864.5,1130.8z   M813.6,1247.4c-7.7-1.5-13.6-8.8-13.4-16.5c0.1-7.8,6.1-14.7,13.9-16c1.9-0.3,3.8-0.4,5.7-0.4c48.5,0,97-0.1,145.5,0  c12.5,0,20,6.6,19.8,16.9c-0.2,10.3-7.5,16.4-20.3,16.4c-24.1,0.1-48.2,0-72.3,0.1c-23.6,0-47.1,0-70.7,0  C819.1,1247.9,816.3,1247.9,813.6,1247.4z M850.8,1314.9c0.2-10.3,7.6-16.4,20.4-16.4c18.5,0,36.8,0.1,55.2,0.1  c19.5,0,38.9-0.2,58.3,0.1c9.3,0.1,15.2,5.4,16.9,13.8c1.4,7-2.1,14.6-9,17.6c-3.1,1.4-6.9,1.9-10.3,1.9c-37.3,0.1-74.5,0.2-111.8,0  C857.9,1332,850.6,1325.4,850.8,1314.9z M1023.8,1415.4c-2.9,0.8-5.9,1.1-8.9,1.1c-31,0.1-61.9,0.1-92.9,0  c-10.7,0-17.4-4.2-19.7-11.6c-3.7-11.6,4.4-21.9,18-22.2c16-0.2,32.2,0,48.4-0.1c15.6,0,31.2,0,46.9,0c6.8,0,13,1.6,17.2,7.7  C1039.1,1399.5,1034.6,1412.5,1023.8,1415.4z M1636.1,1291.4c-13.8,68.1-47,125.2-99.8,170.4c-57.7,49.5-125,73.8-200.8,73.2  c-67-0.5-127.7-21.5-180.9-62.3c-58.5-44.9-96.7-103.7-111.8-175.8c-21-100.1,2.7-189.9,69.9-267c45.4-52,103.4-83.8,171.5-96.4  c12.1-2.2,24.4-3.5,37.2-5.3c0-11,0-22.1,0-34.2c-5.8,0-11.5,0.2-17.2,0c-27.9-1.1-49.4-23-49.4-50.3c0-27.1,20.9-49.3,48.5-50.1  c24.1-0.7,48.3-0.7,72.4,0.1c26.7,0.9,47.8,23.7,47.6,50.2c-0.2,26.6-21.3,48.7-48,50c-6,0.3-12,0-18.7,0c0,11.7,0,22.8,0,34.8  c50,3.3,96.9,17.6,140.6,44.3c6.9-11.3,13.5-22.2,20.5-33.8c-8.7-5.3-17.1-10.4-25.4-15.5c-12.3-7.6-14.5-16-7.2-28.2  c10.4-17.4,20.9-34.7,31.6-51.9c7.1-11.4,15.7-13.6,27.1-6.7c27.3,16.3,54.4,32.8,81.5,49.4c11.3,6.9,13.3,15.6,6.5,27.2  c-10.4,17.4-20.9,34.7-31.6,52c-7.5,12.1-15.9,14-28.4,6.6c-8.2-4.8-16.4-9.8-25.3-15.2c-7.2,11.8-14.1,23.2-21.5,35.3  c4.2,3.6,8.3,7.1,12.3,10.6c61,54,95.7,121.5,103.4,202.7c0.2,2.1,1,4.2,1.5,6.2c0.2,12.9,0.2,26.1,0.2,39.3  C1640.3,1264.5,1638.8,1278.1,1636.1,1291.4z"/>
                </svg>
            </a>

            <div class="bg-text-wrapper">
                <h2 class="bg-text">
                    REACTIVITE
                </h2>
            </div>
        </div>
        <div class="swiper-slide" data-history="case-4" data-hash="TUNISIE" id="case-4" data-title="TUNISIE">
            <div class="left-section">
                <div class="case-intro-wrapper">
                    <h2>
                <span>
                    TUNISIE
                </span>

                    </h2>
                    <p class="case-text">
                        Nous vous offrons tous les avantages de l’externalisation offshore sans les inconvénients insignifiants qui peuvent s’avérer parfois gênants.</p>
                    <p class="case-tags">
                        <span>Avec ALTYX vous pouvez suivre l’avancement de votre projet sans barrières de langues et à vos horaires habituels.</span>
                    </p>
                    <p class="case-tags">
                        <strong>ALTYX est à 5 minutes de l'aéroport de Tunis et juste à 2 heures de temps des principales villes européennes.</strong>
                    </p>
                    <div class="three spacing"></div>
                    <p class="case-button">
                        <!-- <span class="styled-button-wrapper" id="case-4-button">
                          <a href="tunisie.php" class="styled button">
                            Lire plus
                          </a>
                        </span> -->
                    </p>
                </div>
            </div>
            <a href="#" class="position-case">
                <video loop="" autoplay="" muted="" playsinline="" class="brand-video" preload="">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/videos/tunisia.mp4" type="video/mp4">
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Calque_1" x="0px" y="0px" viewBox="0 0 2442.6 2328" style="enable-background:new 0 0 2442.6 2328;" xml:space="preserve">
                    <path class="bg-tn" d="M0,0v2328h2442.6V0H0z M1484.1,982.1l2.7,1.1l2.2,1.5l-3,10.8l-3.9,1.9l-5.4,2l-4.5,1.7l-2.3,1.3l-5.8,4.8  l-1.4,1.4l-0.9,2.9l-0.1,3.4l-0.5,3.4l-2.6,3.9l-4.8,3.9l-4.6-2.8l-5.2-5.2v-2.9l5-1.7l4.4,0.2l5.7-2.4l1.8-3.7l0.7-4.6l1.2-1.8  l16.3-20L1484.1,982.1z M1451.8,1165l-0.9,1.5l-6.3,5.4l-2.1,0.9l-8.5,4.8l-5.2,5.2l-3.3,3.6l-1.6,3.3l-1.1,2.7l-0.5-8.1l-0.7-2.2  l-0.9-1.5l-1.7-2l-2.5-2.3l-2.3-0.8h-1.7l-2.6,1l-1.7,2.2l-1,1.7l-2.9-0.1l-1.5-0.8l-1.7-3.4l-0.7-2.2v-2.9l0.7-7.5l0.3-2.8l1-11.6  l1.2-1.3l4.6-0.9l4.8-0.1l17.5,3.2l8.5,3.6l8.7,5.6l2.6,1.7l1.4,1.6L1451.8,1165z M1529.2,1406.4l-2.5,2.4l-5.4,3.3l-5,3.4  l-10.4,6.6l-13.5,6l-21.6,9.7l-5.8,2.7l-17.4,8.3l-22.8,12.1l-2.8,7.1l-4.5,9.1l-2.5,2.9l-15.7,10.8l-14.3,18.4l-13,17.8l-4.9,4.4  l-4.4,2.8l-3.9,0.1l-4.2-0.9l-4.4-0.7l-5.8-0.1l-5.3,1.9l-4.2,4.5l-22.9,34.2l-1,7.5l-0.9,6.8l7.1,19.1l7.7,21l6.7,21.6l4,29.7  l-2,7.3l-8.2,21.3l-1.7,4l-19.5,25l-15.4,22.6l-13.7,18.7l-4.3,3l-3.5-0.1l-16,4.4l-14.8,6.8l-15.2,7.8l-0.4-2.5l-2-9.8l-8-36.9  l-4.8-22.1l-8-36.8l-7.5-34.3l-5.4-24.5l-13-58.9l-4.9-22.1l-11.4-51.5l-3.5-15.6l-3.9-17l-7.4-6.1l-21.8-15.8l-26.7-19.3  l-19.5-13.9l-22-15.6l-9.7-7.1l-0.4-0.4l-0.9-7.2l-2.9-24.3l-0.6-5l-1.1-9.7l-0.9-7.3l-4.9-7.6l-17.8-27.5l-12.1-14.8l-5,0.6l-4-1.1  l-39-17.4l-2.9-3.1l-1.7-3.4l-0.8-6.8l-0.3-5.7v-9.7v-4.7v-3.6l-7.5-15.8l-17.7-29.9l-6.4-23.9l-3.5-13.8v-5.8l1.2-5l1.2-3.6  l1.4-6.5l-0.4-12.1l0.4-2l1.6-3.7l14.8-16.1l3.5-2.5l5-2l3-0.7l4.5-0.4l4.3-1.2l3.7-3l5.8-15.7l0.3-7.5l3.1-6.6l3.6-3.2l25.3-13.1  l5.2-2.2l5.5-1.9l2.1-0.9l7.7-1l2.3-3.6l5.3-2.2l4.3,1.1l0.2-3.7l0.6-3.7l2.2-1.5l0.6-3.3l-0.2-5.9l0.2-5.1l3.1-4.1l-1.1-4.7  l-1.5-16.5l1.6-21.9l6.6-25.5l10.8-14.9L1040,898l-3.2-4.1l-1.6-4.7l-0.9-6.2l0.1-4.5l1.4-6.6l1.5-4l1.8-10.2l2.2-12.4l-0.5-7  l-0.1-3.6l-1-6.8l-2.1-4l-3.9-3.6l-2.9-3.7l-1.2-3.6l-1.3-8.8l-0.3-7.1l0.9-11.7l2-7.2l0.4-0.6l1.2-6.2l2.2-17.4l2.1-19.1l2.2-15.4  l5.8-11.8l0.4-3.1l0.3-8l-0.9-5.8l-12.1-5.2h-6.8l-4.7-0.4l-4.3-2.1l-0.8-1.7l0.7-4l3.2-5.2l5.1-2.3l16.5-6.2l15.2-10.1l3.9-10.6  l0.1-4.2l24.5-15.6l-0.9-9l-1.5-10.6l6.9-2.2l15-1.5l9.2-3l4.8-2.8l3-2.1l2.8-2.1l2.9-2.1l3.7-3.7l2.8-3.3l2.1-2.8l1.8-4.4l8.7-7.4  l3.4-1.5l2.2-0.3l11.8-4.6l4.6-0.4l0.2-4.7l4-2.3l2.2-1.5l0.6-4.2l3.4,0.2l2.9,1.4l4.7,0.3l1.8-2.4l6.4,0.4l2.2-1.1l4-1.9l3.4-1.5  l2.2-2l5.2,0.3l4.3,0.2l3.5-1.9l2.6-2.3l2.6-1.5l3.4-0.6l1.6,0.9l3.1,1.6l2.9,0.6l2.4-1.5l2.9-3.2l1.8-3l6.9-1.3l9.6,0.3l3.6,0.2  l3.5,1.2l3.2,0.2l1.9,0.9l2.1,1.4l1.6,1.6l0.9,2.6l0.9,3.4l-0.8,2.9l-3.3,3.1l-4.6,1.5l-6.3,3.3l-4.7,2.1l1,8l3.6,5l4.6,1.8l3.3,0.1  l3.1-1.2l3.2-2.4l3.6-8l-4.6-6.3l1-3.1l4.4-2.9l2.8-1.5l3.2,0.2l1.6,1.8l1.9,0.5l2.2,2.1l5.9-0.8l22.2,8.9l9.2,5.7l-6.5,2.9  l-9.9-0.8l-2.2,4l9,3.2l3.1-0.1l-6.4,11.4l0.4,4.4l4.3,9.4l4.3,3.7l8,4.1l1.8,1.4l2.9,1.4l2.3,0.4l0.4,0.4h1.2l0.3,1.1l-0.6,1.2  l0.5,1.1l0.9,1.6l2.2,1.8l1.1,1l-0.1,0.8l-1.6,0.9l-0.1,0.8l-0.5,0.8l-1.3,1.3l-0.3,1.4l-0.3,0.5l-0.6,0.6l-0.5,0.7l-0.5,0.8l-1,0.6  l-0.1,1.1v0.6l0.2,0.8l-1.1,1l-1.3,1.2l-0.2,1.4l0.9,1.8l0.7,1.8l1.1,1.7l1.1,1l1.5,2.2l1.2,0.9l1.3,0.8l1.2,0.8l1.7,0.5l2.2,0.7  l1.3,0.1l1.7-0.4l3.1-1l3.4-1.6l3.9-2.4l6.1-4.2l3.4-7.5l2.9-7.1l5-3.7l3.5,0.3l4.9-0.1l3.4-0.3l5.4-1.4l10.2-7.3l5.9-4.2l7.5-8.1  l3.9-7.7l22-8l4.4,6.2l1.1,5.6l4.2,20.7l-3.9,6.4l-6.2,10.2l-2,2.2l-6.3,6.9l-2,2.9l-5.4,8.6l-5.3,8.4l-5,10l-4.3,8.8l-2.2,7.1  l-1.4,3.6l-2.5,3.1l-4.7,1.2l-3.7,0.9l-3.2,1.1l-7,2.3l-15.4,6.5l-3.7,2.4l-2.6,2.3l-1.2,1.4l-1.4,2.1l-2.2,4.1l-2.6,7.3l-1.7,5.8  l-2,13.6v3.5v7.5l2.3,10.8l1.2,3.4l2.6,2.9l2.3,1.4l2.7,0.9l0.6,3.5l0.6,3.1l0.4,2.9l2.1,2.1l1.8,1.6l2.3,2.8l2.4,4l2.2,3.4l1.4,1.7  l1.4,1.7l1.2,1.7l1.6,1.9l1.7,2.1l3,2.9l1.6,1.9l2.4,3.3l1.9,1.1l1.7,1.1l1.8,1.2l2.4,0.3l2.3,0.3h1.6l1.3-0.7l1.3-1.6l2.1,0.1  l2.1,0.6l1.4-1.1l0.8,1l1.8,1.7l-0.1,2.8l-1.4,1.5l-1.3,1.1l-0.1,1.4l1.1,2.7l0.5,2l1.3,1.6l0.9,1l1.7,0.6l1.5-0.4l3.1,0.4l0.6,1  l2.1,0.4l0.6,0.8l1.7,0.6l1.7,1.3l2.7,0.8l2.2-0.1l1.4,1.5l2.1,1.5l2.2,0.4l2.6,1.8l0.9,0.9l3,1.4l0.8,2.1l-1.3,2.2l-1,2.4l-0.7,1.4  l-0.7,1l0.9,2.7l0.5,2.5l2,2.6l2.2,1.8l-1.9,5v4l-2.5,3.6l0.7,4.3l-0.2,4l-0.1,2.1l-3.4,0.2l-0.1,3.3l2.3,5.2l2,3.2l1.8,2.2l0.5,2.1  l2.2,2.8l4.4,3.1l4.2,3.1l0.7,2.5l-0.1,2.1l-2.5-0.8l-2.9-1l-1.8,1.8l-0.5,2.7l-0.1,2.9l-1.5,1.6l-1.5,0.3l-2.2,2.1l-1.2,3.2  l-0.8,4.6l-1.2,3.2l-0.1,3.5l0.7,4.5l0.3,2.5l-0.4,3.7l-2.4,3.2l-2.2,1.3l-4.3,1.2l-3,1.9l-1.1,1.6l-1.2,3.4l0.1,3.5l0.6,5.1  l-1.5,4.8l-3.3,3.7l-3.1,3.5l-1.4,4.2l-2.6,2.1l-1.5,1.4l-0.1,3.5l-2.6,1.9l-4.4,2.2l-3.6,2.1l-2.6,1.7l-0.5,4.1l-1,2.7l2,3.5  l-1.7,2.4l-2.9,2.9l-5.5,2.4l-7.8,4.4l-0.9,2.2l-3,1.3l0.2,5.9l-0.2,5.5l-10.6,1.5l-5.5-0.3l-3,2.7l-5.4,5.6l-5.3,4.8l-4.9,4  l-2.6,1.1l-0.2,4.2l-2.6,1.1l-8-1.3l-2.7,4.1l-2.6,1.9l-3.5,3.5l-6,0.1l-2.6,2.7l-2.6,2.7l-5.7,2.6l-5.2,1.8l-1.8,3.2l-0.2,5.5l-1,5  l-4.3,10.2l-0.3,7.1l0.6,6.3l0.4,9.6l0.6,10.5l2.5,3.7l4.8,6.8l5.9,8.4l3.1,2.9l3.2,3l2.8,2.7l6,5.7l7.3,6.4l2.6,2.2l3.6,2.5  l5.2,2.3l10.1,4l3.2,2.1l7.9-1.9l11.4-4l4-2.2l4.2-3.1l5.4-1.9l3.2,1.5l1.3,4.4l-1.1,13.2l6.4-1.2l-0.2,5.9l-0.6,4.6l-7,5.5  l-2.4,5.7l9.1,3.2l24-11.1l3-5.5l-1.4-4.7l-2.8-3.6l4.8-2.9l7-1.2l7,2l4.6,2.3l3.5,3.3l1.9,3l2.3,4.9l1.1,4.9l-0.1,5.3l-1.5,5.7  l-0.4,5.5l1.8,15.4l1.2,10.3l8.1,13.5l25.5,4.9l3.3,0.2l10.1-1.3l7.6,0.2l6.7,2.9l-0.2,4.4l-0.4,3.7l-0.8,4.2l-1.8,5l-1.6,5.6  l-1.5,17.9l-1,14.1l-1.6,38l0.9,5.1l3.2,4.3l3.4,3.1l3,2.4l3.2,3.9l3.2,7.6l0.2,5.8L1529.2,1406.4z"/>
                </svg>
            </a>

            <div class="bg-text-wrapper">
                <h2 class="bg-text">
                    TUNISIE
                </h2>
            </div>
        </div>
        <div class="swiper-slide" data-history="case-5" data-hash="SERVICES" id="case-5" data-title=" NOS SERVICES">
            <div class="left-section">

                <div class="case-intro-wrapper">
                    <h2>
                <span>
                  NOS SERVICES
                </span>

                    </h2>
                    <p class="case-text">
                        ALTYX propose des services d’externalisation nearshore. Cette offre permet de répondre aux attentes des clients en termes d’optimisation des coûts, sans pour autant sacrifier la qualité des développements.
                    </p>
                    <p class="case-button">
                <span class="styled-button-wrapper" id="case-5-button">
                  <a href="<?php echo get_page_link(7); ?>" class="styled button">
                    lire plus
                  </a>
                </span>
                    </p>
                </div>
            </div>
            <a href="#" class="position-case">
                <video loop="" autoplay="" muted="" playsinline="" class="brand-video" preload="">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/stock/services.mp4" type="video/mp4">
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 2442.6 2328" style="enable-background:new 0 0 2442.6 2328;" xml:space="preserve">
                    <g>
                        <circle class="bg-services" cx="1221.3" cy="824" r="25.8"/>
                        <circle class="bg-services" cx="881.4" cy="1164" r="25.8"/>
                        <circle class="bg-services" cx="1221.3" cy="1504" r="25.8"/>
                        <path class="bg-services" d="M999.2,941.9c10.1-10.1,10.1-26.5,0-36.5c-10.1-10.1-26.5-10.1-36.6,0c-10,10-10,26.4,0,36.5   C972.7,952,989.1,952,999.2,941.9z"/>
                        <circle class="bg-services" cx="980.9" cy="1404.4" r="25.9"/>
                        <path class="bg-services" d="M1480.1,941.9c10.1-10.1,10.1-26.5,0-36.6c-5-5-11.7-7.6-18.3-7.6c-6.6,0-13.2,2.5-18.3,7.6   c-5,4.9-7.6,11.4-7.6,18.3c0,6.9,2.7,13.4,7.6,18.3C1453.6,952,1470,952,1480.1,941.9z"/>
                        <path class="bg-services" d="M1443.4,1386.1c-4.9,4.9-7.6,11.4-7.6,18.3c0,6.9,2.7,13.4,7.6,18.3c10.1,10.1,26.5,10.1,36.6,0   c10-10.1,10-26.5,0-36.6C1469.9,1376,1453.5,1376,1443.4,1386.1z"/>
                        <circle class="bg-services" cx="1561.3" cy="1164" r="25.8"/>
                    </g>
                    <path class="bg-services" d="M0,0v2328h2442.6V0H0z M1418.5,880.4c23.8-23.8,62.5-23.8,86.4,0c23.8,23.8,23.8,62.5,0,86.4  c-11.9,11.9-27.5,17.9-43.2,17.9c-15.6-0.1-31.3-6-43.2-17.9c-11.5-11.5-17.9-26.9-17.9-43.2C1400.6,907.3,1407,892,1418.5,880.4z   M1473.3,1163.5c0,9.7-7.9,17.6-17.6,17.6h-1.5c-9.7,0-17.6-7.9-17.6-17.6s7.9-17.6,17.6-17.6h1.5  C1465.4,1145.9,1473.3,1153.8,1473.3,1163.5z M1373.6,986.8l1-1c6.9-6.9,18-6.9,24.9,0c6.9,6.9,6.9,18,0,24.9l-1,1  c-3.5,3.5-8,5.2-12.5,5.2s-9-1.7-12.4-5.2C1366.7,1004.8,1366.7,993.7,1373.6,986.8z M1324.9,1032.6l-14.6,21.8l-21.8-14.6  l14.6-21.8L1324.9,1032.6z M1287.2,1039.1l-24.2-10l10-24.2l24.2,10L1287.2,1039.1z M1241,997.8l25.7,5.1l-5.1,25.8l-25.8-5.1  L1241,997.8z M1221.8,948.7c-9.7,0-17.6-7.9-17.6-17.6v-1.5c0-9.7,7.9-17.6,17.6-17.6s17.6,7.9,17.6,17.6v1.5  C1239.4,940.8,1231.5,948.7,1221.8,948.7z M1221.3,762.9c33.7,0,61.1,27.4,61.1,61.1s-27.4,61.1-61.1,61.1s-61.1-27.4-61.1-61.1  S1187.6,762.9,1221.3,762.9z M1068,985.8l1,1c6.9,6.9,6.9,18,0,24.9c-3.4,3.4-7.9,5.2-12.4,5.2s-9-1.7-12.5-5.2l-1-1  c-6.9-6.9-6.9-18,0-24.9S1061.1,978.9,1068,985.8z M937.7,880.4c23.8-23.8,62.5-23.8,86.4,0c23.8,23.8,23.8,62.5,0,86.4  c-11.5,11.5-26.9,17.9-43.2,17.9c-16.3,0-31.6-6.4-43.2-17.9C913.9,943,913.9,904.3,937.7,880.4z M1006,1163.5  c0,9.7-7.9,17.6-17.6,17.6h-1.5c-9.7,0-17.6-7.9-17.6-17.6s7.9-17.6,17.6-17.6h1.5C998.1,1145.9,1006,1153.8,1006,1163.5z   M820.2,1164c0-33.7,27.4-61.1,61.1-61.1c33.7,0,61.1,27.4,61.1,61.1s-27.4,61.1-61.1,61.1S820.2,1197.7,820.2,1164z M1024.1,1447.6  c-11.9,11.9-27.5,17.9-43.2,17.9c-15.6,0-31.3-6-43.2-17.9c-23.8-23.8-23.8-62.5,0-86.4c23.8-23.8,62.6-23.8,86.4,0  C1047.9,1385,1047.9,1423.7,1024.1,1447.6z M1069.1,1341.2l-1,1c-3.5,3.5-7.9,5.2-12.5,5.2s-9.1-1.8-12.5-5.2  c-6.9-6.9-6.9-18,0-24.9l1-1c6.9-6.9,18.1-6.9,25,0C1076,1323.2,1076,1334.3,1069.1,1341.2z M1080.5,1164.2l-26.2-1.5l0.4-8  c2.3-41,19.5-79.6,48.6-108.7c27.2-27.2,63.2-44.2,101.4-48l3.5-0.3v-0.5h4.5h21.7v26.2h-20.1l-7,0.7c-32.2,3.2-62.5,17.6-85.4,40.5  c-24.5,24.5-39,57-41,91.6L1080.5,1164.2z M1143.2,1088.2c20.2-20.2,47.1-31.3,75.8-31.3c20.1,0,39.8,5.7,56.7,16.2v-8.4h22.4v42.7  h-42.7v-19.8c-11.3-5.4-23.8-8.2-36.5-8.2c-22.6,0-43.9,8.8-59.9,24.8s-24.8,37.3-24.8,60c0,22.7,8.8,44,24.8,60s37.3,24.8,60,24.8  c22.7,0,44-8.8,60-24.8l4.8-4.8l15.8,15.8l-4.8,4.8c-20.2,20-47.2,31.1-75.8,31.1c-28.7,0-55.6-11.1-75.8-31.3  C1101.4,1198,1101.4,1130,1143.2,1088.2z M1201.5,1330.1l-25.7-5.1l5.1-25.7l25.7,5.1L1201.5,1330.1z M1221.8,1379.3  c9.7,0,17.6,7.9,17.6,17.6v1.5c0,9.7-7.9,17.6-17.6,17.6s-17.6-7.9-17.6-17.6v-1.5C1204.2,1387.2,1212.1,1379.3,1221.8,1379.3z   M1117.7,1295.5l14.5-21.8l21.8,14.5l-14.5,21.8L1117.7,1295.5z M1155.3,1289l24.2,10l-10,24.2l-24.2-10L1155.3,1289z   M1221.3,1565.1c-33.7,0-61.1-27.4-61.1-61.1s27.4-61.1,61.1-61.1c33.7,0,61.1,27.4,61.1,61.1S1255,1565.1,1221.3,1565.1z   M1237.9,1329.9l-3.5,0.3l0,0l-26.2,0.6v-26.2h20.1l7-0.7c32.2-3.2,62.5-17.6,85.4-40.5c24.5-24.5,39-57,41-91.6l0.4-8l26.2,1.4  l-0.4,8c-2.3,41-19.5,79.6-48.6,108.7C1312.1,1309.1,1276.1,1326.2,1237.9,1329.9z M1387.1,1347.4c-4.6,0-9.1-1.8-12.5-5.2l-1-1  c-6.9-6.9-6.9-18,0-24.9c6.9-6.9,18-6.9,24.9,0l1,1c6.9,6.9,6.9,18,0,24.9C1396.1,1345.7,1391.6,1347.4,1387.1,1347.4z   M1504.9,1447.6c-11.9,11.9-27.5,17.9-43.2,17.9s-31.3-6-43.2-17.9c-11.5-11.5-17.9-26.9-17.9-43.2s6.4-31.6,17.9-43.2  c23.8-23.8,62.6-23.8,86.4,0C1528.7,1385,1528.7,1423.7,1504.9,1447.6z M1561.2,1225.1c-33.7,0-61.1-27.4-61.1-61.1  s27.4-61.1,61.1-61.1s61.1,27.4,61.1,61.1S1594.9,1225.1,1561.2,1225.1z"/>
                </svg>
            </a>

            <div class="bg-text-wrapper">
                <h2 class="bg-text">
                    SERVICES
                </h2>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
</div>




<?php
get_footer();
?>
