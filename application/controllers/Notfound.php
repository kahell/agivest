<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notfound extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
    } 
 
    public function index() { 
    	if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            $this->load->model('Home_model'); 
            $this->output->set_status_header('404'); // setting header to 404
       		$this->load->view('pages/404notfound',$data);//loading view  
        }else{
            $this->output->set_status_header('404'); // setting header to 404
       		$this->load->view('pages/404notfound');//loading view  
        }
    } 
} 
?> 