<?php
class Book extends CI_Model
{
	public function get_book()
	{
		$this->db->select()->from('books');
		
		$query = $this->db->get();

		return $query->result_array();
	}
}
?>