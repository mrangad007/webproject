<?php
class Register_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function registerUser($data)
	{
		$this->db->insert('register',$data);
	}
}
?>