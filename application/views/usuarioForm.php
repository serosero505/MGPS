<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div id="titulo">
    <caption><h1>Agregar Usuario</h1></caption>
</div>

<div>

    <table cellpadding="2">
        <tr>
            <?php echo form_open('usuario/saveUsuario') ?>
            <td><label for="EMAIL">E-mail:</label></td>
            <td><?php echo form_input('usuarios[EMAIL]', '', 'size="25" id="EMAIL"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="NOMBRESUSUARIO">Nombres:</label></td>
            <td><?php echo form_input('usuarios[NOMBRESUSUARIO]', '', 'size="25" id="NOMBRESUSUARIO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="APELLIDOSUSUARIO">Apellidos:</label></td>
            <td><?php echo form_input('usuarios[APELLIDOSUSUARIO]', '', 'size="25" id="APELLIDOSUSUARIO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="APODO">Apodo(alias):</label></td>
            <td><?php echo form_input('usuarios[APODO]', '', 'size="25" id="APODO"'); ?></td>
        </tr>
        <tr>
            <td></br><label for="FOTOGRAFIA">FOTOGRAFÍA:</label></td>
            <td><?php echo form_input('usuarios[FOTOGRAFIA]', '', 'size="25" id="FOTOGRAFIA"'); ?></td>
        </tr>
        <tr>
            <td></br><input type="submit" value="guardar usuario"></td>
            <?php echo form_close(); ?>
        </tr>

    </table>
    
    <div>
        <?php echo anchor('usuario', 'volver a la lista de usuarios'); ?>
    </div>



</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    