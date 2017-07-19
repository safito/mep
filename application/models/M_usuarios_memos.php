<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usuarios_memos extends CI_Model {

	public function listar_usuarios_memos(){
		
		$query = $this->db->query('select * from usuarios_memos');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'id_memo'=>$this->input->post('txt_id_memo'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'fecha_recibido'=>$this->input->post('txt_fecha_recibido')
			);

			$this->db->insert('usuarios_memos', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function usuariosmemosbyid($id){

		$this->db->where('id_usuarios_memos', $id);
		$query = $this->db->get('usuarios_memos');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'id_memo'=>$this->input->post('txt_id_memo'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'fecha_recibido'=>$this->input->post('txt_fecha_recibido')
			);
		$this->db->where('id_usuarios_memos', $id);
		$this->db->update('usuarios_memos', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_usuarios_memos, $id);
		$this->db->delete('usuarios_memos');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios_memos.php */
/* Location: ./application/models/M_usuarios_memos.php */