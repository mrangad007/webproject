<?php
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}
	function index()
	{
		if($_POST)
		{
			$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
				);

			$this->Register_model->registerUser($data);
			$error = array(
				'msg' => 'Successfully Registered'
				);
			$this->session->set_userdata($error);
			redirect('');
		}
		else
		{
			$this->load->view('home');
		}

	}
}
?>