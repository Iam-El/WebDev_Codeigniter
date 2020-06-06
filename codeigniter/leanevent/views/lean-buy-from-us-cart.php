<div class="mainpage buy-from-us-cart">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">COMPRAR BOLETOS</h2>
            <span class="mainpage-overlay-content">INCIO</span><span
                    class="mainpage-overlay-second-content">COMPRAR BOLETOS</span>
        </div>
    </div>
    <?php if ($fetch_event->num_rows() > 0) {


        foreach ($fetch_event->result() as $row) {
            ?>
            <div class="position-center buy-from-us">
                <?php echo form_open_multipart('buyfromus_cart/addToCart/' . $row->id); ?>
                <div class="row">
                    <div class="column2x left-content">

                        <img class="buy-from-us-cart-image" src="<?php echo base_url($row->image); ?>">
                        <div class="info-delete">Sale</div>
                    </div>
                    <div class="column2x right-content">
                        <h4 class="buy-from-us-cart-heading"><?php echo $row->eventName; ?></h4>
                        <div class="price-rating">
                            <h4 class="buy-from-us-cart-price">$<?php echo $row->cost; ?></h4>
                            <div class="product-rating">
                                <span class="fas fa-star fa-1x"></span>
                                <span class="fas fa-star fa-1x"></span>
                                <span class="fas fa-star fa-1x"></span>
                                <span class="fas fa-star fa-1x"></span>
                                <span class="fas fa-star-half-alt fa-1x"></span>
                                <span>(74 Rating)</span>
                            </div>
                        </div>
                        <div class="product-description">
                            <p class="buy-from-us-cart-content"><?php echo $row->eventDescription; ?></p>
                        </div>

                        <input type="number" name="eventId" hidden class="field" value="<?php echo $row->id; ?>"/>
                        <div class="quantity">
                            <p>Numero de Entradas</p>
                        </div>
                        <div class="product-quantity">
                            <button type="button" class="quantity-subtract" onclick="decreaseQuantity(event)"><span
                                        class="fas fa-minus"></span></button>
                            <input type="number" name="quantity" id="quantity" class="quantity-value field" value="0"/>

                            <button type="button" class="quantity-add" onclick="increaseQuantity(event)"><span
                                        class="fas fa-plus"></span></button>
                        </div>
                        <div class="mail full-width">
                            <label for="email">Correo Electronico</label>
                            <input id="email" type="text" placeholder="Tu correo electronico" class="field"
                                   name="email"/>
                        </div>
                        <div class="product-buy">
                            <?php form_hidden('add', 1) ?>
                            <button class="button-primary" name="buy-product"><span
                                        class="fas fa-shopping-cart fa-1x"></span>Comprar
                            </button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
                <div class="row product-tabs">
                    <div class="tab-headers">
                        <div class="tab-header column3x active tab-1">
                            <button onclick="showTab(event, 1)">DESCRIPCION</button>
                        </div>
                        <div class="tab-content tab-content-1 mobile active">
                            <?php echo $row->eventDescription; ?>
                        </div>
                        <div class="tab-header column3x tab-2">
                            <button onclick="showTab(event, 2)">ENCARGADOS</button>
                        </div>
                        <div class="tab-content tab-content-2 mobile">
                            <?php echo $row->eventDescription; ?>
                        </div>
                        <div class="tab-header column3x tab-3">
                            <button onclick="showTab(event, 3)">PATROCINANTES</button>
                        </div>
                        <div class="tab-content tab-content-3 mobile">
                            <?php echo $row->eventDescription; ?>
                        </div>

                    </div>
                </div>
                <div class="row tab-contents">
                    <div class="tab-content tab-content-1 active desktop">
                        <?php echo $row->eventDescription; ?>
                    </div>
                    <div class="tab-content tab-content-2 desktop">
                        <?php echo $row->eventDescription; ?>
                    </div>
                    <div class="tab-content tab-content-3 desktop"><?php echo $row->eventDescription; ?>
                    </div>
                </div>
            </div>

            <?php
        }
    }
    ?>
    <div class="bottom-content-wrapper">
        <div class="left">
            <div><span class="far fa-paper-plane fa-1x"></span>Reg&#237strese para recibir un</div>
            <div>boletin</div>
        </div>
        <?php $this->load->view('forms/subscriber-form-buyfromus-cart',  array([$msg])) ?>


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
