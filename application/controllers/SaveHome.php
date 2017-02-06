<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveHome extends CI_Controller {

	public function __construct(){
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->library('form_validation');
     }

    public function index() { 
      if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            $this->load->view('pages/savean_Home', $data);
        }else{
          $data = "";
          $this->load->view('pages/savean_Home' , $data);
        }
    } 
}
