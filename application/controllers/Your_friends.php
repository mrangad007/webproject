<?php
class Your_friends extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->model('FeedModel');
		$this->load->model('Message_status_model');
		
		$user=$this->session->userdata('email');

		$data1['your_friends'] = $this->FeedModel->SendMessage($user);
		$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);

		$this->load->view('nav1');
		$this->load->view('messages_view',$data2);
		$this->load->view('send_message_view_in_nav');
		$this->load->view('your_friends_view_in_nav');
		$this->load->view('nav2');
		$this->load->view('your_friends_view',$data1);
		$this->load->view('footer');
	}
	function send_message()
	{
		echo "under maintenance,<a href='".base_url()."'>Go Back</a>";
	}
} 
?>