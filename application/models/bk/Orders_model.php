<?php
class Orders_model extends CI_Model
{
	public function homeModel()
	{
		/*
		$con=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($con,"books");
		$sql="select * from books";
		$result=mysqli_query($con,$sql);
		while ($row=mysql_fetch_assoc($result)) 
		{
			$author=$row['author'];
			$book_name=$row['book_name'];
		}
		*/
		$this->db->select()->from('books');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>