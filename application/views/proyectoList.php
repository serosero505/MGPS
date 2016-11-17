<?php $this->load->view('includes/head'); ?>
<!---start-content---->    

<div id="titulo">
    <caption><h1>Listado Proyectos</h1></caption>
</div>

<div>

    <table cellpadding="5">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($proyecto) > 0):
                foreach ($proyecto->result() as $proyectos):
                    //header('Content-type: image/x-png');
                    ?>

                <td><?php echo $proyectos->NOMBREPROYECTO; ?></td>
                <td><?php echo $proyectos->DESCRIPCIONPROYECTO; ?></td>
                <td><?php echo $proyectos->FECHAINICIO; ?></td>
                <td><?php echo $proyectos->FECHAFIN; ?></td>
                <td><?php echo $proyectos->ESTADOPROYECTO;  ?></td>
                <td>
                    <?php
                    echo anchor('controllerProyecto/updateProyecto/'.$proyectos->NOMBREPROYECTO,'editar','class="link-opc"');
                    echo " ";
                    echo anchor('controllerProyecto/deleteProyecto/'.$proyectos->NOMBREPROYECTO,'eliminar');
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
    <?php echo anchor('controllerProyecto/addProyecto', 'agregar un nuevo proyecto'); ?>
</div>

<!---End-content---->
<?php $this->load->view('includes/footer'); ?>    