 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Contact extends CI_Controller { 
    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('m_send');
    }
 
    public function index() {
        $params = $this->input->post();

        $data['title'] = "Contact us | Isy Web";

        $this->load->view('isyweb/header.php', $data);
        if (!$params) {
            $this->load->view('isyweb/contact.php');
        } else {
            $params = $this->input->post();
            $_data['name']       =    $this->input->post('name');
            $_data['email']      =    $this->input->post('email');
            $_data['subject']    =    $this->input->post('subject');
            $_data['message']    =    $this->input->post('message');
 
            $this->m_send->kirim($_data);
            $this->load->view('isyweb/s');
        }

        // $this->load->view('isyweb/contact.php');
        $this->load->view('isyweb/footer.php');
     }
 }