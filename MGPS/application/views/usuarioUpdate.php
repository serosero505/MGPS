<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div>
    <caption><h1>Editar Usuario</h1></caption>
</div>

<div>
    <table cellpadding="5">

        <tr>
            <?php echo form_open('usuario/saveUpdateUsuario'); ?>
            <td><br/><label for='EMAIL'>E-mail:</label></td>
            <td><?php echo form_hidden('EMAIL   |',$usuario->EMAIL,'','size = "30" id="EMAIL"');?></td>
        </tr>
        <tr>
            <td><br/><label for='NOMBRESUSUARIO'>Nombres:</label></td>
            <td><?php echo form_input('usuario[NOMBRESUSUARIO]', $usuario->NOMBRESUSUARIO, '', 'size = "30" id="NOMBRESUSUARIO"'); ?></td>
        </tr>    
        <tr>
            <td><br/><label for='APELLIDOSUSUARIO'>Apellidos:</label></td>
            <td><?php echo form_input('usuario[APELLIDOSUSUARIO]', $usuario->APELLIDOSUSUARIO, '', 'size = "30" id="APELLIDOSUSUARIO"'); ?></td>
        </tr>    
        <tr>
            <td><br/><label for='APODO'>Apodo(alias):</label></td>
            <td><?php echo form_input('usuario[APODO]', $usuario->APODO, '', 'size = "30" id="APODO"'); ?></td>
        </tr>    

        <tr>
            <td><br/><input type="submit" value="Guardar"/></td>
            <?php echo form_close(); ?>
        </tr>
    </table>

    <div>
        <?php echo anchor('usuario', 'volver a la lista de usuarios'); ?>
    </div>



</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    