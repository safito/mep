<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_archivos_tipo extends CI_Model {

	public function listar_archivos_tipo(){
		
		$query = $this->db->query('select * from archivos_tipo');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'id_archivo_tipo'=>$this->input->post('txt_id_archivo_tipo'),
			'extension'=>$this->input->post('txt_extension'),
			'descripcion'=>$this->input->post('txt_descripcion')
			
			);

			$this->db->insert('archivos_tipo', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function archivostipobyid($id){

		$this->db->where('id_archivo_tipo', $id);
		$query = $this->db->get('archivos_tipo');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'extension'=>$this->input->post('txt_extension'),
			'descripcion'=>$this->input->post('txt_descripcion')
		
			);
		$this->db->where('id_archivo_tipo', $id);
		$this->db->update('archivos_tipo', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_archivo_tipo, $id);
		$this->db->delete('archivos_tipo');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_archivos_tipo.php */
/* Location: ./application/models/M_archivos_tipo.php */