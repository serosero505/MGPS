<?php

class controllerPlantilla extends CI_Controller {
    
    private $autocompletado;
    public function __construct() {
        parent::__construct();
        $this->autocompletado = $this->db->select('email, nombresusuario');;
    }

    public function index() {
        $data['contenido'] = "Soy JasonllPaul el encantador";
        $this->load->view('plantilla', $data);
    }

    public function quienesSomos() {
        $this->load->view('quienesSomos',  $this->autocompletado);
    }

    public function autocompletar() {
        $this->load->view('autocomplete_view');
    }

    public function serviciosWeb() {
        $this->load->view('servicioWeb');
    }

    public function guia() {
        $this->load->view('guia');
    }

    public function caracteristicas() {
        $this->load->view('caracteristicas');
    }

    public function inicio() {
        redirect('../index.php');
    }

    public function prueba() {
        $data['contenido'] = "Soy JasonllPaul el encantador";
        $this->load->view('servicioWeb', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */