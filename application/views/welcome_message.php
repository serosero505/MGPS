<?php $this->load->view('includes/head'); ?>
<!---start-content---->    
<?php echo anchor('usuario', 'Usuario'); ?>
<br/>
<?php echo anchor('controllerProyecto', 'Proyecto'); ?>
<br/>
<?php echo anchor('controllerHistoriaUsuario', 'Historia Usuario'); ?>
<br/>
<?php echo anchor('controllerSprint', 'Sprint'); ?>
<br/>
<?php echo anchor('controllerTarea', 'Tarea'); ?>
<br/>
<?php echo anchor('autocomplete', 'Autocomplete 1'); ?>
<?php echo anchor('../index.php', 'Autocomplete 2'); ?>

<link href="<?php echo base_url(); ?>assets/css/themes/base/jquery.ui.all.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/"></script>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    