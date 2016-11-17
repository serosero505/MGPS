<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ModelProyecto extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getProyecto() {
        $data = $this->db->get('Proyecto');

        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

    function getProyectoResult() {
        $consulta = $this->db->get('Proyecto');
        return $consulta->result();
    }

    function setProyecto($data, $nombre = null) {

        if ($nombre == null) {
            $this->db->insert('PROYECTO', $data);
        } else {
            $this->db->where('NOMBREPROYECTO', $nombre);
            $this->db->update('PROYECTO', $data);
        }
    }
    
    function setProyectoUpdate($data, $nombre=null) {
            echo $nombre;
            $this->db->where('NOMBREPROYECTO', $nombre);
            $this->db->update('PROYECTO', $data);
            
    }

    function getProyectos($nombre) {
        $data = array();
        $this->db->select('*');
        //$this->db->select('id');
        $this->db->where('NOMBREPROYECTO', $nombre);
        //$this->db->where('id', $email);
        $this->db->limit(1);
        $consulta = $this->db->get('Proyecto');
        if ($consulta->num_rows() > 0) {
            $data = $consulta->row();
        }
        $consulta->free_result();
        return $data;
    }

    function deleteProyecto($nombre) {
        $this->db->where('NOMBREPROYECTO', $nombre);
        $this->db->limit(1);
        $this->db->delete('Proyecto');
        return TRUE;
    }

    function searchProyecto($txtBuscar) {
        $this->db->like('NOMBREPROYECTO', $txtBuscar);
        $txtBuscar = $this->db->get('proyecto');
        if ($txtBuscar->num_rows() > 0) {
            return $txtBuscar;
        } else {
            return FALSE;
        }
    }

    /* function searchUsuario2($nombre){
      $this->db->like('nombre', $nombre,'both');
      return $this->db->get('usuario')->result();
      } */

    function mostrar($valor) {
        $this->db->like('NOMBRESUSUARIO', $valor);
        $consulta = $this->db->get('usuario');
        return $consulta->result();
    }

    function get_data($item, $match) {

        $this->db->like($item, $match);
        $query = $this->db->get('NOMBREPROYECTO');

        return $query->result();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */