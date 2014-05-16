<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user_by_email($email) 
	{
		$this->db->where('email', $email);
		
		$query = $this->db->get('usuarios');

		if ( $query->num_rows > 0 ) {
			return $query->row();
		}

		return FALSE;
	}

	/*public function get_full_user_by_id($id)
	{
		$this->db->where('usuarios.id', $id);
		$this->db->join('countries country', 'country_id = code');
		
		$query = $this->db->get('usuarios');

		if ( $query->num_rows > 0 ) {
			return $query->row();
		}

		return FALSE;
	}*/

	function insert_user($data)
	{
		$this->db->insert('usuarios', $data); 
	}
}