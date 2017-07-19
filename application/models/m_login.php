<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function login($email, $password){

	
		$SQL ='
			select

				a.id_usuario,
				b.rol,
				a.email,
				a.password,
				concat(a.nombre, " ", a.apellido ) as nombre

					from usuarios as a,
    				usuarios_tipo as b
    
				where a.id_usuario_tipo = b.id_usuario_tipo and
				email = ? and
				password = ?';

		$query=$this->db->query($SQL, array($email,$password));
			

		if($query->num_rows() == 1)
			{
				return $query->result();
			}else{
				return false;
			}

	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */


?>

