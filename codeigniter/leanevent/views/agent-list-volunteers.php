<div class="mainpage agent-list-volunteers">
    <div class="align-text align-text-header">
        <h1>Lista de Voluntarios</h1>

    </div>
    <div class="position-center">
        <?php if ($emailId) { ?>
            <table class="list-of-volunteers-table lean-table">
                <thead class="table-header">
                <tr class="table-header-content">
                    <th class="column-1 details">NOMBRE DE VOLUNTARIOS</th>
                    <th class="column-2 direction">CORREO</th>
                    <th class="column-3 date">TELEFONO</th>
                    <th class="column-4 name">EVENTO</th>
                    <th class="column-5 confirm">RESPONSABLE</th>
                </tr>
                </thead>

                <tbody class="table-body">
                <?php if ($fetch_event->num_rows() > 0) {


                    foreach ($fetch_event->result() as $row) {
                        ?>

                        <tr class="table-body-content">
                            <td class="column-1 details">
                                <img class="details-image" src="<?php echo $row->userImage; ?>"><span
                                        class="details-para"><?php echo $row->firstName; ?></span>
                            </td>
                            <td class="column-2 direction"><?php echo $row->emailId; ?></td>
                            <td class="column-3 date"><?php echo $row->phone; ?></td>
                            <td class="column-4 name"><?php echo $row->eventName; ?></td>
                            <td class="column-5 responsible"><?php echo $emailId; ?></td>
                        </tr>

                        <?php
                    }
                } ?>
                </tbody>

            </table>
            <div class="page-navigation">
                <ul class="list-of-pages">
                    <li class="page-navigation-item previous"><span class="fas fa-angle-double-left"></span></li>
                    <li class="page-navigation-item active">1</li>
                    <li class="page-navigation-item">2</li>
                    <li class="page-navigation-item">3</li>
                    <li class="page-navigation-item">4</li>
                    <li class="page-navigation-item next"><span class="fas fa-angle-double-right"></span></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>

