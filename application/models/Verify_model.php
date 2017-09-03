<?php
class Verify_model extends CI_Model
{
	function __contruct()
	{
		parent::__contruct();
	}
	function verifyUser($userid,$pwd)
	{
		$this->db->select();
		$this->db->from('register');
		$this->db->where('username',$userid);
		$this->db->where('password',$pwd);

		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}
?>