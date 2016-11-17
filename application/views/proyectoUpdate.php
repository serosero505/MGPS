<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div>
    <caption><h1>Editar Proyecto</h1></caption>
</div>

<div>
    <table cellpadding="5">

        <tr>
            <?php echo form_open('controllerProyecto/saveProyecto'); ?>
            <td><br/><label for='NOMBREPROYECTO'>Nombre:</label></td>
            <td><?php echo form_hidden('proyecto[NOMBREPROYECTO]', $proyecto->NOMBREPROYECTO, '', 'size = "30" id="NOMBREPROYECTO"'); ?></td>
        </tr>
        <tr>
            <td><br/><label for='DESCRIPCIONPROYECTO'>descripcion:</label></td>
            <td><?php echo form_input('proyecto[DESCRIPCIONPROYECTO]', $proyecto->DESCRIPCIONPROYECTO, '', 'size = "30" id="DESCRIPCIONPROYECTO"'); ?></td>
        </tr>    
        <tr>
            <td></br><label for="FECHAINICIO">Fecha inicio:</label></td>
            <td><?php echo form_input('proyectos[FECHAINICIO]', $proyecto->FECHAINICIO, 'size="25" id="FECHAINICIO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="FECHAFIN">Fecha fin:</label></td>
            <td><?php echo form_input('proyectos[FECHAFIN]', $proyecto->FECHAFIN, 'size="25" id="FECHAFIN"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="ESTADOPROYECTO">Estado:</label></td>
            <?php
            $parametros = array(
                'Abierto' => 'Abierto',
                'Cerrado' => 'Cerrado',
            );
            ?>
            <td><?php echo form_dropdown('proyectos[ESTADOPROYECTO]', $parametros, $proyecto->ESTADOPROYECTO); ?></td>
        </tr>
        <tr>
            <td><br/><input type="submit" value="Guardar"/></td>
            <?php echo form_close(); ?>
        </tr>
    </table>

    <div>
        <?php echo anchor('controllerProyecto', 'volver a la lista de usuarios'); ?>
    </div>



</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    