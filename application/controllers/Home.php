<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->library('pagination');
		$this->load->model('Pagination_model');
		$this->load->model('Message_status_model');

		$config['base_url'] = base_url().'home/index';
		$config['per_page'] = 3;
		$config['total_rows'] = $this->Pagination_model->totalRecord();

		$this->pagination->initialize($config);

		if($this->uri->segment(3))
		{
			$page = $this->uri->segment(3);
		}
		else
		{
			$page=0;
		}

		$data_pg['pg_res'] = $this->Pagination_model->fetchData($config['per_page'],$page);

		$data_pg['links'] = $this->pagination->create_links();

		$user=$this->session->userdata('email');

		$data2['message_status'] = $this->Message_status_model->getMessageStatus($user);

		$this->load->view('nav1');
		$this->load->view('messages_view',$data2);
		$this->load->view('send_message_view_in_nav');
		$this->load->view('your_friends_view_in_nav');
		$this->load->view('nav2');
		$this->load->view('search_bar');
		$this->load->view('content',$data_pg);
		$this->load->view('footer');
	}
	function developer()
	{
		$this->load->view('developer_profile_view');
	}
}
?>