<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eek extends CI_Controller {
	public function index()
	{
		$this->load->helper("url");
		$this->load->view('isyweb/404.php');
	}
}
