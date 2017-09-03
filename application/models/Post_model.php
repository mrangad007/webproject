<?php
class Post_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function addPost($data_post)
	{
		$this->db->insert('posts',$data_post);
	}
}
?>