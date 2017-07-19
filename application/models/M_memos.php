<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_memos extends CI_Model {

	public function listar_memos(){
		
		$query = $this->db->query('select * from memos');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		date_default_timezone_set('America/Costa_Rica');
		$today = date("Y-m-d H:i");
		$field = array(
			'fecha_creacion'=>$today,
			'titulo'=>$this->input->post('txt_titulo'),
			'descripcion'=>$this->input->post('txt_descripcion')
			);

			$this->db->insert('memos', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function memosbyid($id){

		$this->db->where('id_memo', $id);
		$query = $this->db->get('memos');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'fecha_creacion'=>$this->input->post('txt_fecha_creacion'),
			'titulo'=>$this->input->post('txt_titulo'),
			'descripcion'=>$this->input->post('txt_descripcion')
			);
		$this->db->where('id_memo', $id);
		$this->db->update('memos', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_memo, $id);
		$this->db->delete('memos');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios.php */
/* Location: ./application/models/M_usuarios.php */