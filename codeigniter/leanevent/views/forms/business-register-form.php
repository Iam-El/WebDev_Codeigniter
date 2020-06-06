<?php

echo form_open('register_business');
?>
<div id="lean-register-page-recover-popup" class="modal">
    <div class="pop-up">
        <h1 class="pop-up-header">Registro individual</h1>
        <div class="pop-up-body">
            <div class="row">
                <div class="email-add column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('email'); ?> </span> <?php
                    echo form_label('Correo');
                    echo form_input(['name' => 'email', 'class' => 'field', 'placeholder' => 'xxx@xxx.com', 'value' => set_value('email')]);
                    ?>
                </div>
                <div class="password column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('password'); ?> </span> <?php
                    echo form_label('Contrasena');
                    echo form_password(['name' => 'password', 'class' => 'field', 'placeholder' => '0 to 8 Non Space characters', 'value' => set_value('password')]);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="user-name column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('username'); ?> </span> <?php
                    echo form_label('Nombre');
                    echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'Nombre', 'value' => set_value('username')]);
                    ?>
                </div>
                <div class="last-name column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('surname'); ?> </span> <?php
                    echo form_label('Apellido');
                    echo form_input(['name' => 'surname', 'class' => 'field', 'placeholder' => 'Apellido', 'value' => set_value('surname')]);
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="direction column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('direction'); ?> </span> <?php
                    echo form_label('Direcc&#237on');
                    echo form_input(['name' => 'direction', 'class' => 'field', 'placeholder' => 'Direcc&#237on', 'value' => set_value('direction')]);
                    ?>
                </div>
            </div>

            <div class="business-foundation full-width">
                <?php
                ?><span class="error-php"> <?php echo form_error('foundation'); ?> </span> <?php
                echo form_label('Foundation');
                echo form_input(['name' => 'foundation', 'class' => 'field', 'placeholder' => 'Foundation', 'value' => set_value('foundation')]);
                ?>
            </div>

            <div class="row">
                <div class="city column2x">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('ciu'); ?> </span> <?php
                    echo form_label('Ciudad');
                    echo form_input(['name' => 'ciu', 'class' => 'field', 'placeholder' => 'Ciudad', 'value' => set_value('ciu')]);
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="state three-fouth-width">
                    <span class="error-php"> <?php echo form_error('state'); ?> </span>
                    <label for="state" class="field-label">Estado</label>
                    <input list="state" name="state" placeholder="Escoger..." class="field state">
                    <datalist id="state3">
                        <option value="TEXAS">TEXAS</option>
                        <option value="CALIFORNIA">CALIFORNIA</option>
                        <option value="COLORADO">COLORADO</option>
                        <option value="NEW-ORLEANS">NEW-ORLEANS</option>
                    </datalist>
                </div>

                <div class="pin half-width">
                    <?php
                    ?><span class="error-php"> <?php echo form_error('pin'); ?> </span> <?php
                    echo form_label('Codigal Postal');
                    echo form_input(['name' => 'pin', 'class' => 'field', 'placeholder' => 'American Zip Code', 'value' => set_value('pin')]);
                    ?>
                </div>
            </div>


            <div class="row">
                <div class="business-type">

                    <?php
                    ?><span class="error-php"> <?php echo form_error('business-type'); ?> </span> <?php
                    echo form_label('Seleccione el tipo de negocio');
                    ?>

                    <div class="options">
                        <?php
                        echo form_label('Tipo de negacio');
                        echo form_radio(['name' => 'business-type', 'value' => 'businesstype1', 'content' => 'Tipo de negocio']);
                        echo form_label('Tipo de negacio');
                        echo form_radio(['name' => 'business-type', 'value' => 'businesstype2']);
                        echo form_label('Tipo de negacio');
                        echo form_radio(['name' => 'business-type', 'value' => 'businesstype3']);
                        ?>

                    </div>
                </div>

            </div>

            <div class="register-popup">
                <?php
                echo form_hidden('business', 1);
                echo form_button(['class' => 'button-primary', 'name' => 'register-individual', 'content' => 'Registrarse', 'type' => 'submit'])
                ?>
            </div>

            <div class="pop-up-actions">
                <button type="button" onclick="register_individual_cancel(event,this)" class="button-secondary">Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

