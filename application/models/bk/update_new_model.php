<?php
class Update_new_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function updateRecord()
	{
		$this->db->select();
		$this->db->from('books');

		$query = $this->db->get();
		return $query->result();
	}
	public function fetch($id)
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
	public function updateForm($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('books',$data);
	}
}
?>