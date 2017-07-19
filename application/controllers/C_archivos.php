<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_archivos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('m_archivos','m');
	    $this->load->model('m_especialidad', 'e');
	    $this->load->model('m_archivos_tipo', 'at');
	    $this->load->model('m_tareas', 't');
	    $this->load->model('m_usuarios', 'u');

	    	 
	}

	public function index()
	{
		$data['archivos'] = $this->m->listar_archivos();
		$this->load->view('layout/header');
		$this->load->view('V-archivos', $data);
		$this->load->view('layout/footer');

	}

	public function add_archivos(){
		$id_usuario = $this->session->userdata['logged_in']['id_usuario'];
		$data['especialidades'] = $this->e->listar_especialidad();
		$data['archivos_tipo'] = $this->at->listar_archivos_tipo();
		$data['tareas'] = $this->t->listar_mistareas($id_usuario);
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-add_archivos', $data);
		$this->load->view('layout/footer');
	}

	public function submit(){
		
		
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Añadido');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Añadir');
		}
		redirect(base_url('c_archivos/index'));

	}

	public function edit($id){
		$id_usuario = $this->session->userdata['logged_in']['id_usuario'];
		$data['archivos'] = $this->m->archivosbyid($id);
		$data['especialidades'] = $this->e->listar_especialidad();
		$data['archivos_tipo'] = $this->at->listar_archivos_tipo();
		$data['tareas'] = $this->t->listar_mistareas($id_usuario);
		$data['usuarios'] = $this->u->listar_usuarios();
		$this->load->view('layout/header');
		$this->load->helper('form');
		$this->load->view('V-edit_archivos', $data);
		$this->load->view('layout/footer');

	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Actualizado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Actualizar');
		}
		redirect(base_url('c_archivos/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Registro Eliminado');

		}else{
			$this->session->set_flashdata('error_msg', 'Problemas para Eliminar');
		}
		redirect(base_url('c_archivos/index'));
	}


	public function save(){

	
		if ($this->do_upload()){
			$this->submit();
		}else{
			echo "hubo un error";
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
                
		}
		


	}
	 
 	public function do_upload()
        {

        	//Ahora se necesitra traer el nombre de la especialidad.
			$id_especialidad = $this->input->post('txt_id_especialidad');
			$especialidad_array = $this->e->especialidadbyid($id_especialidad);
			$especialidad =  $especialidad_array->nombre;

        	
        		//El siguiente método comprueba el path, el path está compuesto por el 
        		//Nombre de la Especialidad y el año en curso por ultimo el nombre asignado
        		//De esta forma se almacenan los archivos en subfolders
        		// Si el folder no existe entonces se crea por primera vez.
        		
        		$year = date('Y');
				$path = "./uploads/" . $especialidad . "/" . $year . "/";
				

				if(!file_exists($path)){
					echo $path;

					//Folder no existe se va a crear
					//Modo 644 para seguridad, y el argumento true crea recursivo
					mkdir($path, 0644, true);
					
					}

				

                $config['upload_path']          = $path;
                $config['allowed_types']        = '*';
            

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('txt_userfile'))
                {
                		return false;
                        //$error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
                        //$this->load->view('upload_success', $data);
                	    return true;
                }
        }


	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */