
<?php $this->load->view('includes/head'); ?>

<div id="page-wrapper">

    <div id="page" class="container">

        <div id="titulo">
            <h2>BUSCAR</h2>
        </div>

        <form id="formBuscar" method="GET" action="<?= base_url() ?>index.php/usuario/searchUsuario">
            <h4>RESULTADOS</h4>
        </form>
        <?php
        if ($result) {
            foreach ($result->result() as $row) {
                echo "<a href='" . $row->NOMBRESUSUARIO."'target='_blank'>" . $row->NOMBRESUSUARIO . "</a><br />";
            }
        }
        if($result == FALSE){
            echo "0 coincidencias para '" . htmlspecialchars($_GET["txtBuscar"]) . "'";
        }
        ?>

    </div>
</div>

<?php $this->load->view('includes/footer'); ?>