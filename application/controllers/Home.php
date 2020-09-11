<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->helper("url");

		$data['title'] = "Isy Web - Jasa Pembuatan Website Murah";

		$this->load->view('isyweb/header.php', $data);
		$this->load->view('isyweb/index.php');
		$this->load->view('isyweb/footer.php');
	}
}
