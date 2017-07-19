<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usuarios_tipo extends CI_Model {

	public function listar_usuarios_tipo(){
		
		$query = $this->db->query('select * from usuarios_tipo');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'rol'=>$this->input->post('txt_rol')
			);

			$this->db->insert('usuarios_tipo', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function usuariostipobyid($id){

		$this->db->where('id_usuario_tipo', $id);
		$query = $this->db->get('usuarios_tipo');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'rol'=>$this->input->post('txt_rol')
			);
		$this->db->where('id_usuario_tipo', $id);
		$this->db->update('usuarios_tipo', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_usuario_tipo, $id);
		$this->db->delete('usuarios_tipo');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios_tipo.php */
/* Location: ./application/models/M_usuarios_tipo.php */