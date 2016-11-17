<?php

class Autocomplete extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->model('Autocomplete_Model');
    }

    function index() {
        $this->table->set_heading('EMAIL', 'NOMBRESUSUARIO');
        $tmpl = array('table_open' => '<table border="1">');
        $this->table->set_template($tmpl);

        $data['title'] = '.: Autocompletado con CI :.';
        // Seleccionamos la tabla con los campos que queremos mostrar; excluimos el id
        $this->db->select('email, nombresusuario');
        $data['records'] = $this->db->get('usuario');

        $this->load->view('plantilla', $data);
    }

    function get_data() {
        $match = $this->input->get('term', TRUE);  // TRUE para hacer un filtrado XSS  
        $item = $this->input->get('item', TRUE);

        $data['item'] = $item;
        $data['results'] = $this->Autocomplete_Model->get_data($item, $match);

        $this->load->view('data', $data);
    }

}

