<?php
header('Content-Type: text/html; charset=ISO-8859-1');
header('Content-Type: text/html; charset=utf-8');

?>

<div class="mainpage contact-us">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">CONTACTO</h2>
            <span class="mainpage-overlay-content">INICIO</span><span
                    class="mainpage-overlay-second-content">CONTACTO</span>
        </div>
    </div>
    <div class="position-center">
        <div class="contact-info">
            <h1>Informacion del contacto</h1>
            <div class="row">
                <div class="contact-us-blocks location">
                    <div class="item">
                        <div class="individual-profile"><span class="fas fa-map-marker fa-1x"></span>198 West 21st
                            Street,
                        </div>
                        <div class="individual-profile">Suite 721 New York NY 10016</div>
                    </div>
                </div>

                <div class="contact-us-blocks phone">
                    <span class="fas fa-phone fa-1x"></span>

                    <div>+1 234 234 2323</div>
                </div>

                <div class="contact-us-blocks email">
                    <span class="far fa-paper-plane fa-1x"></span>

                    <div>info@diazapps.com</div>
                </div>

                <div class="contact-us-blocks website">
                    <span class="fas fa-globe fa-1x"></span>

                    <div>diazapps.com</div>
                </div>
            </div>
        </div>


        <div class="social-media-links">
            <h1>LEAN en las redes sociales</h1>
            <div class="row">
                <div class="social-media-blocks facebook">
                    <div class="image-container facebook"></div>
                    <div class="details"><p>LEAN Ayuda Humanitaria</p></div>
                </div>
                <div class="social-media-blocks twitter">
                    <div class="image-container twitter"></div>
                    <div class="details"><p>@LeanEmergente</p></div>
                </div>

                <div class="social-media-blocks instagram">
                    <div class="image-container instagram"></div>
                    <div class="details"><p>@LeanAyudaHumanitaria</p></div>
                </div>

                <div class="social-media-blocks gmail">
                    <div class="image-container gmail"></div>
                    <div class="details"><p>@Lean emergente@gmail.com</p></div>
                </div>
            </div>
        </div>

        <div class="contact-us-form">
            <h1>Estar en contacto</h1>
            <?php $this->load->view('forms/contactus-form')?>
    </div>
</div>

<div class="social-media-content">
    <div class="label">
        <STRONG>LEAN EN LAS REDES SOCIALES</STRONG>
    </div>
    <div class="footer-elements">
        <span class="fab fa-twitter fa-1x"></span>
        <span class="fab fa-facebook-f fa-1x"></span>
        <span class="fab fa-instagram fa-1x"></span>
    </div>
</div>

