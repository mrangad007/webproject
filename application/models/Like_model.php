<?php
class Like_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getLike($id)
	{
		$this->db->select();
		$this->db->from('posts');
		$this->db->where('id',$id);

		$query = $this->db->get();
		return $query->result_array();
	}
	function storeLike($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('posts',$data);
	}
	function resetLikeStatus($data)
	{
		$this->db->update('posts',$data);
	}
}
?>