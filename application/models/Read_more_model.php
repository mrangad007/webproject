<?php
class Read_more_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function readMore($id)
	{
		$this->db->select()->from('posts');
		$this->db->where('id',$id);

		$query = $this->db->get();
		return $query->result_array();
	}
}
?>