<?php
class Register_control_msg extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_msg');
	}
	function index()
	{
		if($_POST)
		{
			$data = array(
			'snt' => $this->input->post('snt'),
			'rnt' => $this->input->post('rnt'),
			'mnt' => $this->input->post('mnt')
				);

			$this->Register_msg->registerMessage($data);
			$msg = array(
				'data_insert_msg' => 'Message Sent Successfully'
				);
			$this->session->set_userdata($msg);
			redirect('');
		}
		else
		{
			redirect('');
		}

	}
}
?>