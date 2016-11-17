<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function obtenerProyecto($email) {
        $this->db->select('PROYECTO.NOMBREPROYECTO,PROYECTO.DESCRIPCIONPROYECTO,PROYECTO.FECHAINICIO,PROYECTO.FECHAFIN,TRABAJA.ROL,ESTADOPROYECTO,');
        $this->db->from('trabaja');
        $this->db->join('proyecto', 'proyecto.nombreproyecto = trabaja.nombreproyecto');
        $this->db->where('email', $email);
        $data = $this->db->get();

        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return FALSE;
        }
    }
    public function obtenerporid($id)
    {
        $this->db->from('proyecto');
        $this->db->where('NOMBREPROYECTO',$id);
        $query = $this->db->get();
 
        return $query->row();
    }

    function agregarProyecto($datos){
        $this->db->insert('proyecto', $datos);
        return $this->db->insert_id();
    }
    function agregarMiembro($datos){
        $this->db->insert('trabaja', $datos);
        return $this->db->insert_id();
    }
    function listarEquipo($proyecto){
        $this->db->select('*');
        $this->db->from('trabaja');
        $this->db->where('NOMBREPROYECTO',$proyecto);
        $query=$this->db->get();
        return $query->result_array();
    }

}
