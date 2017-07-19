<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_activos extends CI_Model {

	public function listar_activos(){
		
		$query = $this->db->query('select * from activos');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'nombre'=>$this->input->post('txt_nombre'),
			'descripcion'=>$this->input->post('txt_descripcion')
			);

			$this->db->insert('activos', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}


	}

	public function activobyid($id){

		$this->db->where('id_activo', $id);
		$query = $this->db->get('activos');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'nombre'=>$this->input->post('txt_nombre'),
			'descripcion'=>$this->input->post('txt_descripcion')
			);
		$this->db->where('id_activo', $id);
		$this->db->update('activos', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_activo, $id);
		$this->db->delete('activos');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios.php */
/* Location: ./application/models/M_usuarios.php */