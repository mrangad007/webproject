<?php
class Profile extends CI_Model
{
	public function showResult($q,$table,$column)
	{
		$this->db->select($column)->from($table);
		foreach($q as $key => $value)
		{
		$this->db->where($key,$value);
		}
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>