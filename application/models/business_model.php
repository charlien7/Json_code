<?php 

class Business_model extends CI_Model
{
	
	function get_all()
	{
		$query = $this->db->get('categories');

		if ( $query->num_rows() > 0 ) {
			return $query->result_array();
		}

		return FALSE;
	}

	function get_by_id($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->get('categories');

		if ( $query->num_rows() > 0 ) {
			return $query->row_array();
		}

		return FALSE;
	}

	function update()
	{

	}
}