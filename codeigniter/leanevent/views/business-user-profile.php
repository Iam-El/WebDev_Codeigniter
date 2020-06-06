<div class="mainpage business-user-profile">
    <div class="banner-image-wrapper">
        <div class="banner-image-overlay-text">
            <h2 id="banner-image">PERFIL</h2>
            <span class="mainpage-overlay-content">INCIO</span><span
                    class="mainpage-overlay-second-content">PERFIL</span>
        </div>
    </div>
    <div class="position-center">
        <div class="profile-details">
            <h3>Tu informaci&#243n del Perfil</h3>
            <?php if ($emailId){ ?>
            <div class="row">
                <div class="column3x">
                    <div class="item">
                        <div class="individual-profile"><span class="fas fa-book fa-1x"></span>
                            <?php echo $firstName ?>
                        </div>
                    </div>
                    <div class="item">
                        <div class="individual-profile"><span
                                    class="fas fa-book fa-1x"></span><?php echo $lastName ?>
                        </div>
                    </div>
                    <div class="item">
                        <div class="individual-profile"><span
                                    class="fas fa-user fa-1x"></span> <?php echo $firstName . " " . $lastName ?>
                        </div>
                    </div>
                </div>
                <div class="column3x">

                    <div class="item">
                        <div class="individual-profile"><span
                                    class="fas fa-map-marker fa-1x"></span><?php echo $address ?></div>
                    </div>
                    <div class="item">
                        <div class="individual-profile"><span
                                    class="fas fa-phone fa-1x"></span><?php echo $phone ?></div>
                    </div>
                    <div class="item">
                        <div class="individual-profile"><span
                                    class="fas fa-paper-plane fa-1x"></span><?php echo $emailId ?>
                        </div>
                    </div>
                </div>
                <div class="column3x">
                    <div class="business-user-image"
                         style="background-image: url('<?php echo $userImage ? base_url($userImage) : base_url('assets/image/nologo.png'); ?>');"></div>
                </div>
            </div>
        </div>
        <div class="update-profile">
            <h2>Estar en contacto</h2>
            <div class="update-profile-form">
                <?php echo form_open_multipart('business_user_profile/update') ?>
                <div class="row first-row">
                    <div class="column2x">
                        <div class="row">
                            <div class="firstName full-width">

                                <?php
                                echo form_label('Nombres y Apellido');
                                echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'Tu Nombre y Apellido', 'value' => $firstName . " " . $lastName, 'disabled' => 'disabled']);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="lastName full-width">
                                <?php
                                echo form_label('Nombre de la Fundacion');
                                echo form_input(['name' => 'foundation', 'class' => 'field', 'placeholder' => 'Nombre de la Fundacion', 'value' => $foundation, 'disabled' => 'disabled']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="column2x">
                        <div class="business-user-image"
                             style="background-image: url('<?php echo $userImage ? base_url($userImage) : base_url('assets/image/nologo.png'); ?>');"></div>
                        <button class="button-primary user-profile-icon"
                                onclick=document.getElementById("user-image").click() type="button">Seleccionar Logo
                            <input type="hidden" name="MAX_FILE_SIZE"/>
                            <input type="file" hidden id="user-image" name="userImage">
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="mail full-width">

                        <?php
                        echo form_label('Correo');
                        echo form_input(['name' => 'correo', 'class' => 'field', 'placeholder' => 'Tu correo electronico', 'value' => $emailId, 'disabled' => 'disabled']);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="phone column3x">

                        <?php
                        ?><span class="error-php"> <?php echo form_error('phone'); ?> </span> <?php
                        echo form_label('Telefono');
                        echo form_input(['name' => 'phone', 'class' => 'field', 'placeholder' => 'xxx-xxx-xxxx', 'value' => $phone]);
                        ?>

                    </div>
                    <div class="user column3x">
                        <?php
                        echo form_label('Usuario');
                        echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'Nombre de Usuario', 'value' => $firstName, 'disabled' => 'disabled']);
                        ?>

                    </div>
                    <div class="password column3x">

                        <?php
                        ?><span class="error-php"> <?php echo form_error('password'); ?> </span> <?php
                        echo form_label('Contrasena');
                        echo form_password(['name' => 'password', 'class' => 'field', 'placeholder' => '0 to 8 Non Space characters', 'value' => $password]);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <span class="info-primary">Nota:</span>
                </div>
                <div class="row">
                    <div>Solo puede cambiar los datos (Telefono, Contrasena y logo)</div>
                </div>
                <div class="row">
                    <?php
                    echo form_hidden('profile', 1);
                    echo form_button(['class' => "button-primary user-profile-button", 'name' => 'update-profile', 'content' => 'Guardar Cambios', 'type' => 'submit'])
                    ?>
                </div>
                <?php form_close() ?>
            </div>
        </div>
        <?php } ?>
    </div>

