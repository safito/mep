<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_archivos extends CI_Model {

	public function listar_archivos(){
		
		$query = $this->db->query('

		select 
		a.id_archivo,
		a.fecha,
		b.extension as id_archivo_tipo,
		c.nombre as id_especialidad,		
		concat(d.nombre, " ", d.apellido) as id_usuario,
		a.id_tarea,
		a.nombre,
		a.descripcion
		from 
			archivos as a,
		    archivos_tipo as b,
		    especialidad as c,
		    usuarios as d
		    
		    where a.id_archivo_tipo = b.id_archivo_tipo and
				  a.id_especialidad = c.id_especialidad and
		          a.id_usuario = d.id_usuario;

			');
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
			'nombre'=>$this->input->post('txt_nombre'),
			'descripcion'=>$this->input->post('txt_descripcion'),
			'fecha'=>$today,
			'id_archivo_tipo'=>$this->input->post('txt_id_archivo_tipo'),
			'id_especialidad'=>$this->input->post('txt_id_especialidad'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'id_tarea'=>$this->input->post('txt_id_tarea')
			
			);

			$this->db->insert('archivos', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function archivosbyid($id){

		$this->db->where('id_archivo', $id);
		$query = $this->db->get('archivos');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'fecha'=>$this->input->post('txt_fecha'),
			'id_archivo_tipo'=>$this->input->post('txt_id_archivo_tipo'),
			'id_especialidad'=>$this->input->post('txt_id_especialidad'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'id_tarea'=>$this->input->post('txt_id_tarea')
			
			);
		$this->db->where('id_archivo', $id);
		$this->db->update('archivos', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_archivo, $id);
		$this->db->delete('archivos');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios.php */
/* Location: ./application/models/M_usuarios.php */