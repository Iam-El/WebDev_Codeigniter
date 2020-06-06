<?php
header('Content-Type: text/html; charset=utf-8');

?>

<div class="mainpage homepage">
    <div id="slider">
        <figure>
            <img src="<?php echo base_url('assets/image/bannerlean1.jpg')?>">
            <img src="<?php echo base_url('assets/image/bannerlean2.jpg')?>">
            <img src="<?php echo base_url('assets/image/bannerlean3.jpg')?>">
        </figure>
        <ul class="slider-controls">
            <li class="carousel-item image-1 active"></li>
            <li class="carousel-item image-2"></li>
            <li class="carousel-item image-3"></li>
        </ul>
    </div>

    <div class="overlay-image-wrapper">
        <img src="<?php echo base_url('assets/image/logo-blanco.png')?>" class="overlay-image">
    </div>
    <div class="align-text"><span
                class="line-colour">---------</span><strong>¿QUÉ HACEMOS?</strong><span
                class="line-colour">---------</span>
        <p class="content-margin">La asociación civil LEAN fue creada con el objetivo de ayudar,
            a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la
            grave escasez de medicinas e insumos médicos en que se encuentra el país.
            Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones
            en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones
            se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando
            a llevar asistencia humanitaria a Venezuela.
            Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.
        </p>
    </div>
    <div class="homepage-content">

        <div class="row">
            <div class="column3x">
                <div>478</div>
                <div>voluntarios</div>
            </div>
            <div class="column3x">
                <div>60,000</div>
                <div>PERSONAS BENEFICIADAS</div>
            </div>
            <div class="column3x">
                <div>45</div>
                <div>ALIADOS</div>
            </div>
        </div>
    </div>
    <div class="banner-image-wrapper bottom">
        <div class="banner-image-overlay-text">
            <h4>"La injusticia,en cualquier parte,es una amenaze a la justicia en todas partes."</h4>
            <p id="homepage-quote">Martin Luthar King</p>
        </div>
    </div>
    <div class="position-center">
        <div class="align-text"><span class="line-colour">---------</span><strong>ALIADOS</strong><span
                    class="line-colour">---------</span></div>
        <div class="carousel-images">
            <img class="column" src="<?php echo base_url('assets/paralacarpetaimagenesqueleentragaalosestudiantes/logo1.PNG')?>">
            <img class="column" src="<?php echo base_url('assets/paralacarpetaimagenesqueleentragaalosestudiantes/logo2.PNG')?>">
            <img class="column" src="<?php echo base_url('assets/paralacarpetaimagenesqueleentragaalosestudiantes/logo3.PNG')?>">
            <img class="column" src="<?php echo base_url('assets/paralacarpetaimagenesqueleentragaalosestudiantes/logo4.PNG')?>">
        </div>
        <div class="homepage-navigation">
            <span class="fas fa-chevron-left fa-1x"></span>
            <span class="fas fa-chevron-right fa-1x"></span>
        </div>
    </div>
    <div class="bottom-content-wrapper">
        <div class="left">
            <div><span class="far fa-paper-plane fa-1x"></span>Reg&#237strese para recibir un</div>
            <div>boletin</div>
        </div>

        <?php $this->load->view('forms/subscriber-form-homepage', array([$msg])) ?>


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