<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {
	public function index()
	{
		$this->load->helper("url");

		$data['title'] = "How it works | Isy Web";

		$this->load->view('isyweb/header.php', $data);
		$this->load->view('isyweb/how.php');
		$this->load->view('isyweb/footer.php');
	}
}
