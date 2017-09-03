<?php
class Pagination extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->library('pagination');
		$this->load->model('Pagination_model');

		$config['base_url'] = base_url().'pagination/index';
		$config['per_page'] = 2;
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

		$data['pg_res'] = $this->Pagination_model->fetchData($config['per_page'],$page);

		$data['links'] = $this->pagination->create_links();

		$this->load->view('pagination_view',$data);
	}
}