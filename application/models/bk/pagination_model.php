<?php
class Pagination_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function total_record()
	{
		return $this->db->count_all('books');
	}
	function fetch_data($limit,$start)
	{
		$this->db->limit($limit,$start);
		$query = $this->db->get('books');

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $a)
			{
				$data[] = $a;
			}

			return $data;
		}
	}
}
?>