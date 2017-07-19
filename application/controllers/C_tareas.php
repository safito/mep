<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tareas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_tareas','m');
	    $this->load->model('m_usuarios', 'u');
	    $this->load->model('m_estados', 'e');
	    	 
	}

	public function index()
	{
		$data['tareas'] = $this->m->listar_tareas();
		$this->load->view('layout/header');
		$this->load->view('V-tareas', $data);
		$this->load->view('layout/footer');

	}

	public function add_tareas(){
		$data['usuarios'] = $this->u->listar_usuarios();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-add_tareas', $data);
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_tareas/index'));

	}

	public function submit_modal(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_tareas/index'));

	}

	public function edit($id){
		$data['tareas'] = $this->m->tareasbyid($id);
		$data['usuarios'] = $this->u->listar_usuarios();
		$data['estados'] = $this->e->listar_estados();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-edit_tareas', $data);
		$this->load->view('layout/footer');

	}

		public function modal_edit($id){
		$data['tareas'] = $this->m->tareasbyid($id);
		$data['usuarios'] = $this->u->listar_usuarios();
		$data['estados'] = $this->e->listar_estados();
		$this->load->view('layout/header_modal');
		$this->load->helper('form');
		$this->load->view('V-edit_modal_tareas', $data);
		$this->load->view('layout/footer');

	}



	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_tareas/index'));
	}


	public function update_modal(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_calendar/tareas'));
	}



	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_tareas/index'));
	}


	public function delete_modal($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_calendar/tareas'));
	}




	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */