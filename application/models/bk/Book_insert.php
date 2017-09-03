<?php
class Book_insert extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function insertBook($data)
	{
		$this->db->insert('books',$data);
		return "Successfully inserted";
	}
}
?>