<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tareas extends CI_Model {

	public function listar_tareas(){
		
		$query = $this->db->query('		

			select 
			a.id_tarea,
			a.descripcion,
			a.fecha_creacion,
			a.fecha_culminacion,
			b.email as id_usuario_creador,
			c.email as id_usuario_asignado,
			d.estado as id_estado
			from tareas as a,
			usuarios as b,
			usuarios as c,
			estados as d

				where
					a.id_usuario_creador = b.id_usuario and
			        a.id_usuario_asignado = c.id_usuario and
			        a.id_estado = d.id_estado

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
			'descripcion'=>$this->input->post('txt_descripcion'),
			'fecha_creacion'=>$today,
			'fecha_culminacion'=>$this->input->post('txt_fecha_culminacion'),
			'id_usuario_creador'=>$this->input->post('txt_id_usuario_creador'),
			'id_usuario_asignado'=>$this->input->post('txt_id_usuario_asignado'),
			'id_estado'=>'1'
			
			);

			$this->db->insert('tareas', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function tareasbyid($id){

		$this->db->where('id_tarea', $id);
		$query = $this->db->get('tareas');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function listar_mistareas($id_asignado){
		
		
			$SQL ='
			select

				id_tarea
				from tareas
				where id_usuario_asignado = ?';

		$query=$this->db->query($SQL, array($id_asignado));
			

		if($query->num_rows() > 0)
			{
				return $query->result();
			}else{
				return false;
			}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'descripcion'=>$this->input->post('txt_descripcion'),
			'fecha_creacion'=>$this->input->post('txt_fecha_creacion'),
			'fecha_culminacion'=>$this->input->post('txt_fecha_culminacion'),
			'id_usuario_creador'=>$this->input->post('txt_id_usuario_creador'),
			'id_usuario_asignado'=>$this->input->post('txt_id_usuario_asignado'),
			'id_estado'=>$this->input->post('txt_id_estado')
			
			);
		$this->db->where('id_tarea', $id);
		$this->db->update('tareas', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_tarea, $id);
		$this->db->delete('tareas');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_tareas.php */
/* Location: ./application/models/M_tareas.php */