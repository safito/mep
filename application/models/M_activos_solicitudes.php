<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_activos_solicitudes extends CI_Model {

	public function listar_activos_solicitudes(){
		
		$query = $this->db->query('

			
			select 

			a.id_solicitud,
			b.nombre as id_activo,
			concat(c.nombre, " ", c.apellido) as id_usuario,
			d.estado as id_estado,
			a.entrada,
			a.salida
			from 
			activos_solicitudes as a,
			activos as b,
			usuarios as c,
			estados as d

			where a.id_activo = b.id_activo and
			a.id_usuario = c.id_usuario and
			a.id_estado = d.id_estado


			');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'id_solicitud'=>$this->input->post('txt_id_solicitud'),
			'id_activo'=>$this->input->post('txt_id_activo'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'id_estado'=>'1',
			'entrada'=>$this->input->post('txt_entrada'),
			'salida'=>$this->input->post('txt_salida')
			
			);

			$this->db->insert('activos_solicitudes', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}
	// as = Activo Solicitud by Id
	public function asbyid($id){



		$this->db->where('id_solicitud', $id);
		$query = $this->db->get('activos_solicitudes');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'id_activo'=>$this->input->post('txt_id_activo'),
			'id_usuario'=>$this->input->post('txt_id_usuario'),
			'id_estado'=>$this->input->post('txt_id_estado'),
			'entrada'=>$this->input->post('txt_entrada'),
			'salida'=>$this->input->post('txt_salida')
			
			);
		$this->db->where('id_solicitud', $id);
		$this->db->update('activos_solicitudes', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_solicitud, $id);
		$this->db->delete('activos_solicitudes');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	//La siguiente funcion va a validar que el activo
	//No este ocupado entre rangos que se puedan traslapar
	// o bien crear una solicitud doble.
	// retorna true si hay espacio de lo contrario false
	public function check_slot($id_activo, $start, $end){

		$SQL ='

		select * from activos_solicitudes 
		where
		((entrada <= ?) and (salida >= ?)) or 
		(entrada between ? and ?) or
		(salida between ? and ?) and
		id_activo = ?';

		$query=$this->db->query($SQL, array($start, $end, $start, $end, $start, $end, $id_activo));


		if($query->num_rows() >= 1)
			{
				return false;
			}else{
				return true;
			}

	}

}

/* End of file M_activos_solicitudes.php */
/* Location: ./application/models/M_activos_solicitudes.php */