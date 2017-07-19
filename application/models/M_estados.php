<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_estados extends CI_Model {

	public function listar_estados(){
		
		$query = $this->db->query('select * from estados');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			
			'estado'=>$this->input->post('txt_estado')
			
			);

			$this->db->insert('estados', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function estadobyid($id){

		$this->db->where('id_estado', $id);
		$query = $this->db->get('estados');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'estado'=>$this->input->post('txt_estado')
			
			);
		$this->db->where('id_estado', $id);
		$this->db->update('estados', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_estado, $id);
		$this->db->delete('estados');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_estados.php */
/* Location: ./application/models/M_usuarios.php */