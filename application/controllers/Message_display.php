<?php
class Message_display extends CI_Controller
{
function __construct()
{
	parent::__construct();
}
function index()
{
	$this->load->model('Message_display_model');
	$this->load->model('Message_status_model');

	$user = $this->session->userdata('email');
	$data['message_see'] = $this->Message_display_model->displayMessage($user);
	
	$user=$this->session->userdata('email');

	$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);

	$this->load->view('nav1');
	$this->load->view('messages_view',$data2);
	$this->load->view('send_message_view_in_nav');
	$this->load->view('your_friends_view_in_nav');
	$this->load->view('nav2');
	$this->load->view('message_display_view',$data);
	$this->load->view('footer');
}
function message_read_more()
{
	$this->load->model('Message_display_model');
	$this->load->model('Message_status_model');

	$id = $_GET['id'];

	$user=$this->session->userdata('email');

	$data['message_rd_more'] = $this->Message_display_model->readMessage($id);
	$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);
	

	$this->load->view('nav1');
	$this->load->view('messages_view',$data2);
	$this->load->view('send_message_view_in_nav');
	$this->load->view('your_friends_view_in_nav');
	$this->load->view('nav2');
	$this->load->view('message_rd_view',$data);
	$this->load->view('footer');
}
function message_del()
{
	$this->load->model('Message_display_model');

	$id = $_GET['id'];
	
	$this->Message_display_model->delMessage($id);

	redirect('message_display');
}	
}
?>