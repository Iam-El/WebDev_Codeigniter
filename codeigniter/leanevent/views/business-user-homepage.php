<div class="mainpage business-user-homepage">
    <div class="align-text align-text-header">
        <h1>Lista de Eventos</h1>
        <div class="position-center">
            <table class="events-table lean-table">
                <thead class="table-header">

                <tr class="table-header-content">
                    <th class="column-1 details">DETAILS DEL EVENTOS</th>
                    <th class="column-2 direction">LUGAR</th>
                    <th class="column-3 date">FECHA</th>
                    <th class="column-4 time">HORA</th>
                    <th class="column-5 confirm">ASISTENCIA</th>
                </tr>
                </thead>

                <tbody class="table-body">
                <?php if ($fetch_event->num_rows() > 0) {


                    foreach ($fetch_event->result() as $row) {
                        ?>
                        <tr class="table-body-content">
                            <td class="column-1 details">
                                <img class="details-image" src="<?php echo base_url($row->image); ?>"><span
                                        class="details-para"><?php echo $row->eventName; ?></span>
                            </td>
                            <td class="column-2 direction"><?php echo $row->place; ?></td>
                            <td class="column-3 date"><?php echo $row->date; ?></td>
                            <td class="column-4 time"><?php echo $row->time; ?></td>
                            <td class="column-5 confirm">

                                <?php
                                echo form_open('business_user_homepage/confirmEvent/' . $row->id);
                                echo form_hidden('eventId', $row->id);
                                echo form_hidden('edit', 1);
                                echo form_button(['class' => 'button-primary', 'name' => 'edit-event', 'content' => 'Confirmer', 'type' => 'submit', 'value' => $row->id]);
                                echo form_close();
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

