<div class="mainpage agent-list-business">
    <div class="align-text align-text-header">
        <h1>Lista de Fundaciones</h1>
    </div>
    <div class="position-center">
        <?php if ($emailId) { ?>
        <table class="agents-list-business-table lean-table">
            <thead class="table-header">
            <tr class="table-header-content">
                <th class="column-1 details">NOMBRE DE LA FUNDACION</th>
                <th class="column-2 event">EVENTO</th>
                <th class="column-3 responsible">RESPONSABLE</th>
                <th class="column-4 commission">COMISION</th>
                <th class="column-5 confirm">CONFIRMAR</th>
            </tr>
            </thead>

            <tbody class="table-body">
            <?php if ($fetch_event->num_rows() > 0) {


            foreach ($fetch_event->result() as $row) {
            ?>
            <tr class="table-body-content">
                <td class="column-1 details">
                    <img class="details-image" src="<?php echo $row->userImage; ?>"><span
                            class="details-para"><?php echo $row->foundation; ?></span>
                </td>
                <td class="column-2 event"><?php echo $row->eventName; ?></td>
                <td class="column-3 responsible"><?php echo $emailId ?></td>
                <td class="column-4 commission"><input type="text" disabled value="10"/></td>
                <td class="column-5 confirm">
                    <button class="button-primary">Asignar</button>
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


