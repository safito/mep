<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuarios_tipo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_usuarios_tipo','m');
	    	 
	}

	public function index()
	{
		$data['usuarios_tipo'] = $this->m->listar_usuarios_tipo();
		$this->load->view('layout/header');
		$this->load->view('V-usuarios_tipo', $data);
		$this->load->view('layout/footer');

	}

	public function add_usuarios_tipo(){
		$this->load->view('layout/header');
		$this->load->view('V-add_usuarios_tipo');
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_usuarios_tipo/index'));

	}

	public function edit($id){
		$data['usuarios_tipo'] = $this->m->usuariostipobyid($id);

		$this->load->view('layout/header');
		$this->load->view('V-edit_usuarios_tipo', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_usuarios_tipo/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_usuarios_tipo/index'));
	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */