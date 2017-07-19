<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_calendar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_calendar','mcal');
		
	}

	public function tareas()
	{
		$this->load->view('layout/header');
		$this->load->view('V-calendar-tareas');
		$this->load->view('layout/footer');

	}

	public function getTareas(){
		$data = $this->mcal->getTareas();
		echo json_encode($data);
	}

	public function solicitudes()
	{
		$this->load->view('layout/header');
		$this->load->view('V-calendar-solicitudes');
		$this->load->view('layout/footer');
	}

	public function getSolicitudes(){
		$data = $this->mcal->getSolicitudes();
		echo json_encode($data);
	}

	

}

/* End of file C_calendar.php */
/* Location: ./application/controllers/C_calendar.php */