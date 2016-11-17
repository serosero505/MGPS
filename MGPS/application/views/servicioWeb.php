<?php $this->load->view('includes/head'); ?>
<?php require_once('libreriaNusoap/lib/nusoap.php'); //incluimos la libreria Nusoap         ?>
<div id="page-wrapper">

    <div id="page" class="container">

        <div id="titulo">
            <h2>SERVICIOS WEB</h2>
        </div>

        <form method="post" action="">
            <input type="submit" value="ListarUsuarios" name="btnListarUsuarios" />
            <input type="submit" value="Obtener Usuario" name="btnGetUsuario" />
            <br/>
            <input type="text" placeholder="ID de usuario" name="txtId" />
        </form>

        <?php
        $wsdl_url = 'http://localhost:8088/ServiciosWeb/WSCliente?WSDL'; //direccion de donde sale el error
        $cliente = new SOAPClient($wsdl_url); //se envian los parametros a la clase cliente
        $parametros = NULL;
        $rlista = NULL;
        //METODO DE BOTONES

        if (isset($_POST['btnGetUsuario'])) {
            $id = $_POST['txtId'];
            $parametros = array('id' => $id);
            $rlista = $cliente->getUsuario($parametros);
            //echo "Numero de registros encontrados: ", count($rlista);
            echo "<br/>", "<br/>";
            foreach ($rlista as $key) {
                echo $key;
                echo "<br/>";
            }
        }

        if (isset($_POST['btnListarUsuarios'])) {
            $rlista = $cliente->listarUsuarios();
            echo "<br/>", "<br/>";
            echo 'USUARIOS REGISTRADOS:';
            echo "<br/>", "<br/>";
            foreach ($rlista as $key) {
                print_r($key);
                        }
        }
        ?>


    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
