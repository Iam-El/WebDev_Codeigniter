<?php

header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/html; charset=ISO-8859-1');


?>

<div class="mainpage lean-login-page">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">INICIAR SESI&#210N</h2>
            <span class="mainpage-overlay-content">INCIO</span><span class="mainpage-overlay-second-content">INICIAR SESI&#210N</span>
        </div>
    </div>
    <div class="position-center">
        <div class="start-session-form">

            <h1>Iniciar Sesi&#243n</h1>
            <?php $this->load->view('forms/login-form' , array([$msg]))?>
        </div>
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


