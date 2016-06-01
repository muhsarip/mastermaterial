<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends BACKEND_Controller {

	public function index()
	{
		$data['top_title']	= "LV Backend";
		$data['page_title']	= "LV Backend";
		$data['child_title']	= "LV Backend";
		$data['content'] = $this->load->view('content', $data,true);;
		$this->load->view('index', $data);
	}

}

/* End of file home.php */
/* Location: .//C/xampp/htdocs/masteradmin/app_cms/controllers/home.php */