<?php
class Post extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Post_model');
	}

	function do_upload()
	{
		if($_POST)
		{
			$config = array();
			$config['upload_path'] = './image';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '2024';
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload())
			{
				$error_store = array('error' => $this->upload->display_errors());
				$this->session->set_userdata($error_store);
				redirect('');
			}
			else
			{

			$file_data = $this->upload->data();
			$data_post = array(
			'post_author' => $this->input->post('post_author'),
			'post_title' => $this->input->post('post_title'),
			'post_date' => date('y-m-d'),
			'post_image' => $file_data['file_name'],
			'post_content' => $this->input->post('post_content')
				);

			$this->Post_model->addPost($data_post);
			$error_msg = array(
				'post_msg' => 'Successfully Posted'
				);
			$this->session->set_userdata($error_msg);
			redirect('');
			}
		}
	}
}
?>