<?php
echo form_open('login');
?>
<span class="error-php"> <?php echo $msg; ?> </span>
<div class="row">

    <div class="user-name column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('username'); ?> </span> <?php
        echo form_label('Nombra de Usuario (Correo)');
        echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'xxx@xxx.com', 'value' => set_value('username')]);
        ?>

    </div>
    <div class="password column2x">
        <?php
        ?><span class="error-php"> <?php echo form_error('password'); ?> </span> <?php
        echo form_label('Contrase&#241a');
        echo form_password(['name' => 'password', 'class' => 'field', 'placeholder' => 'Password should 0 to 8 Non space characters', 'value' => set_value('password')]);
        ?>
    </div>
</div>

<div class="row reset-password">
    <div class="reset-password"><a href="login-recover.html" onclick="login_recover_modal(event)"
                                   name="reset">Olvido
            su Contrase&#241a?</a></div>
</div>

<div class="row login-actions-row">
    <?php
    echo form_hidden('login' ,1);
    echo form_button(['class' => 'button-primary', 'name' => 'login-submit', 'content' => 'Entra', 'type' => 'submit'])
    ?>
</div>



