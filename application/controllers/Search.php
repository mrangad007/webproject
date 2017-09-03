<?php
class Search extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$search = $this->input->post('post_search');
		$this->load->model('FeedModel');
		$this->load->model('Search_model');
		$table = 'posts';
		$data2['message_send'] = $this->FeedModel->FeedMessage();
		$ans['search_res'] = $this->Search_model->addSearch($table,$search);
		$this->load->view('nav1');
		$this->load->view('messages_view',$data2);
		$this->load->view('send_message_view_in_nav');
		$this->load->view('your_friends_view_in_nav');
		$this->load->view('nav2');
		$this->load->view('search_bar');
		$this->load->view('search_view',$ans);
		$this->load->view('footer');
	}
}
?>