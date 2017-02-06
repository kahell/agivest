<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

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

	public function index(){
		if($this->session->userdata('userSession')){				
			redirect('Home', 'refresh');
		}else{
        	$this->load->view('pages/forgot');	
		}
	}

    function verifyEmailAddress($verificationCode){
        $result = "update fyidentitas set activeStatus= 'A' WHERE verificationCode =?";
        $this->db->query($result, array($verificationCode));
        return $this->db->affected_rows();
    }

	function checkEmail(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE){
        	$this->session->set_flashdata('gagalmasuk','Masukan email anda dengan benar');										
			$this->load->view('pages/forgot');
        }else{
        	$email = $this->input->post('email');
        	$checkEmail1  = $this->Agivest_model->checkEmailValidForgot("where email = '$email'");
        	if($checkEmail1 == 0){
	            $this->session->set_flashdata('gagalmasuk','Email belum terdaftar');  
	            $this->load->view('pages/forgot');
            }else{
                $emailVerif = $this->Agivest_model->checkEmailValid2($email);
                $result2 = '';
                foreach($emailVerif->result_array() as $row){
                    $result2 = $row['username'];
                }
                //Veriv Text
                $verificationCode = random_string('alnum',20);
                //Set VerifCode dan Statusnya
                $this->Agivest_model->updateStatus($verificationCode,$email);
                //Send Email
                $this->Email_model->sendForgotPass($email,$verificationCode,$result2);
                $data["greet"] = "a";
                $data['greet2']  = "cek email anda <br> untuk melakukan reset password";
                $this->load->view('pages/forgot', $data);
            } 
        }
	}

    function reset($verificationText=NULL){
      $noRecords = $this->Email_model->verifyPassword($verificationText);
      if($noRecords > 0){
        $data['errormsg'] = "Please reset your password!";
        $data['verificationText'] = $verificationText;
        $this->load->view('pages/forgot', $data);
      }else{
        $data['errormsg'] = "Please reset your password2!";
        $data['verificationText'] = $verificationText;
        $this->load->view('pages/forgot', $data);
      }
    }

    function resetPass(){
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passConf', 'Password Confirmation', 'trim|required|matches[password]');
        if ($this->form_validation->run() != FALSE) {
            $password = $this->input->post('password');
            $verificationText = $this->input->post('verificationText');
            //Update Password
            $this->Agivest_model->resetPassword(md5($password),$verificationText);
            //Get Aktif Status
            $aktifStatusLupaPass = $this->Agivest_model->getDataForgot($verificationText);
            $result2 = '';
            foreach ($aktifStatusLupaPass->result_array() as $row) {
                $result2 = $row['activeStatusForgotPass'];
            }
            $data['aktif']=$result2;
            $data['selamat'] = "anda berhasil dirubah";
            $this->load->view('pages/forgot', $data);
        }else{
            $verificationText = $this->input->post('verificationText');
            $this->session->set_flashdata('gagalmasuk','Password yang anda inputkan tidak sama atau password harus lebih dari 8 karakter');
            $data['errormsg'] = "Please reset your password2!";
            $data['verificationText'] = $verificationText;
            $this->load->view('pages/forgot', $data);
        }
    }

}
