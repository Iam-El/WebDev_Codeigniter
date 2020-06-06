<?php
echo form_open_multipart('agent_add_event');
?>

<div class="row first-row">

    <div class="column2x">
        <div class="row">

            <div class="event-name full-width">

                <?php
                ?><span class="error-php"> <?php echo form_error('eventName'); ?> </span> <?php
                echo form_label('Nombres');
                echo form_input(['name' => 'eventName', 'class' => 'field', 'placeholder' => 'Nombre del Evento', 'value' => set_value('eventName')]);
                ?>

            </div>
        </div>


        <div class="row">
            <div class="created-by full-width">
                <?php
                echo form_label('Responsable');
                echo form_input(['name' => 'createdBy', 'class' => 'field', 'placeholder' => 'Nombre del Responsable', 'value' => $emailId, 'disabled' => 'disabled']);
                ?>
            </div>
        </div>
    </div>
    <div class="column2x">
        <div class="agent-user-image"></div>
        <button type="button" class="button-primary user-profile-icon"
                onclick=document.getElementById("event-image").click()>Seleccionar Imagem

            <?php
            ?><span class="error-php"> <?php echo form_error('image'); ?> </span> <?php
            echo form_hidden('MAX_FILE_SIZE');
            echo form_upload(['name' => 'image', 'class' => 'field', 'placeholder' => 'Imagen del evento', 'hidden value' => set_value('image'), 'id' => 'event-image']);

            ?>


        </button>

    </div>
</div>
<div class="row ">
    <div class="event-place full-width">
        <?php
        ?><span class="error-php"> <?php echo form_error('eventPlace'); ?> </span> <?php
        echo form_label('Lugar');
        echo form_input(['name' => 'eventPlace', 'class' => 'field', 'placeholder' => 'Direccion del Lugar del Eventos', 'value' => set_value('eventPlace')]);
        ?>
    </div>
</div>
<div class="row">
    <div class="event-date column3x">
        <?php
        ?><span class="error-php"> <?php echo form_error('eventDate'); ?> </span> <?php
        echo form_label('Fecha');
        //            echo form_input(['type'=>'eventDate' , 'id'=>'eventDate' ,'name'=>'eventDate','placeholder'=>'00/00/0000','class'=>'field']);
        ?>
        <input id="eventDate" name="eventDate" type="date" placeholder="00/00/0000" class="field"
               value=" set_value('eventDate')"/>
    </div>
    <div class="event-time column3x">
        <?php
        ?><span class="error-php"> <?php echo form_error('eventTime'); ?> </span> <?php
        echo form_label('Hora');
        ?>
        <input id="eventTime" name="eventTime" type="time" placeholder="00:00" class="field"
               value="set_value('eventTime')"/>
    </div>
    <div class="event-cost column3x">
        <?php
        ?><span class="error-php"> <?php echo form_error('eventCost'); ?> </span> <?php
        echo form_label('Valor de Boleto');
        ?>
        <input id="eventCost" name="eventCost" type="number" placeholder="$000.00" class="field"
               value="set_value('eventCost')"/>
    </div>

</div>
<div class="eventDescription">
    <?php
    ?><span class="error-php"> <?php echo form_error('message'); ?> </span> <?php
    echo form_label('Mensaje');
    echo form_textarea(['name' => 'message', 'class' => 'field', 'rows' => '7', 'placeholder' => 'Di algo sobre nosotros', 'value' => set_value('message')]);
    ?>
</div>

<div class="row">
    <?php
    echo form_hidden('add', 1);
    echo form_button(['class' => 'button-primary', 'name' => 'add-event', 'content' => 'Guardar', 'type' => 'submit'])
    ?>
</div>


