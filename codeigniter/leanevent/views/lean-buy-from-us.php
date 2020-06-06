<div class="mainpage buy-from-us">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">COMPRAR BOLETOS</h2>
            <span class="mainpage-overlay-content">INCIO</span><span
                    class="mainpage-overlay-second-content">COMPRAR BOLETOS</span>
        </div>
    </div>
    <div class="position-center">
        <div class="align-text"><span class="line-colour">--------</span><strong>NUESTROS EVENTOS</strong><span
                    class="line-colour">--------</span>
            <p class="buy-from-us-content">Tu asistencia es importante para nosotros visitanos en los eventos qu estamos
                realizando.</p>
        </div>
        <div class="image-sameline">
            <?php if ($fetch_event->num_rows() > 0) {


                foreach ($fetch_event->result() as $row) {
                    ?>

                    <?php echo form_open_multipart('buyfromus_cart/' . $row->id); ?>
                    <input hidden value="<?php echo $row->id; ?>" name="eventId"/>
                   <?php echo form_hidden('eventId', $row->id); ?>
                    <button type="submit" class="product-details" name="buy">
                        <?php echo form_hidden('buy', 1); ?>
                        <div class="carousel-image-item item-1"
                             style="background-image: url('<?php echo $row->image ? base_url($row->image) : " base_url('assets/image/minibaner4.jpg')"; ?>');">
                            <div class="info-primary">New</div>
                        </div>
                        <div class="event-info">
                            <div class="name"><?php echo $row->eventName; ?></div>
                            <div class="price">$<?php echo $row->cost; ?></div>
                        </div>
                    </button>
                    <?php echo form_close() ?>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>


<div class="bottom-content-wrapper">
    <div class="left">
        <div><span class="far fa-paper-plane fa-1x"></span>Reg&#237strese para recibir un</div>
        <div>boletin</div>
    </div>
    <?php $this->load->view('forms/subscriber-form-buyfromus', array($msg)) ?>

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
</div>


