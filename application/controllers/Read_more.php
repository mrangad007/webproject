<?php
class Read_more extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->model('Message_status_model');
		$this->load->model('Read_more_model');

		$user=$this->session->userdata('email');
		
		$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);

		$id = $_GET['id'];
		$data2['message_send'] = $this->FeedModel->FeedMessage();
		$data['readmore'] = $this->Read_more_model->readMore($id);
		$this->load->view('nav1');
		$this->load->view('messages_view',$data2);
		$this->load->view('send_message_view_in_nav');
		$this->load->view('your_friends_view_in_nav');
		$this->load->view('nav2');
		$this->load->view('readmore_view',$data);
		$this->load->view('footer');
	}
}
?>