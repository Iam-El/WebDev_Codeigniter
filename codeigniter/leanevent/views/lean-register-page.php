<?php
header('Content-Type: text/html; charset=ISO-8859-1');

?>
<div class="mainpage lean-register-page">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">REG&#205STRATE</h2>
            <span class="mainpage-overlay-content">INCIO</span><span
                    class="mainpage-overlay-second-content">REG&#205STRATE</span>
        </div>
    </div>
    <div class="position-center">
        <div class="register-user-wrapper">
            <h3 class="register-heading">Elija el tipo de usuario para registrarse</h3>
            <div class="user-buttons">


                <button type="submit" class="button-primary user-roles individual"
                        onclick="redirect('<?php echo base_url(); ?>register_individual')">Como Individual
                </button>


                <button type="submit" class="button-primary user-roles business"
                        onclick="redirect('<?php echo base_url(); ?>register_business')">Como Negacio O foundation
                </button>

                    <button type="submit" class="button-primary user-roles agent"
                        onclick="redirect('<?php echo base_url(); ?>register_agent')">Como agente lean
                </button>


            </div>
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

