<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BACKEND_Controller {

	public function index()
	{
		$data['top_title']	= "";
		$data['page_title']	= "";
		$data['child_title']	= "";
		$data['content'] = $this->load->view('upload', $data,true);;
		$this->load->view('index', $data);
	}

}

/* End of file home.php */
/* Location: .//C/xampp/htdocs/masteradmin/app_cms/controllers/home.php */