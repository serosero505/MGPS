<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Usuario_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function registrar($datos)
    {
        $this->db->insert('usuario', $datos);
        return $this->db->insert_id();
    }
    function obtenerPorId($id){
    
        $this->db->from('usuario');
        $this->db->where('EMAIL',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('usuario');
    }
    public function eliminar_integrante_id($id)
    {
        $this->db->where('EMAIL', $id);
        $this->db->delete('trabaja');
    }
    function validarDatos($datos){
        
    }
}
