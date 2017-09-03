<?php
class Cream extends CI_Model
{
	public function getCream()
	{
		$this->db->select()->from('books');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>