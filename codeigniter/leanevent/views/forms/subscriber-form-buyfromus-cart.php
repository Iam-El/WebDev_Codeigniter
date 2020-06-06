<?php
$url = current_url();
if (!strpos($url, 'subscriber')) {
    $url = $url . '/subscriber';
}
echo form_open_multipart($url);
echo form_input(['name' => 'email', 'class' => 'email-address', 'placeholder' => 'Introduce tu correo electronico', 'value' => set_value('email')]);
echo form_hidden('subscriber', 1);
echo form_button(['class' => 'subscriber-button', 'name' => 'subscriber-button', 'content' => 'Subscribir', 'type' => 'submit'])
?><span class="error-php"> <?php echo form_error('email'); ?> </span> <?php
?><span class="success-php"> <?php echo $msg; ?> </span> <?php
?>