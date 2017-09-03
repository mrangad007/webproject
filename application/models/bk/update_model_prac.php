<?php
class Update_model_prac extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function updateRecord()
	{
		$this->db->select();
		$this->db->from('books');

		$query = $this->db->get();
		return $query->result();
	}
	function singleRecord($id)
	{
		$this->db->select();
		$this->db->from('books');
		$this->db->where('id',$id);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
		return $query->result();	
		}
		else
		{
		return false;
		}	
	}
	function final_Update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('books',$data);
	}
	function deleteRecord($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('books');
	}
}
?>