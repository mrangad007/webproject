<?php
class Message_status_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getMessageStatus($user)
	{
		/*$sql = "SELECT Count(*) AS cnt FROM messages where rnt='".$user."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	*/
		$this->db->where('rnt',$user);
		return $this->db->count_all_results('messages');
	}
}
?>