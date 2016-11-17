
<?php $this->load->view('includes/head'); ?>

<div id="page-wrapper">

    <div id="page" class="container">

        <div id="titulo">
            <h2>AUTOCOMPLETADO</h2>
        </div>

        <h4 align="center"><?php echo "Seleccione de acuerdo a su preferencia tomando como referencia el listado de la tabla" ?></h4>
        <label>EMAIL:</label>	
        <input type="text" id="EMAIL" size="15" />
        <label>NOMBRESUSUARIO:</label>	
        <input type="text" id="NOMBRESUSUARIO" size="15" />
        <?php echo $this->table->generate($records); ?>

        <?php echo anchor('controllerPlantilla', 'volver al Menú Principal'); ?>
        <?php echo anchor('controllerPlantilla/serviciosWeb', 'Ir a servicios web'); ?>


    </div>
</div>

<?php $this->load->view('includes/footer'); ?>