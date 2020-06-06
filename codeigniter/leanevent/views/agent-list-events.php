<section>
    <div class="mainpage agent-list-events">
        <div class="align-text align-text-header">
            <h1>Lista de Eventos</h1>
        </div>
        <div class="position-center">
            <div class="confirm-button-row">
                <button class="button-success"><span class="fas fa-plus-circle fa-1x"
                                                     onclick="redirect('<?php echo base_url(); ?>agent_add_event')">Agregar</a>
                </span>
                </button>
            </div>
            <table class="events-table lean-table">
                <thead class="table-header">

                <tr class="table-header-content">
                    <th class="column-1 details">DETAILS DEL EVENTOS</th>
                    <th class="column-2 direction">LUGAR</th>
                    <th class="column-3 date">FECHA</th>
                    <th class="column-4 time">MODIFICIAR</th>
                    <th class="column-5 confirm">ELIMINAR</th>
                </tr>
                </thead>
                <tbody class="table-body">
                <?php if ($fetch_event->num_rows() > 0) {

                    var_dump($fetch_event->num_rows());

                    foreach ($fetch_event->result() as $row) {
                        ?>

                        <tr class="table-body-content">
                            <td class="column-1 details">
                                <img class="details-image" src="<?php echo $row->image; ?>"><span
                                        class="details-para"><?php echo $row->eventName; ?></span>
                            </td>
                            <td class="column-2 direction"><?php echo $row->place; ?></td>
                            <td class="column-3 date"><?php echo $row->date; ?></td>
                            <td class="column-4 edit">
                                <?php
                                echo form_open('agent_edit_event/' . $row->id);
                                echo form_hidden('eventId', $row->id);
                                echo form_hidden('edit', 1);
                                echo form_button(['class' => 'button-primary fas fa-edit fa-1x', 'name' => 'edit-event', 'type' => 'submit']);
                                echo form_close();
                                ?>

                            </td>
                            <td class="column-5 confirm">
                                <?php
                                echo form_open('agent_list_events/deleteEvent');
                                echo form_hidden('eventId', $row->id);
                                echo form_hidden('delete', 1);
                                echo form_button(['class' => 'button-delete fas fa-trash-alt fa-1x', 'name' => 'delete-event', 'type' => 'submit', 'value' => $row->id]);
                                echo form_close();
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                } ?>

                </tbody>
            </table>
            <div class="page-navigation">
                <ul class="list-of-pages">
                    <li class="page-navigation-item previous"><span class="fas fa-angle-double-left"></span></li>
                    <li class="page-navigation-item active page-1">
                        <button type="button" onclick="showNextPage(event,1)">1</button>
                    </li>
                    <li class="page-navigation-item page-2">
                        <button type="button" onclick="showNextPage(event,2)">2</button>
                    </li>
                    <li class="page-navigation-item page-3">
                        <button type="button" onclick="showNextPage(event,3)">3</button>
                    </li>
                    <li class="page-navigation-item page-4">
                        <button type="button" onclick="showNextPage(event,4)">4</button>
                    </li>
                    <li class="page-navigation-item next"><span class="fas fa-angle-double-right"></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>