<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuarioModel');
    }

    public function index() {
        $data['usuario'] = $this->usuarioModel->getUsuario();
        $this->load->view('usuariolist', $data);
    }

    public function addUsuario() {
        $data[] = null;
        $this->load->view('usuarioForm', $data);
    }

    public function saveUsuario() {
        $usuarioInfo = $this->input->post('usuarios');
        $usuarioEmail = null;
        if (isset($_POST['EMAIL'])) {
            $usuarioEmail = $_POST['EMAIL'];
        }
        $this->usuarioModel->setUsuario($usuarioInfo, $usuarioEmail);
        redirect('usuario');
    }

    public function saveUpdateUsuario() {
        $usuarioInfo = $this->input->post('usuarios');
        $usuarioEmail = null;
        if (isset($_POST['EMAIL'])) {
            $usuarioEmail = $_POST['EMAIL'];
            //echo '<script language="javascript">alert("';
            //echo $usuarioEmail;
            //echo '");</script>';
        }
        $this->usuarioModel->setUsuarioUpdate($usuarioInfo, $usuarioEmail);
        redirect('usuario');
    }

    public function deleteUsuario($email) {
        $this->usuarioModel->deleteUsuario($email);
        redirect('usuario');
    }

    public function updateUsuario($email) {
        $data['usuario'] = $this->usuarioModel->getUsuarios($email);
        $this->load->view('usuarioUpdate', $data);
    }

    public function searchUsuario() {
        //$data['usuario'] = $this->usuarioModel->getUsuario();
        //$this->load->view('usuariolist', $data);

        $data = array();
        $txtBuscar = $this->input->get('txtBuscar', TRUE);

        if ($txtBuscar) {
            $result = $this->usuarioModel->searchUsuario(trim($txtBuscar));
            if ($result != FALSE) {
                $data = array('result' => $result);
            } else {
                $data = array('result' => '');
            }
        } else {
            $data = array('result' => '');
        }

        $this->load->view('buscar', $data);
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

    
    // *************************************************************************
    // *********** MÉTODOS PARA AJAX *******************************************
    // *************************************************************************
    
    
    public function ajax_agregar()
        {
            //$this->validar();
            $contra= sha1( $this->input->post('pwd'));
            
            $datos = array(
                'EMAIL' => $this->input->post('email'),
                'CONTRASENA' => $contra,
                'NOMBRESUSUARIO' => $this->input->post('nombres'),
                'APELLIDOSUSUARIO' => $this->input->post('apellidos'),
                'APODO' => $this->input->post('apodo'),
                'FOTOGRAFIA' => "Foto",
            );
            //$this->subeFoto();
            $insert = $this->usuario->registrar($datos);
            echo json_encode(array("status" => TRUE));
        }
        public function ajax_ingresar(){
            $data = $this->usuario->obtenerPorId($this->input->get('correo'));
            if($data==null){
                 echo  json_encode(array("correo"=> "no"));
            }
            else{
                if($data->EMAIL==$this->input->get('correo')){
                    if($data->CONTRASENA==sha1($this->input->get('pwd'))){
                        echo json_encode(array("correo"=> "si","correcto"=> "si"));
                        
                    }
                    else{
                        echo json_encode(array("correo"=> "si","correcto"=> "no"));;
                    }
                    
                }
            }
                
            
        }
        private function subeFoto(){
            if(is_uploaded_file($_FILES["foto"]["temporal"])){
                move_uploaded_file($_FILES["foto"]["temporal"],"./imagenes/".$_FILES["foto"]["name"]);
            }
            
        }
    
    
    
    
    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */