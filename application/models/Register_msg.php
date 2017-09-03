<?php
class Register_msg extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function registerMessage($data)
	{
		$this->db->insert('messages',$data);
	}
}
?>