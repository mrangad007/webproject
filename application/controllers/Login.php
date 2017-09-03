<?php
class Login extends CI_Controller
{
	function __contruct()
	{
		parent::__contruct();
		$this->load->helper('url');
	}
	function verify()
	{
		$userid = $this->input->post('userid');
		$pwd = $this->input->post('pwd');
		
		$this->load->model('Verify_model');
		$answer = $this->Verify_model->verifyUser($userid,$pwd);

		if($answer)
		{
			$data = array(
				'user' => $answer[0]['username'],
				'email' => $answer[0]['email']
				);
			$this->session->set_userdata($data);
			echo "<script type='text/javascript'> document.location = '".base_url()."'; </script>";
		}
		else
		{
			$data = array(
				'wcred' => 'Login Credentials are wrong'
				);
			$this->session->set_userdata($data);
			echo "<script type='text/javascript'> document.location = '".base_url()."'; </script>";
		}
	}
	function logout()
	{
		$this->load->model('Like_model');
		$data =array(
			'like_status' => 0
		);
		$this->Like_model->resetLikeStatus($data);
		$this->session->unset_userdata('user');
		redirect('');
	}
}
?>