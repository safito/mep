<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login','m');
	}

	public function index()
	{
		
		$this->load->view('V-login');
	}

	public function login()

	{

		$email = $this->input->post('txt_email');
		$password = $this->input->post('txt_password');
		$result = $this->m->login($email,$password);


		if($result){
			
			//Si el login es satisfactorio entonces se crea la sesion.
			//Esto es una prueba para probar git
			foreach ($result as $resultado){

				$id_usuario = $resultado->id_usuario;
				$nombre = $resultado->nombre;
				$rol = $resultado->rol;
			}
			

			$sess_array = array(
			'id_usuario' => $id_usuario,
			'nombre' => $nombre,
			'rol' => $rol );
			$this->session->set_userdata('logged_in', $sess_array);
			

		$this->load->view('layout/header');
		$this->load->view('V-calendar-tareas');
		$this->load->view('layout/footer');

			
		}else{
			echo "Usuario Invalido Intente de Nuevo";
		}

	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */

?>