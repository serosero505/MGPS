<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {
    
    public function __construct()
        {
            parent::__construct();
            $this->load->model('proyecto_model','proyecto');
        }
        
        public function index()
        {       
                $data['proyecto'] = $this->proyecto->obtenerProyecto();
		$this->load->view('bienvenida');
	}
        
        public function ajax_listarProyectos(){
            $proyectos = $this->proyecto->obtenerProyecto($this->session->userdata('correo'));
            if($proyectos==FALSE){
                
                echo json_encode(array("estado"=>FALSE));
            }
            else{
                $row =array();
                foreach ($proyectos as $proyecto){
                    if($proyecto['ROL']=="Administrador"){
                    $row[]=array(
                        'Nombre' => $proyecto['NOMBREPROYECTO'],
                        'Finicio'=>$proyecto['FECHAINICIO'],
                        'Ffin'=>$proyecto['FECHAFIN'],
                        'Rol'=>$proyecto['ROL'],
                        'Estado'=>$proyecto['ESTADOPROYECTO'],
                        
                         'Accion' =>'<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Eliminar" onclick="cancelar_proyecto('."'".$proyecto['NOMBREPROYECTO']."'".')"><i class="glyphicon glyphicon-trash"></i></a>'
                        .'<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Gestion de roles" onclick="gestionar_roles('."'".$proyecto['NOMBREPROYECTO']."'".')"><i class="glyphicon glyphicon-user"></i></a>'
                        .'<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Ver proyecto" onclick="ver_proyecto('."'".$proyecto['NOMBREPROYECTO']."'".')"><i class="glyphicon glyphicon-eye-open"></i></a>'
                
                    );
                    }
                    else{
                        $row[]=array(
                        'Nombre' => $proyecto['NOMBREPROYECTO'],
                        'Finicio'=>$proyecto['FECHAINICIO'],
                        'Ffin'=>$proyecto['FECHAFIN'],
                        'Rol'=>$proyecto['ROL'],
                        'Estado'=>$proyecto['ESTADOPROYECTO'],
                        'Accion' =>'<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Ver" onclick="ver_proyecto('."'".$proyecto['NOMBREPROYECTO']."'".')"><i class="glyphicon glyphicon-eye-open"></i></a>'
                    
                        );    
                    }
                }
                
                $result=array("data"=>$row);
                echo json_encode($result);
            }
            
        }
        
        public function ajax_agregarProyecto() {
            $datos = array(
                'NOMBREPROYECTO'=> $this->input->post('nombre'),
                'DESCRIPCIONPROYECTO'=> $this->input->post('descripcion'),
                'FECHAINICIO'=> $this->input->post('inicio'),
                'FECHAFIN'=> $this->input->post('fin'),
                'ESTADOPROYECTO'=> $this->input->post('estado')
            );
            $insert = $this->proyecto->agregarProyecto($datos);
            echo json_encode(array("status" => TRUE));
        }
         public function ajax_agregarEquipoA() {
             
             $datos= array(
                'EMAIL'=>$this->session->userdata('correo'),
                'NOMBREPROYECTO'=>$this->input->post('proyecto'),
                'ROL'=>"Administrador"
                
            );
            
            $insert = $this->proyecto->agregarMiembro($datos);
            echo json_encode(array("status" => TRUE));
         }
        public function ajax_agregarEquipo(){
            
            $datos= array(
                'EMAIL'=>$this->input->post('integrante'),
                'NOMBREPROYECTO'=>$this->input->post('proyecto'),
                'ROL'=>$this->input->post('rol')
                
            );
            
            $insert = $this->proyecto->agregarMiembro($datos);
            echo json_encode(array("status" => TRUE));
        }
        public function ajax_listarEquipo(){
            $filtro=$this->input->post('proyecto');
            $listaEquipo=$this->proyecto->listarEquipo($filtro);
            $row =array();
            foreach ($listaEquipo as $integrante){
                $row[]=array(
                   'Correo electronico' => $integrante['EMAIL'],
                   'Rol'=>$integrante['ROL'],
                   'Accion' =>'<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Eliminar" onclick="eliminar_integrante('."'".$integrante['EMAIL']."'".')"><i class="glyphicon glyphicon-trash"></i></a>'
                );
                    
                
            }
            $result=array("data"=>$row);
            echo json_encode($result);
        }
        public function ajax_ver($id)
        {
            $uri=urldecode($id);
            $data = $this->proyecto->obtenerporid($uri);
            //$data->proyecto = ($data->FECHAINICIO == '0000-00-00') ? '' : $data->FECHAINICIO; // if 0000-00-00 set tu empty for datepicker compatibility
            //$data->proyecto = ($data->FECHAFIN == '0000-00-00') ? '' : $data->FECHAFIN;
            echo json_encode($data);
        }
     
     
}

