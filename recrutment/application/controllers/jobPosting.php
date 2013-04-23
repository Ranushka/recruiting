<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JobPosting extends CI_Controller {

	public function index($page = 'jobPosting')
	{
		
		if ( ! file_exists('application/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['containerId'] = $page; // Capitalize the first letter

		$this->load->view('/template/header', $data);
		$this->load->view('/template/nav', $data);
		$this->load->view($page, $data);
		$this->load->view('template/footer', $data);

	}



	// function index()
	// {
	// 	$this->load->view('jobPosting', array('error' => ' ' ));
	// }

	function do_upload($page = 'jobPosting')
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('formJobPostingfile'))
		{

			$data['error'] = array('error' => $this->upload->display_errors());
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$data['containerId'] = $page; // Capitalize the first letter

			$this->load->view('/template/header', $data);
			$this->load->view('/template/nav', $data);
			$this->load->view($page, $data);
			$this->load->view('template/footer', $data);
		}
		else
		{
			$data['SuccesMsg'] = 'Img success fully upload';
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$data['containerId'] = $page; // Capitalize the first letter

			$this->load->view('/template/header', $data);
			$this->load->view('/template/nav', $data);
			$this->load->view($page, $data);
			$this->load->view('template/footer', $data);
		}
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */