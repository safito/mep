<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_usuarios','m');
	    $this->load->model('m_especialidad', 'e');
	    $this->load->model('m_usuarios_tipo', 'ut');	    
	    	 
	}

	public function index()
	{
		$data['usuarios'] = $this->m->listar_usuarios();		
		$this->load->view('layout/header');
		$this->load->view('V-usuarios', $data);
		$this->load->view('layout/footer');

	}

	public function add_usuarios(){		
		$data['especialidades'] = $this->e->listar_especialidad();
		$data['usuarios_tipo'] = $this->ut->listar_usuarios_tipo();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-add_usuarios', $data);
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_usuarios/index'));

	}

	public function edit($id){
		$data['usuario'] = $this->m->usuariobyid($id);
		$data['especialidades'] = $this->e->listar_especialidad();
		$data['usuarios_tipo'] = $this->ut->listar_usuarios_tipo();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-edit_usuarios', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_usuarios/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_usuarios/index'));
	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */