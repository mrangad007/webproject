<?php
class FeedModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function FeedGet()
	{
		$this->db->select()->from('posts');
		$query = $this->db->get();
		return $query->result_array();
	}
	function FeedMessage()
	{
		$this->db->select()->from('register');
		$query = $this->db->get();
		return $query->result_array();	
	}
	function SendMessage($email)
	{
		$this->db->select()->from('register');
		$this->db->where('email !=',$email);

		$query = $this->db->get();
		return $query->result_array();
	}
}
?>

