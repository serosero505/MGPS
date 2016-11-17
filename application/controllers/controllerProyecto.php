<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controllerProyecto extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelProyecto');
    }

    public function index() {
        $data['proyecto'] = $this->ModelProyecto->getProyecto();
        $this->load->view('proyectoList', $data);
    }

    public function addProyecto() {
        $data[] = null;
        $this->load->view('proyectoAdd', $data);
    }

    public function saveProyecto() {
        $proyectoInfo = $this->input->post('proyectos');
        $proyectoNombre = null;
        if (isset($_POST['NOMBREPROYECTO'])) {
            $proyectoNombre = $_POST['NOMBREPROYECTO'];
        }
        $this->ModelProyecto->setProyecto($proyectoInfo, $proyectoNombre);
        redirect('controllerProyecto');
    }

    public function saveUpdateProyecto() {
        $proyectoInfo = $this->input->post('proyectos');
        $proyectoNombre = null;
        if (isset($_POST['NOMBREPROYECTO'])) {
            $proyectoNombre = $_POST['PROYECTONOMBRE'];
            //echo '<script language="javascript">alert("';
            //echo $usuarioEmail;
            //echo '");</script>';
        }
        $this->ModelProyecto->setProyectoUpdate($proyectoInfo, $proyectoNombre);
        redirect('controllerProyecto');
    }

    public function deleteProyecto($nombre) {
        $this->ModelProyecto->deleteProyecto($nombre);
        redirect('controllerProyecto');
    }

    public function updateProyecto($nombre) {
        $data['proyecto'] = $this->ModelProyecto->getProyectos($nombre);
        $this->load->view('proyectoUpdate', $data);
    }

    public function searchProyecto() {
        //$data['usuario'] = $this->usuarioModel->getUsuario();
        //$this->load->view('usuariolist', $data);

        $data = array();
        $txtBuscar = $this->input->get('txtBuscar', TRUE);

        if ($txtBuscar) {
            $result = $this->ModelProyecto->searchProyecto(trim($txtBuscar));
            if ($result != FALSE) {
                $data = array('result' => $result);
            } else {
                $data = array('result' => '');
            }
        } else {
            $data = array('result' => '');
        }

        $this->load->view('buscarProyecto', $data);
    }

    /* public function searchUsuario2($nombre){
      $result = $this->usuarioModel->searchUsuario2($nombre);
      if ($count($result)>0) {
      foreach ($result as $pr)
      $arr_result[] = $pr->nombre;
      echo json_encode($arr_result);
      }
      } */

    function mostrar() {
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post('buscar');
            $datos = $this->usuarioModel->mostrar($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    function get_data() {
        $match = $this->input->get('term', TRUE);  // TRUE para hacer un filtrado XSS 
        $item = $this->input->get('item', TRUE);

        $data['item'] = $item;
        $data['results'] = $this->usuarioModel->get_data($item, $match);

        $this->load->view('data', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */