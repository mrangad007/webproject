<?php
class Message_display_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function displayMessage($user)
	{
		$this->db->select()->from('messages');
		$this->db->where('rnt',$user);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	function readMessage($id)
	{
		$this->db->select()->from('messages');
		$this->db->where('id',$id);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	function delMessage($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('messages');
	}
}
?>