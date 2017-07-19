<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calendar extends CI_Model {

	public function getTareas(){
			

			$query = $this->db->query('

				select id_tarea id,
				descripcion title,
				fecha_culminacion start
				from tareas
				');

			
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function getSolicitudes(){

		$query = $this->db->query('



	select 

			a.id_solicitud id,
			
			concat(b.nombre, " - ", c.nombre, " ", c.apellido) title,
            a.entrada start,
			a.salida end
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
	

}

/* End of file M_calendar.php */
/* Location: ./application/models/M_calendar.php */