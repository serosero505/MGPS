<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->model('usuario_model', 'usuario');
        $this->load->model('Proyecto_model','proyecto');
    }

    public function index() {
        if ($this->session->userdata('login')) {
            $this->load->view('iniciado');
        }
        else{
        $this->load->view('plantilla');
        //$this->load->view('headers/librerias');
        }
    }
    //la fincion de abajo ya no se esta usando//
    public function iniciar_sesion() {
        
        $email = $this->input->get('PostData');
        $data['usuario']  = $this->usuario->obtenerPorId($email);
        $dataP['proyecto'] = $this->proyecto->obtenerProyecto($email);
        $this->load->view('iniciado',$data + $dataP);
    }
    public function cerrar(){
        $this->session->sess_destroy();
    }

    public function ajax_agregar()
        {
            //$this->validar();
            $configuracion=[
                "upload_path"=>"./imagenes",
                'allowed_types'=>"png|jpg"
            ];
            $contra= sha1( $this->input->post('contrasena'));
            $this->load->library("upload",$configuracion);
            if ($this->upload->do_upload('foto_usuario')) {
                $imagen=array("ruta_imagen"=>  $this->upload->data());
                $datos = array(
                'EMAIL' => $this->input->post('correo'),
                'CONTRASENA' => $contra,
                'NOMBRESUSUARIO' => $this->input->post('nombres'),
                'APELLIDOSUSUARIO' => $this->input->post('apellidos'),
                'APODO' => $this->input->post('apodo'),
                'FOTOGRAFIA' => $imagen['ruta_imagen']['file_name']
            );
                if($this->usuario->registrar($datos)==TRUE)
                {
                 echo json_encode(array("status" => TRUE));   
                }
                else{
                    echo json_encode(array("status" => TRUE)); 
                }
            }
            else
            {
                $this->upload->display_errors();
            }
            
            
            
            //$this->subeFoto();
            
        }
        public function ajax_eliminarIntegrante($id)
        {
            
            $this->usuario->eliminar_integrante_id($id);
            echo json_encode(array("status" => TRUE));
        }
        //para la primera entrega no se usa,solo se usara cuando el usuario desee eliminar su cuenta
        public function ajax_eliminar($id){
            $this->usuario->delete_by_id($id);
            echo json_encode(array("status" => TRUE));
        }

        public function ajax_ingresar() {
        $data = $this->usuario->obtenerPorId($this->input->get('correo'));
        if ($data == null) {
            echo json_encode(array("correo" => "no"));
        } else {
            if ($data->EMAIL == $this->input->get('correo')) {
                if ($data->CONTRASENA == sha1($this->input->get('pwd'))) {
                    $datosUsuario=[
                        "nombres"=> $data->NOMBRESUSUARIO,
                        "correo"=> $data->EMAIL,
                        "apellidos"=> $data->APELLIDOSUSUARIO,
                        "foto"=> $data->FOTOGRAFIA,
                        "apodo"=> $data->APODO,
                        "login"=> TRUE
                    ];
                    $this->session->set_userdata($datosUsuario);
                    echo json_encode(array("correo" => "si", "correcto" => "si"));
                    
                } else {
                    echo json_encode(array("correo" => "si", "correcto" => "no"));
                }
            }
        }
    }

    

}
