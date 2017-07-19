<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_activos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_activos','m');
	    	 
	}

	public function index()
	{
		$data['activos'] = $this->m->listar_activos();
		$this->load->view('layout/header');
		$this->load->view('V-activos', $data);
		$this->load->view('layout/footer');

	}

	public function add_activos(){
		$this->load->view('layout/header');
		$this->load->view('V-add_activos');
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_activos/index'));

	}

	public function edit($id){
		$data['activo'] = $this->m->activobyid($id);

		$this->load->view('layout/header');
		$this->load->view('V-edit_activos', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_activos/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_activos/index'));
	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */