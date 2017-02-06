<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->library('session');
    } 
 
    public function index() { 
    	if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            $this->load->view('pages/faq', $data);
        }else{
        	$data = "";
			$this->load->view('pages/faq' , $data);
        }
    } 
} 
?> 