<?php
class Like extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function like_cnt()
	{
		$id = $_GET['id'];
		$this->load->model('Like_model');
		$get_like= $this->Like_model->getLike($id);

		$like_take = $get_like[0]['like']+1;
		$like_status = $get_like[0]['like_status'];

		if($like_status == 0)
		{
		$data =array(
			'like' =>  $like_take,
			'like_status' => 1
		);
		$this->Like_model->storeLike($data,$id);

		$like_msg =array(
			'like_success' => 'Successfully showed your love'
		);
		$this->session->set_userdata($like_msg);
		redirect('');	
		}
		else
		{
		redirect('');	
		}
	}
	function dike_cnt()
	{
		$id = $_GET['id'];
		$this->load->model('Like_model');
		$get_dike= $this->Like_model->getLike($id);

		$dike_take = $get_dike[0]['dike']+1;
		$like_status = $get_dike[0]['like_status'];

		if($like_status == 0)
		{
		$data =array(
			'dike' =>  $dike_take,
			'like_status' => 1
		);
		$done = $this->Like_model->storeLike($data,$id);

		$like_msg =array(
			'dike_success' => 'Successfully Diked'
		);
		$this->session->set_userdata($like_msg);
		redirect('');
		}
		else
		{
		redirect('');	
		}
	}
}
?>