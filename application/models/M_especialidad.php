<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_especialidad extends CI_Model {

	public function listar_especialidad(){
		
		$query = $this->db->query('select * from especialidad');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'nombre'=>$this->input->post('txt_nombre'),			
			);

			$this->db->insert('especialidad', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function especialidadbyid($id){

		$this->db->where('id_especialidad', $id);
		$query = $this->db->get('especialidad');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'nombre'=>$this->input->post('txt_nombre')
			);
		$this->db->where('id_especialidad', $id);
		$this->db->update('especialidad', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_especialidad, $id);
		$this->db->delete('especialidad');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_especialidad.php */
/* Location: ./application/models/M_especialidad.php */