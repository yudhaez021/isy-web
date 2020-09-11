<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	public function index()
	{
		$this->load->helper("url");

		$data['title'] = "Portfolio | Isy Web";

		$this->load->view('isyweb/header.php', $data);
		$this->load->view('isyweb/portfolio.php');
		$this->load->view('isyweb/footer.php');
	}
}
