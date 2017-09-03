<?php
class Coffee extends CI_Model
{
	public function get_coffee()
	{
		$this->db->select()->from('books');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>