<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usuarios extends CI_Model {

	public function listar_usuarios(){
		
		$query = $this->db->query('


			select 
				a.id_usuario,
				b.rol as id_usuario_tipo,
				c.nombre as id_especialidad,
				a.nombre,
				a.apellido,
				a.email,
				a.telefono,
				a.password
				from usuarios as a,
				usuarios_tipo as b,
				especialidad as c
				where 
				a.id_usuario_tipo = b.id_usuario_tipo and
    			a.id_especialidad = c.id_especialidad
    			order by a.id_usuario
    
			');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function submit(){
		$field = array(
			'id_usuario_tipo'=>$this->input->post('txt_id_usuario_tipo'),
			'id_especialidad'=>$this->input->post('txt_id_especialidad'),
			'nombre'=>$this->input->post('txt_nombre'),
			'apellido'=>$this->input->post('txt_apellido'),
			'email'=>$this->input->post('txt_email'),
			'telefono'=>$this->input->post('txt_telefono'),
			'password'=>$this->input->post('txt_password')
			);

			$this->db->insert('usuarios', $field);
			if($this->db->affected_rows() > 0 ){
				return true;
			}else{
				return false;
			}



	}

	public function usuariobyid($id){

		$this->db->where('id_usuario', $id);
		$query = $this->db->get('usuarios');
		
		if ($query->num_rows() > 0){
			return $query->row();

		}else{
			return false;
			
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'id_usuario_tipo'=>$this->input->post('txt_id_usuario_tipo'),
			'id_especialidad'=>$this->input->post('txt_id_especialidad'),
			'nombre'=>$this->input->post('txt_nombre'),
			'apellido'=>$this->input->post('txt_apellido'),
			'email'=>$this->input->post('txt_email'),
			'telefono'=>$this->input->post('txt_telefono'),
			'password'=>$this->input->post('txt_password')
			);
		$this->db->where('id_usuario', $id);
		$this->db->update('usuarios', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where(id_usuario, $id);
		$this->db->delete('usuarios');
		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

}

/* End of file M_usuarios.php */
/* Location: ./application/models/M_usuarios.php */