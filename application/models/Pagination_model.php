<?php
class Pagination_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function totalRecord()
	{
		return $this->db->count_all('posts');
	}
	function fetchData($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('posts');

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}
}
?>