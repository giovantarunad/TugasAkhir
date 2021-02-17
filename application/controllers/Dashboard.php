<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
    }

    public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/menu');
		$this->load->view('templates/auth_footer');
	}
}