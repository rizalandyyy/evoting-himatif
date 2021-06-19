<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('u_header');
		$this->load->view('u_dashboard');
		$this->load->view('u_footer');
	}
}