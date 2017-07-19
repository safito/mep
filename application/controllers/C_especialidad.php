<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_especialidad extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_especialidad','m');
	    	 
	}

	public function index()
	{
		$data['especialidad'] = $this->m->listar_especialidad();
		$this->load->view('layout/header');
		$this->load->view('V-especialidad', $data);
		$this->load->view('layout/footer');

	}

	public function add_especialidad(){
		$this->load->view('layout/header');
		$this->load->view('V-add_especialidad');
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('C_especialidad/index'));

	}

	public function edit($id){
		$data['especialidad'] = $this->m->especialidadbyid($id);
		$this->load->view('layout/header');
		$this->load->view('V-edit_especialidad', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('C_especialidad/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('C_especialidad/index'));
	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */