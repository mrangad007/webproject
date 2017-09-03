<?php
class Update_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function select()
	{
		$this->db->select();
		$this->db->from('books');

		$query = $this->db->get();
		return $query->result();
	}
}
?>