<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListApplicants extends CI_Controller {

	public function index($page = 'listApplicants')
	{
		//$this->load->view('home');




			
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

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */