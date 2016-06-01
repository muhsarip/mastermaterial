<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LV_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		
	}
	public function sendEmail($email_from, $email_from_name, $email_to, $email_subject, $html_message) {
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'milamusikdotcom@gmail.com',
			'smtp_pass' => 'admin!@#$%^&*()',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($email_from, $email_from_name);
		$this->email->to($email_to);
		$this->email->subject($email_subject);
		$this->email->message($html_message);
		return $this->email->send();
	}
	public function sendResponse($response_code=200, $response_message='OK', $response_data = null) {
		$response['c'] = $response_code;
		$response['m'] = $response_message;
		$response['d'] = $response_data;
		echo json_encode($response);
		die();
	}

}
/**
* 
*/
class CLIENT_Controller extends LV_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
}
class BACKEND_Controller extends LV_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
}