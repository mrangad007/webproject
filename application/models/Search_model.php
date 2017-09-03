<?php
class Search_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function addSearch($table,$search)
	{
		$s = $search;
		$this->db->select()->from($table);
		$this->db->like('post_title',$s);

		$query = $this->db->get();
		return $query->result_array();
	}
}
?>