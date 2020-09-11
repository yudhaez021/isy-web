<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_send extends CI_Model{

       function kirim($data)
       {
            $this->db->insert('data',$data);
       }
  }