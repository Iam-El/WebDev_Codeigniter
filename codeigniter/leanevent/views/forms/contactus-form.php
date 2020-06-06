<?php

echo form_open('contactUs');

?>
<div class="row">
    <div class="firstName column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('username'); ?> </span> <?php
        echo form_label('*Nombre');
        echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'Tu Nombre', 'value' => set_value('username')]);
        ?>

    </div>

    <div class="lastName column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('surname'); ?> </span> <?php
        echo form_label('*Appelido');
        echo form_input(['name' => 'surname', 'class' => 'field', 'placeholder' => 'Tu Appelido', 'value' => set_value('surname')]);
        ?>

    </div>
</div>
<div class="row">
    <div class="contact-email column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('email'); ?> </span> <?php
        echo form_label('*Correo');
        echo form_input(['name' => 'email', 'class' => 'field', 'placeholder' => 'xxx@xxx.com', 'value' => set_value('email')]);
        ?>

    </div>
</div>

<div class="row">
    <div class="contact-email column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('topic'); ?> </span> <?php
        echo form_label('*Tema');
        echo form_input(['name' => 'topic', 'class' => 'field', 'placeholder' => 'Su asunto de este mensaje', 'value' => set_value('topic')]);
        ?>

    </div>
</div>
<div class="mensaje">
    <?php
    ?><span class="error-php"><?php echo form_error('message'); ?> </span> <?php
    echo form_label('*Mensaje');
    echo form_textarea(['name' => 'message', 'rows' => "7", 'class' => 'field', 'placeholder' => 'Di algo sobre nosotros', 'value' => set_value('message')]);
    ?>
</div>

<?php
echo form_hidden('contact-us', 1);
echo form_button([ 'class' => "contactUs contact-us-confirm", 'name' => 'contactUs', 'content' => 'Enviar mensaje', 'type' => 'submit'])
?>

<?php form_close(); ?>
