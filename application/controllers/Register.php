<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Email_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    
	public function index()
	{
		if($this->session->userdata('userSession')){                    
            redirect('Home', 'refresh');
        }else{
            $this->load->helper(array('form'));
            $this->load->view('pages/register');   
        }
	}

	public function selectRegister(){

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

       if ($this->form_validation->run() == FALSE){
            $this->load->view('pages/register');
        }else{
            $username   = $this->input->post('username');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');

            //Veriv Text
            $verificationCode = random_string('alnum',20);
            //CHECK DUPLICATE
            $checkusername  = $this->Agivest_model->checkDuplicate("where username = '$username'");
            $checkemail     = $this->Agivest_model->checkDuplicate("where email = '$email'");

            if($checkusername == 1 || $checkemail == 1){
                $this->session->set_flashdata('duplikasi',' Email / Username telah dipakai');      
                $this->load->view('pages/register');
            }else{
                
                $insertLogin = array(
                    'username'  => $username,
                    'email'     => $email,
                    'pass'  => md5($password),
                    'statusUser'    => '0',
                    'activeStatus' => 'N',
                    'verificationCode' => $verificationCode
                );
                //INSERT TO DB
                $resultLogin     = $this->Agivest_model->insertData('fyidentitas',$insertLogin);          

                //MAKE FOLDER
                if (!file_exists('./assets/users/'.$username)) {
                    mkdir('./assets/users/'.$username, 0777, true);
                }
                //Send Verivication EMAIL
                $this->Email_model->sendVerificatinEmail($email,$verificationCode,$username); 
                $data['greet']  = "telah mendaftar di Agivest.com silahkan cek email anda untuk email konfirmasi";
                $this->load->view('pages/login', $data);
            }
        }
    }
}
