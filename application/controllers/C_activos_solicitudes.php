<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_activos_solicitudes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_activos_solicitudes','m');
	    $this->load->model('m_activos','a');
	    $this->load->model('m_usuarios', 'u');
	    $this->load->model('m_estados', 'e');
	    	 
	}

	public function index()
	{
		$data['activos_solicitudes'] = $this->m->listar_activos_solicitudes();
		$this->load->view('layout/header');
		$this->load->view('V-activos_solicitudes', $data);
		$this->load->view('layout/footer');

	}

	public function add_activos_solicitudes(){		
		$data['activos'] = $this->a->listar_activos();
		$data['usuarios'] = $this->u->listar_usuarios();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-add_activos_solicitudes', $data);
		$this->load->view('layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_activos_solicitudes/index'));

	}

	public function edit($id){
		$data['activos_solicitudes'] = $this->m->asbyid($id);
		$data['activos'] = $this->a->listar_activos();
		$data['usuarios'] = $this->u->listar_usuarios();
		$data['estados'] = $this->e->listar_estados();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-edit_activos_solicitudes', $data);
		$this->load->view('layout/footer');

	}

	public function modal_edit($id){
		$data['activos_solicitudes'] = $this->m->asbyid($id);
		$data['activos'] = $this->a->listar_activos();
		$data['usuarios'] = $this->u->listar_usuarios();
		$data['estados'] = $this->e->listar_estados();
//issue #2 -- Bootstrap cae en modo oversubscribed se elimina el requisito de header y footer
		//puesto que el parent ya los contiene.
//		$this->load->view('layout/header_modal');
		$this->load->helper('form');
		$this->load->view('V-edit_modal_solicitudes', $data);
//		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_activos_solicitudes/index'));
	}


	public function update_modal(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_calendar/solicitudes'));
	}


	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_activos_solicitudes/index'));
	}

	//Sirve para comprobar que no haya un traslape a la hora de solicitar un activo
	public function check_slot(){
		
		$id_activo = $this->input->post('txt_id_activo');
		$start = $this->input->post('txt_entrada');
		$end = 	$this->input->post('txt_salida');

		
		if($this->m->check_slot($id_activo, $start, $end)){
			echo 1;
		}else{
			echo 0;
		}


	}

	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */