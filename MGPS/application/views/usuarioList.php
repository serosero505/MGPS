<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div id="titulo">
    <caption><h1>Listado Usuarios</h1></caption>
</div>

<div>

    <table cellpadding="5">
        <thead>
            <tr>
                <th>E-mail</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Apodo(alias)</th>
                <th>Fotografía</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($usuario) > 0):
                foreach ($usuario->result() as $usuarios):
                    //header('Content-type: image/x-png');
                    ?>

                <td><?php echo $usuarios->EMAIL; ?></td>
                <td><?php echo $usuarios->NOMBRESUSUARIO; ?></td>
                <td><?php echo $usuarios->APELLIDOSUSUARIO; ?></td>
                <td><?php echo $usuarios->APODO; ?></td>
                <td><?php echo $usuarios->FOTOGRAFIA;  ?></td>
                <td>
                    <?php
                    echo anchor('usuario/updateUsuario/'.$usuarios->EMAIL,'editar','class="link-opc"');
                    echo " ";
                    echo anchor('usuario/deleteUsuario/'.$usuarios->EMAIL,'eliminar');
                    ?>
                </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No hay departamentos</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    </br>
    <?php echo anchor('welcome', 'volver a la pagina principal'); ?>
    </br>
    <?php echo anchor('usuario/addUsuario', 'agregar un nuevo usuario'); ?>
</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    