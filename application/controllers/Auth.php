<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['title'] = 'Silahkan Login';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function login()
	{

		$bidan = $this->input->post('email', true);
		$pass = md5($this->input->post('password', true));

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('g-recaptcha-response', '<strong>Captcha</strong>', 'callback_getResponseCaptcha');

		$form_response = $this->input->post('g-recaptcha-response');
		$url = "https://www.google.com/recaptcha/api/siteverify";

		$secretkey = "6Lex8TYaAAAAAKoEpICsa954vE4ZWFReF5Dxz29J";

		$response = file_get_contents($url . "?secret=" . $secretkey . "&response=" . $form_response . "&remoteip=" . $_SERVER["REMOTE_ADDR"]);

		$data = json_decode($response);
		print_r($data);

		
	}

	public function getResponseCaptcha($str)
	{
		$this->load->library('recaptcha');
		$response = $this->recaptcha->verifyResponse($str);
		if ($response['success']) {
			return true;
		} else {
			$this->form_validation->set_message('getResponseCaptcha', '%s is required.');
			return false;
		}
	}
}
