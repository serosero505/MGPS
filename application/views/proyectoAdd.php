<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div id="titulo">
    <caption><h1>Agregar Proyecto</h1></caption>
</div>

<div>

    <table cellpadding="2">
        <tr>
            <?php echo form_open('controllerProyecto/saveProyecto') ?>
            <td><label for="NOMBREPROYECTO">Nombre:</label></td>
            <td><?php echo form_input('proyectos[NOMBREPROYECTO]', '', 'size="25" id="NOMBREPROYECTO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="DESCRIPCIONPROYECTO">Descripción:</label></td>
            <td><?php echo form_textarea('proyectos[DESCRIPCIONPROYECTO]', '', 'size="25" id="DESCRIPCIONPROYECTO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="FECHAINICIO">Fecha inicio:</label></td>
            <td><?php echo form_input('proyectos[FECHAINICIO]', '', 'size="25" id="FECHAINICIO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="FECHAFIN">Fecha fin:</label></td>
            <td><?php echo form_input('proyectos[FECHAFIN]', '', 'size="25" id="FECHAFIN"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="ESTADOPROYECTO">Estado:</label></td>
            <?php
            $parametros = array(
                'Abierto' => 'Abierto',
                'Cerrado' => 'Cerrado',
            );
            ?>
            <td><?php echo form_dropdown('proyectos[ESTADOPROYECTO]', $parametros, 'size="25" id="ESTADOPROYECTO"'); ?></td>
        </tr>
        <tr>
            <td></br><input type="submit" value="guardar proyecto"></td>
<?php echo form_close(); ?>
        </tr>

    </table>

    <div>
<?php echo anchor('controllerProyecto', 'volver a la lista de usuarios'); ?>
    </div>



</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    