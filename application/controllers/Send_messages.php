<?php
class Send_messages extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->model('Message_status_model');
		$user=$this->session->userdata('email');
		
		$this->load->model('FeedModel');
		$email = $this->session->userdata('email');

		$data1['msg_send'] = $this->FeedModel->SendMessage($email);
		$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);
		
		$this->load->view('nav1');
		$this->load->view('messages_view',$data2);
		$this->load->view('send_message_view_in_nav');
		$this->load->view('your_friends_view_in_nav');
		$this->load->view('nav2');
		$this->load->view('send_message_form_view',$data1);
		$this->load->view('footer');
	}
} 
?>