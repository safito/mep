<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_memos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_memos','m');
	    	 
	}

	public function index()
	{
		$data['memos'] = $this->m->listar_memos();
		$this->load->view('layout/header');
		$this->load->view('V-memos', $data);
		$this->load->view('layout/footer');

	}

	public function add_memos(){
		$this->load->view('layout/header');
		$this->load->view('V-add_memos');
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_memos/index'));

	}

	public function edit($id){
		$data['memos'] = $this->m->memosbyid($id);

		$this->load->view('layout/header');
		$this->load->view('V-edit_memos', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_memos/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_memos/index'));
	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */